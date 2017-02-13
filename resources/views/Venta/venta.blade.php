@extends('welcome')
@section('title')
    Ventas
@endsection
@section('content')
    <link rel="stylesheet" href="{{URL::to('css/venta.css')}}">
    <div class="col-md-5">
            <section>
                <div class="tbl-header">
                    <table >
                        <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Precio Venta</th>
                            <th>Cantidad</th>
                        </tr>
                        </thead>
                    </table>
                </div>
                <div class="fond">
                    <div class="tbl-content">
                        <table >
                            <tbody>
                            @foreach($products as $p)
                                <tr>
                                    <td>{{$p->nombre}} </td>
                                    <td>{{$p->precio_Venta}}</td>
                                    <td>{{$p->cantidad}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
@endsection