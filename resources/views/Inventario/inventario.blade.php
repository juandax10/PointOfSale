@extends('welcome')
@section('title')
    Inventario
@endsection
@section('content')

    <link rel="stylesheet" href="{{URL::to('css/inventario.css')}}">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,500,300,700">

    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-3">
            <form action="{{url('/save-product')}}" method="post">
                {{csrf_field()}}
                <input type="text" id="id" name="id" value="0" hidden><br>
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" title="Ingresar nombre" required>
                <br>
                <label for="compra">Precio Compra:</label>
                <input type="text" id="compra" name="compra" title="Ingresar precio compra" required>
                <br>
                <label for="venta">Precio Venta:</label>
                <input type="text" id="venta" name="venta" title="Ingresar precio venta" required>
                <br>
                <label for="catego">Categoria</label>
                <select name="catego" id="catego">
                    @foreach($catego as $c)
                        <option value="{{$c->id}}">{{$c->nombre}}</option>
                    @endforeach
                </select>
                <br>
                <label for="cantidad">Cantidad:</label>
                <input type="text" id="cantidad" name="cantidad" title="Ingresar cantidad" required>
                <br>
                <input type="submit" id="agregar" name="agregar" value="Agregar">
            </form>
        </div>
        <div class="col-md-3">
            <form action="{{url('/save-suple')}}" method="post">
                {{csrf_field()}}
                <input type="text" id="id_sup" name="id_sup" value="0" hidden><br>
                <label for="nombre_sup">Nombre:</label>
                <input type="text" id="nombre_sup" name="nombre_sup" title="Ingresar nombre" required>
                <br>
                <label for="marca">Marca</label>
                <select name="marca" id="marca">
                    @foreach($marca as $ma)
                        <option value="{{$ma->id}}">{{$ma->nombre}}</option>
                    @endforeach
                </select>
                <br>
                <label for="catego_sup">Categoria</label>
                <select name="catego_sup" id="catego_sup">
                    @foreach($catego_suples as $cat)
                        <option value="{{$cat->id}}">{{$cat->nombre}}</option>
                    @endforeach
                </select>
                <br>
                <label for="sabor">Sabor</label>
                <select name="sabor" id="sabor">
                    @foreach($sabor as $sa)
                        <option value="{{$sa->id}}">{{$sa->nombre}}</option>
                    @endforeach
                </select>
                <br>
                <label for="compra">Precio Compra:</label>
                <input type="text" id="compra_sup" name="compra_sup" title="Ingresar precio compra" required>
                <br>
                <label for="venta">Precio Venta:</label>
                <input type="text" id="venta_sup" name="venta_sup" title="Ingresar precio venta" required>
                <br>
                <div id="resultadoSabor"></div>
                <label for="cantidad">Cantidad:</label>
                <input type="text" id="cantidad_sup" name="cantidad_sup" title="Ingresar cantidad" required>
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
                    <h1>Suples</h1>

                    <div class="ui-widget">
                        <input type="text" placeholder="BUSCAR" id="tags" title="Buscar producto" class="tag"/> <i
                                class="fa fa-search"></i>
                    </div>
                    <div class="tbl-header">
                        <table cellpadding="0" cellspacing="0" border="0">
                            <thead>
                            <tr>
                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nombre</th>
                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Marca</th>
                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Categoria</th>
                                <th>&nbsp;Sabor</th>
                                <th>Precio <br> Compra</th>
                                <th>Precio <br>Venta</th>
                                <th>Cantidad <br>Total</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                    <div class="fond">
                        <div class="tbl-content">
                            <table cellpadding="0" cellspacing="0" border="0">
                                <tbody>
                                @foreach($catego_suples as $ca)
                                    @foreach($suples as $s)
                                        @foreach($marca as $m)
                                            @foreach($sabor as $sab)
                                                @if($m->id == $s->marca_id)
                                                    @if($ca->id == $s->categoria_id)
                                                        @if($sab->id == $s->sabor_id)
                                                            <tr>
                                                                <td class="sup-nom">{{$s->nombre}} </td>
                                                                <td class="id" hidden>{{$s->id}}</td>
                                                                <td>{{$m->nombre}}</td>
                                                                <td>{{$ca->nombre}}</td>
                                                                <td>{{$sab->nombre}}</td>
                                                                <td>{{$s->precio_Compra}}</td>
                                                                <td>{{$s->precio_Venta}}</td>
                                                                <td>{{$s->cantidad}}</td>
                                                                <td class="boton2"><i class="fa fa-pencil edit"
                                                                                     aria-hidden="true"></i></td>
                                                            </tr>
                                                        @endif
                                                    @endif
                                                @endif
                                            @endforeach
                                        @endforeach
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
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="container">
                <section>
                    <h1>PRODUCTOS</h1>

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
                                                <td>{{$producto->nombre}} </td>
                                                <td class="id" hidden>{{$producto->id}}</td>
                                                <td>{{$producto->precio_Compra}}</td>
                                                <td>{{$producto->precio_Venta}}</td>
                                                <td>{{$c->nombre}}</td>
                                                <td>{{$producto->cantidad}}</td>
                                                <td class="boton"><i class="fa fa-pencil edit" aria-hidden="true"></i>
                                                </td>
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
                removeHighlighting($("table tr em"));
                $(this).parents("tr").find("td").each(function () {
                    values = $(this).html();
                    if (x == 0) {
                        $('#nombre').val(values);
                    }
                    if (x == 1) {
                        $('#id').val(values);
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
            $(".boton2").click(function () {
                var values = "";
                var x = 0;

                removeHighlighting($("table tr em"));
                $(this).parents("tr").find("td").each(function () {
                    values = $(this).html();
                    if (x == 0) {
                        $('#nombre_sup').val(values);
                    }
                    if (x == 1) {
                        $('#id_sup').val(values);
                    }
                    if (x == 2) {//marca,cat,sab
                        if (values == 'USP') {
                            $('#marca>option:eq(0)').prop('selected', true);
                        }
                        if (values == 'INSANE LABZ') {
                            $('#marca>option:eq(1)').prop('selected', true);
                        }
                        if (values == 'UNIVERSAL') {
                            $('#marca>option:eq(2)').prop('selected', true);
                        }
                        if (values =='MUSCLEPHARM') {
                            $('#marca>option:eq(3)').prop('selected', true);
                        }
                        if (values == 'GAT') {
                            $('#marca>option:eq(4)').prop('selected', true);
                        }
                        if (values == 'META NUTRITION') {
                            $('#marca>option:eq(5)').prop('selected', true);
                        }
                        if (values == 'MUSCLEMEDS') {
                            $('#marca>option:eq(6)').prop('selected', true);
                        }
                        if (values == 'MUSCLETECH') {
                            $('#marca>option:eq(7)').prop('selected', true);
                        }
                    }
                    if (x==3) {//AMINOACIDOSWHEY PROTEIN,PRE-ENTRENAMIENTO,GLUTAMINA,GANADOR
                        if (values == 'AMINOACIDOS') {
                            $('#catego_sup>option:eq(0)').prop('selected', true);
                        }
                        if (values == 'WHEY PROTEIN') {
                            $('#catego_sup>option:eq(1)').prop('selected', true);
                        }
                        if (values == 'PRE-ENTRENAMIENTO') {
                            $('#catego_sup>option:eq(2)').prop('selected', true);
                        }
                        if (values == 'GLUTAMINA') {
                            $('#catego_sup>option:eq(3)').prop('selected', true);
                        }
                        if (values == 'GANADOR') {
                            $('#catego_sup>option:eq(4)').prop('selected', true);
                        }
                        if (values == 'CREATINA') {
                            $('#catego_sup>option:eq(5)').prop('selected', true);
                        }
                    }
                    if (x==4) {
                        if (values == 'SIN') {
                            $('#sabor>option:eq(0)').prop('selected', true);
                        }
                        if (values == 'CHOCO') {
                            $('#sabor>option:eq(1)').prop('selected', true);
                        }
                        if (values == 'VAINILLA') {
                            $('#sabor>option:eq(2)').prop('selected', true);
                        }
                        if (values == 'FRESA') {
                            $('#sabor>option:eq(3)').prop('selected', true);
                        }
                        if (values == 'PONCHE') {
                            $('#sabor>option:eq(4)').prop('selected', true);
                        }
                        if (values == 'NARANJA') {
                            $('#sabor>option:eq(5)').prop('selected', true);
                        }
                        if (values == 'COTTONCANDY') {
                            $('#sabor>option:eq(6)').prop('selected', true);
                        }
                        if (values == 'MANGO MARGARITA') {
                            $('#sabor>option:eq(7)').prop('selected', true);
                        }
                        if (values == 'MANGO ORANGE') {
                            $('#sabor_sup>option:eq(0)').prop('selected', true);
                        }
                    }
                    if (x == 5) {
                        $('#compra_sup').val(values);
                    }
                    if (x == 6) {
                        $('#venta_sup').val(values);
                    }
                    if (x == 7) {
                        $('#cantidad_sup').val(values);
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
            $("#tags").focusout(function () {
                $('#tags').attr('placeholder', 'BUSCAR');
            });
            $("#tags").on("focus", function () {
                $('#tags').removeAttr('placeholder');
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

            $("#cantidad,#venta,#compra").keydown(function (e) { // permitir solo numeros
                // permite: backspace, delete, tab, escape, enter y .
                if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
                            // permite: Ctrl+A
                        (e.keyCode == 65 && e.ctrlKey === true) ||
                            // permite: Ctrl+C
                        (e.keyCode == 67 && e.ctrlKey === true) ||
                            // permite: Ctrl+X
                        (e.keyCode == 88 && e.ctrlKey === true) ||
                            // permite: home, end, left, right
                        (e.keyCode >= 35 && e.keyCode <= 39)) {

                    return;
                }
                if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                    e.preventDefault();
                }
            });
        });
    </script>
@endsection