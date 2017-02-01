@extends('welcome')
@section('title')
    Inventario
    @endsection
@section('content')
    <link rel="stylesheet" href="{{URL::to('css/inventario.css')}}">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,500,300,700">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <section>
                <!--for demo wrap-->
                <h1>Fixed Table header</h1>
                <div class="tbl-header">
                    <table cellpadding="0" cellspacing="0" border="0">
                        <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Precio Compra</th>
                            <th>Precio Venta</th>
                            <th>Cantidad p/u</th>
                            <th>Cantidad Total</th>
                        </tr>
                        </thead>
                    </table>
                </div>
                <div class="tbl-content">
                    <table cellpadding="0" cellspacing="0" border="0">
                        <tbody>
                        <tr>
                            <td>AAC</td>
                            <td>AUSTRALIAN COMPANY </td>
                            <td>$1.38</td>
                            <td>+2.01</td>
                            <td>-0.36%</td>
                        </tr>
                        <tr>
                            <td>AAD</td>
                            <td>AUSENCO</td>
                            <td>$2.38</td>
                            <td>-0.01</td>
                            <td>-1.36%</td>
                        </tr>
                        <tr>
                            <td>AAX</td>
                            <td>ADELAIDE</td>
                            <td>$3.22</td>
                            <td>+0.01</td>
                            <td>+1.36%</td>
                        </tr>
                        <tr>
                            <td>XXD</td>
                            <td>ADITYA BIRLA</td>
                            <td>$1.02</td>
                            <td>-1.01</td>
                            <td>+2.36%</td>
                        </tr>
                        <tr>
                            <td>AAC</td>
                            <td>AUSTRALIAN COMPANY </td>
                            <td>$1.38</td>
                            <td>+2.01</td>
                            <td>-0.36%</td>
                        </tr>
                        <tr>
                            <td>AAD</td>
                            <td>AUSENCO</td>
                            <td>$2.38</td>
                            <td>-0.01</td>
                            <td>-1.36%</td>
                        </tr>
                        <tr>
                            <td>AAX</td>
                            <td>ADELAIDE</td>
                            <td>$3.22</td>
                            <td>+0.01</td>
                            <td>+1.36%</td>
                        </tr>
                        <tr>
                            <td>XXD</td>
                            <td>ADITYA BIRLA</td>
                            <td>$1.02</td>
                            <td>-1.01</td>
                            <td>+2.36%</td>
                        </tr>
                        <tr>
                            <td>AAC</td>
                            <td>AUSTRALIAN COMPANY </td>
                            <td>$1.38</td>
                            <td>+2.01</td>
                            <td>-0.36%</td>
                        </tr>
                        <tr>
                            <td>AAD</td>
                            <td>AUSENCO</td>
                            <td>$2.38</td>
                            <td>-0.01</td>
                            <td>-1.36%</td>
                        </tr>
                        <tr>
                            <td>AAX</td>
                            <td>ADELAIDE</td>
                            <td>$3.22</td>
                            <td>+0.01</td>
                            <td>+1.36%</td>
                        </tr>
                        <tr>
                            <td>XXD</td>
                            <td>ADITYA BIRLA</td>
                            <td>$1.02</td>
                            <td>-1.01</td>
                            <td>+2.36%</td>
                        </tr>
                        <tr>
                            <td>AAC</td>
                            <td>AUSTRALIAN COMPANY </td>
                            <td>$1.38</td>
                            <td>+2.01</td>
                            <td>-0.36%</td>
                        </tr>
                        <tr>
                            <td>AAD</td>
                            <td>AUSENCO</td>
                            <td>$2.38</td>
                            <td>-0.01</td>
                            <td>-1.36%</td>
                        </tr>
                        <tr>
                            <td>AAX</td>
                            <td>ADELAIDE</td>
                            <td>$3.22</td>
                            <td>+0.01</td>
                            <td>+1.36%</td>
                        </tr>
                        <tr>
                            <td>XXD</td>
                            <td>ADITYA BIRLA</td>
                            <td>$1.02</td>
                            <td>-1.01</td>
                            <td>+2.36%</td>
                        </tr>
                        <tr>
                            <td>AAC</td>
                            <td>AUSTRALIAN COMPANY </td>
                            <td>$1.38</td>
                            <td>+2.01</td>
                            <td>-0.36%</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </section>



        </div>
    </div>
    @endsection
