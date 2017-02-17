@extends('welcome')
@section('title')
    Ventas
@endsection
@section('content')
    <link rel="stylesheet" href="{{URL::to('css/venta.css')}}">
    <div class="ui-widget">
        <input type="text" placeholder="BUSCAR" onkeyup="myFunc();" id="tgs" title="Buscar producto" class="tag"/> <i
                class="fa fa-search"></i>
    </div>
    <br/>
    <div class='checkout'>
        <div class='order'>
            <h2>Checkout</h2>
            <h5>Order #0101</h5>
            <ul class='order-list' id="myUL">
                @foreach($products as $p)
                    <li>
                        <img src='http://images.nike.com/is/image/DotCom/PDP_THUMB/JORDAN-ECLIPSE-724010_401_A_PREM.jpg'>
                        <h4><a href="#">{{$p->nombre}}</a> </h4><h5><a href="#">{{$p->precio_Venta}}</a></h5></li>
                @endforeach
            </ul>
            <h5>Shipping</h5><h4>$ 9.50</h4>
            <h5 class='total'>Total</h5>

            <h1>$ 167.50</h1>
        </div>
        <input type='text' id='cardnumber' name='cardnumber' pattern='\d*' title='Card Number'/>
        <input type='text' id='cardexpiration' name='cardexpiration' pattern="\d*" title='Card Expiration Date'/>
        <input type='text' id='cardcvc' name='cardcvc' pattern="\d*" title='CVC Code'/>

        <button class='' title='Confirm your purchase'><span>PURCHASE</span></button>

    </div>
@endsection


@section('scripts')
    <link rel="stylesheet" href="{{URL::to('css/jquery-ui.css')}}">
    <script src="{{URL::to('js/jquery-ui.js')}}"></script>
    <script type="text/javascript">
        function myFunc() {
            // Declare variables
            var input, filter, ul, li, a, i;
            input = document.getElementById('tgs');
            filter = input.value.toUpperCase();
            ul = document.getElementById("myUL");
            li = ul.getElementsByTagName('li');

            // Loop through all list items, and hide those who don't match the search query
            for (i = 0; i < li.length; i++) {
                a = li[i].getElementsByTagName("a")[0];
                if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
                    li[i].style.display = "";
                } else {
                    li[i].style.display = "none";
                }
            }
        }

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
    </script>
@endsection