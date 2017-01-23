@extends('template.master')
@section('meta')

@endsection
@section('contenido')

    <div class="col-xs-12 remove-margin remove-padding overflow-hidden">
        <div class="block-content remove-padding">
            <div class="js-slider slick-nav-white slick-nav-hover" data-slider-dots="true" data-slider-arrows="true" data-slider-autoplay="true" data-slider-autoplay-speed="3000">
                <div>
                    <img class="width100" src="{{url('assets/img/prs1.png')}}" alt="presentacion">
                </div>
                <div>
                    <img class="img-responsive" src="{{url('assets/img/prs1.png')}}" alt="presentacion">
                </div>
                <div>
                    <img class="img-responsive" src="{{url('assets/img/prs1.png')}}" alt="presentacion">
                </div>
            </div>
        </div>
    </div>

<div class="col-xs-12 padding50px padding60px">
    <div class="col-xs-12  ">
        <div class="col-md-4 col-xs-12">
            <p class="h2 center-b"><b>¿QUE ES BULK?</b></p>
            <p class="push-15-t text-justify">
                Los productos “Bulk” o marca blanca, son suplementos tipo industrial de grado
                farmacéutico USP (United States Pharmacopeia), sus presentaciones son más
                grandes a las que generalmente se encuentran en el mercado en volúmenes de hasta 45 lb
            </p>
        </div>

        <div class="col-md-4 col-xs-12">
            <p class="h2 center-b"><b>¿100% PUROS?</b></p>
            <p class="push-15-t text-justify">
                Los nutracéuticos comercializados bajo el concepto “Bulk” son 100% puros,
                sin azúcar, soya, levadura, gluten, colorantes, saborizantes, o cualquier
                otro tipo de aditivo o matriz adicional a la declarada en rótulo del producto,
                de manera tal que lo que se declara en la etiqueta, es lo único que se obtiene del producto.
            </p>
        </div>

        <div class="col-md-4 col-xs-12">
            <p class="h2 center-b"><b>¿TAN ECONOMICO?</b></p>
            <p class="push-15-t text-justify">
                Los suplementos tipo “Bulk” no invierten en diseño, ni marca, ni publicidad,
                ya que son marca blanca, lo que abarata considerablemente los costos del producto,
                el cual pueden invertir en calidad del producto.
            </p>
        </div>
    </div>
</div>
<div class="col-xs-12 bgeight padding50px pbottom100px">
    <h2 class="center-b text-white h1 push-5-t"><b>Todos los productos de Pure Bulk</b></h2>

    <div class="col-xs-12 col-lg-6 col-md-offset-3 push-30-t bg-white text-black-op padding50px bradiusone shadow1">
        <h3 class="center-b">CREATINE MONOHYDRATE 1 KILO</h3>
        <div class="col-sm-4 col-xs-12 center-b">
            <img src="{{url('assets/img/creatine.jpg')}}" class="width100 center-b" alt="creatine" title="creatina">
        </div>
        <div class="col-sm-7 push-15-t center-b col-xs-12 col-sm-offset-1 col-md-offset-0">
            <p class="text-justify">Creatine Monohydrate es la creatina mas pura con un 99.99%
                e pureza tipo industrial y ofrece la mejor relación calidad-precio en toda Colombia,
                muchos de los suplementos de creatina Monohidrato pueden..
                <a href="">Ver mas</a>
            </p>
            <div class="col-lg-8 col-xs-12 center-b">
                <h4>Creatine 500 Grm</h4>
                <p class="h4">CO$ 100.000</p>
            </div>
            <div class="col-lg-1 col-xs-12 center-b push-10-t">
                <button class="btn bgseven text-white ">COMPRAR</button>
            </div>
        </div>
    </div>

    <div class="col-xs-12 col-lg-6 col-md-offset-3 push-30-t bg-white text-black-op padding50px bradiusone shadow1">
        <h3 class="center-b">GLUTAMINE 500 GRM</h3>
        <div class="col-sm-4 col-xs-12 center-b">
            <img src="{{url('assets/img/glutamine.jpg')}}" class="width100 center-b" alt="glutamine" title="glutamina">
        </div>
        <div class="col-sm-7 push-15-t center-b col-xs-12 col-sm-offset-1 col-md-offset-0">
            <p class="text-justify">La glutamina PURE BULK se presenta en un polvo de grado
                farmacéutico 100% puro. La glutamina es uno de los suplementos nutritivos
                deportivos más populares del mundo, principalmente...
                <a href="{{url('/glutamina')}}">Ver mas</a>
            </p>
            <div class="col-lg-8 col-xs-12 center-b">
                <h4>Glutamine 500 Grm</h4>
                <p class="h4">CO$ 90.000</p>
            </div>
            <div class="col-lg-1 col-xs-12 center-b push-10-t">
                <button class="btn bgseven text-white ">COMPRAR</button>
            </div>
        </div>
    </div>

    <div class="col-xs-12 col-lg-6 col-md-offset-3 push-30-t bg-white text-black-op padding50px bradiusone shadow1">
        <h3 class="center-b">100% WHEY PROTEIN ISOLATE 5 LB</h3>
        <div class="col-sm-4 col-xs-12 center-b">
            <img src="{{url('assets/img/pure-bulk.jpg')}}" class="width100 center-b" alt="pure-bulk" title="Pure Bulk">
        </div>
        <div class="col-sm-7 push-15-t center-b col-xs-12 col-sm-offset-1 col-md-offset-0">
            <p class="text-justify">100% WHEY PROTEIN ISOLATE 5 LB
                100% Whey Protein Isolated es la proteína de suero aislada de más alta calidad
                disponible en el mercado. 0 gramos de carbohidratos y menos de 0,1 gramos
                de grasa por porción...
                <a href="">Ver mas</a>
            </p>
            <div class="col-lg-8 col-xs-12 center-b">
                <h4>100% WHEY PROTEIN ISOLATE 5 LB</h4>
                <p class="h4">CO$ 140.000</p>
            </div>
            <div class="col-lg-1 col-xs-12 center-b push-10-t">
                <button class="btn bgseven text-white ">COMPRAR</button>
            </div>
        </div>
    </div>
    </div>
@endsection
@section('links')

@endsection