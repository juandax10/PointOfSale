@extends('welcome')
@section('title')
    Inventario
@endsection
@section('content')

    <link rel="stylesheet" href="{{URL::to('css/inventario.css')}}">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,500,300,700">

    <div class="ui-widget">
        <label for="tags">BUSCAR: </label>
        <input id="tags" title="Buscar producto" class="tag"/>
    </div>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-3">
            <form action="{{url('/save-product')}}" method="post">
                {{csrf_field()}}
                <input type="text" id="id" name="id" value="0" hidden><br>
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" title="Ingresar nombre">
                <br>
                <label for="compra">Precio Compra:</label>
                <input type="text" id="compra" name="compra" title="Ingresar precio compra">
                <br>
                <label for="venta">Precio Venta:</label>
                <input type="text" id="venta" name="venta" title="Ingresar precio venta">
                <br>
                <label for="catego">Categoria</label>
                <select name="catego" id="catego">
                    @foreach($catego as $c)
                        <option value="{{$c->id}}">{{$c->nombre}}</option>
                    @endforeach
                </select>

                <div id="resultadoSabor"></div>
                <label for="cantidad">Cantidad:</label>
                <input type="text" id="cantidad" name="cantidad" title="Ingresar cantidad">
                <br>
                <input type="submit" id="agregar" name="agregar" value="Agregar">
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="container">
                <section>
                    <h1>TABLA</h1>

                    <div class="tbl-header">
                        <table cellpadding="0" cellspacing="0" border="0">
                            <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Precio Compra</th>
                                <th>Precio Venta</th>
                                <th>Categoria</th>
                                <th>Cantidad Total</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                    <div class="fond">
                        <div class="tbl-content">
                            <table cellpadding="0" cellspacing="0" border="0">
                                <tbody>
                                @foreach($catego as $c)
                                    @foreach($products as $producto)
                                        @if($c->id == $producto->categoria_id)
                                            <tr>
                                                <td class="id" hidden>{{$producto->id}}</td>
                                                <td>{{$producto->nombre}} </td>
                                                <td>{{$producto->precio_Compra}}</td>
                                                <td>{{$producto->precio_Venta}}</td>
                                                <td>{{$c->nombre}}</td>
                                                <td>{{$producto->cantidad}}</td>
                                                <td class="boton"><i class="fa fa-pencil" aria-hidden="true"></i></td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

@endsection
@section('scripts')
    <link rel="stylesheet" href="{{URL::to('css/jquery-ui.css')}}">
    <script src="{{URL::to('js/jquery-ui.js')}}"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            var languages = <?php echo json_encode($results2)?>;
            $("#tags").autocomplete({
                source: languages
            });

            $(".boton").click(function () {
                var values = "";
                var x = 0;
                $(this).parents("tr").find("td").each(function () {
                    values = $(this).html();
                    if (x == 0) {
                        $('#id').val(values);
                    }
                    if (x == 1) {
                        $('#nombre').val(values);
                    }
                    if (x == 2) {
                        $('#compra').val(values);
                    }
                    if (x == 3) {
                        $('#venta').val(values);
                    }
                    if (x == 4) {
                        if (values == 'SOMBRERO') {
                            $('select>option:eq(0)').prop('selected', true);
                        }
                        if (values == 'FIESTA') {
                            $('select>option:eq(1)').prop('selected', true);
                        }
                        if (values == 'ROPA') {
                            $('select>option:eq(2)').prop('selected', true);
                        }
                        if (values == 'SUPLES') {
                            $('select>option:eq(3)').prop('selected', true);
                        }
                    }
                    if (x == 5) {
                        $('#cantidad').val(values);
                    }
                    x++;
                });
            });
            $("#catego").change(function () {
                var id = $("#catego").val();
                if (id == 4) {
                    $.ajax({
                        type: "GET",
                        url: "{{route('catego')}}",
                        dataType: "html",
                        success: function (response) {
                            $("#resultadoSabor").html(response);
                            console.log(response);
                        }

                    });
                }
            });
            $("#tags").on("keyup", function () {
                var value = $(this).val().toUpperCase();
                removeHighlighting($("table tr em"));
                $("table tr").each(function (index) {
                    if (index !== 0) {
                        $row = $(this);
                        var $tdElement = $row.find("td:first");
                        var id = $tdElement.text();
                        var matchedIndex = id.indexOf(value);//returns the position of the first occurrence of a specified value in a string.
                        if (matchedIndex != 0) {
                            $row.hide();
                        }
                        else {
                            addHighlighting($tdElement, value);
                            $row.show();
                        }
                    }
                });
            });

            function removeHighlighting(highlightedElements) {
                highlightedElements.each(function () {
                    var element = $(this);
                    element.replaceWith(element.html());
                })
            }

            function addHighlighting(element, textToHighlight) {
                var text = element.text();
                var highlightedText = '<em>' + textToHighlight + '</em>';
                var newText = text.replace(textToHighlight, highlightedText);
                element.html(newText);
            }

        });
    </script>
@endsection