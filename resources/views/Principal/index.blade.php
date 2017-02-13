@extends('welcome')
@section('title')
    POS by JD
@endsection
@section('content')

    <link rel="stylesheet" href="{{URL::to('css/main.css')}}">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700">
    <header role="banner">
        <h1>Admin Panel</h1>
        <ul class="utilities">
            <li class="users"><a href="#"><i class="fa fa-user" aria-hidden="true"></i> My Account</a></li>
            <li class="logout warn"><a href=""><i class="fa fa-sign-out" aria-hidden="true"></i> Log Out</a></li>
        </ul>
    </header>

    <nav role='navigation'>
        <ul class="main">
            <li class="inve"><a href="{{route('inventario')}}"><i class="fa fa-list-alt" aria-hidden="true"></i> Inventario</a></li>
            <li class="pedido"><a href="{{route('pedidos')}}"><i class="fa fa-truck" aria-hidden="true"></i> Pedidos</a></li>
            <li class="ventaa"><a href="{{route('venta')}}"><i class="fa fa-cart-plus" aria-hidden="true"></i> Venta</a></li>
            <li class="users"><a href="#"><i class="fa fa-users" aria-hidden="true"></i> Usuarios</a></li>
        </ul>
        <ul class="menu">
            <li></li>
            <li class="inve">Categories</li>
            <li>Pagina<span class="colorIcon red"></span></li>
            <li>Mercado <span class="colorIcon yellow"></span></li>
            <li>Tienda<span class="colorIcon green"></span></li>
        </ul>
    </nav>

    <main role="main">
        <div id="container">
            <div class="col-md-11">
                <div id="content">
                    <div id="titleBar">
                        <h2 class="dos">Dashboard</h2>

                        <div id="profilePic">
                            <img src="http://s3-us-west-2.amazonaws.com/s.cdpn.io/153917/profile/profile-512_1.jpg"/>
                        </div>
                        <span class="controls activeControl">Semanal</span>
                        <span class="controls">Mensual</span>
                    </div>

                    <div class="mainChart">
                        <canvas id="salesData"></canvas>
                        <div class="col-md-12">
                            <h2 class="dos">Ventas Totales</h2>

                            <div class="clearFix"></div>

                            <div id="totalSales">
                                <div class="col">
                                    <div id="creditSales" class="progressBar"></div>
                                    <h3 class="tres">$36,059</h3>
                                    <span class="progressTitle">Pagina</span>
                                </div>
                                <div class="col">
                                    <div id="channelSales" class="progressBar"></div>
                                    <h3 class="tres">$24,834</h3>
                                    <span class="progressTitle">Mercado</span>
                                </div>
                                <div class="col">
                                    <div id="directSales" class="progressBar"></div>
                                    <h3 class="tres">$15,650</h3>
                                    <span class="progressTitle">Tienda</span>
                                </div>
                            </div>
                        </div>

                        <table>
                            <tr>
                                <th>November Sales</th>
                                <th>Quantity</th>
                                <th>Total</th>
                            </tr>

                            <tr>
                                <td>Dallas Oak Dining Chair</td>
                                <td>20</td>
                                <td>$1,342</td>
                            </tr>

                            <tr>
                                <td>Benmore Glass Coffee Table</td>
                                <td>18</td>
                                <td>$1,550</td>
                            </tr>

                            <tr>
                                <td>Aoraki Leather Sofa</td>
                                <td>15</td>
                                <td>$4,170</td>
                            </tr>

                            <tr>
                                <td>Bali Outdoor Wicker Chair</td>
                                <td>25</td>
                                <td>$2,974</td>
                            </tr>
                        </table>
                    </div>

                </div>
            </div>
        </div>
        </div>

    </main>

@endsection
@section('scripts')
    <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.1/Chart.min.js"></script>
    <script src="//cdn.rawgit.com/kimmobrunfeldt/progressbar.js/0.7.4/dist/progressbar.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            // https://dribbble.com/shots/1821178-Sales-Report?list=buckets&offset=0

            // Line Chart
            var salesData = {
                labels: ["Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo"],
                datasets: [
                    {
                        label: "Front",
                        fillColor: "rgba(195, 40, 96, 0.1)",
                        strokeColor: "rgba(195, 40, 96, 1)",
                        pointColor: "rgba(195, 40, 96, 1)",
                        pointStrokeColor: "#202b33",
                        pointHighlightStroke: "rgba(225,225,225,0.9)",
                        data: [3400, 3000, 2500, 4500, 2500, 3400, 3000]
                    },
                    {
                        label: "Middle",
                        fillColor: "rgba(255, 172, 100, 0.1)",
                        strokeColor: "#e8e804", /*color linea*/
                        pointColor: "#e8e804", /*color punto*/
                        pointStrokeColor: "#202b33", /*color contorno punto*/
                        pointHighlightStroke: "rgba(225,225,225,0.9)", /*color efecto punto*/
                        data: [1900, 1700, 2100, 3600, 2200, 2500, 2000]
                    },
                    {
                        label: "Back",
                        fillColor: "rgba(19, 71, 34, 0.3)",
                        strokeColor: "rgba(88, 188, 116, 1)",
                        pointColor: "rgba(88, 188, 116, 1)",
                        pointStrokeColor: "#202b33",
                        pointHighlightStroke: "rgba(225,225,225,0.9)",
                        data: [1000, 1400, 1100, 2600, 2000, 900, 1400]
                    }
                ]
            };
            var ctx = document.getElementById("salesData").getContext("2d");
            window.myLineChart = new Chart(ctx).Line(salesData, {
                pointDotRadius: 6,
                pointDotStrokeWidth: 2,
                datasetStrokeWidth: 3,
                scaleShowVerticalLines: false,
                scaleGridLineWidth: 2,
                scaleShowGridLines: true,
                scaleGridLineColor: "rgba(225, 255, 255, 0.02)",
                scaleOverride: true,
                scaleSteps: 9,
                scaleStepWidth: 500,
                scaleStartValue: 0,

                responsive: true

            });

            //Credit Sales
            var creditSales = new ProgressBar.Circle('#creditSales', {
                color: '#e81760',
                strokeWidth: 3,
                trailWidth: 3,
                duration: 1500,
                text: {
                    value: '0%'
                },
                step: function (state, bar) {
                    bar.setText((bar.value() * 100).toFixed(0) + "%");
                }
            });
            var channelSales = new ProgressBar.Circle('#channelSales', {
                color: '#e8e804',
                strokeWidth: 3,
                trailWidth: 3,
                duration: 1500,
                text: {
                    value: '0%'
                },
                step: function (state, bar) {
                    bar.setText((bar.value() * 100).toFixed(0) + "%");
                }
            });
            var directSales = new ProgressBar.Circle('#directSales', {
                color: '#2bab51',
                strokeWidth: 3,
                trailWidth: 3,
                duration: 1500,
                text: {
                    value: '0%'
                },
                step: function (state, bar) {
                    bar.setText((bar.value() * 100).toFixed(0) + "%");
                }
            });
            creditSales.animate(0.8);
            channelSales.animate(0.64);
            directSales.animate(0.34);
        });
    </script>
@endsection