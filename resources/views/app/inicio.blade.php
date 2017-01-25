@extends('template.master') 
@section('contenido')

    <div class="col-xs-12 remove-margin remove-padding overflow-hidden">
        <div class="block-content remove-padding">
            <div class="js-slider slick-nav-white slick-nav-hover" data-slider-arrows="true" data-slider-autoplay="true" data-slider-autoplay-speed="3000">
                <div>
                    <img class="img-responsive" src="{{url('assets/img/prs1.png')}}" alt="presentacion">
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

<div class="col-xs-12 padding-30">
    <div class="col-xs-12">
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
<div class="col-xs-12 bg-gray-dark padding-50">
 <h2 class="center-b text-white h1 push-5-t"><b>Todos los productos de <strong>Pure Bulk</strong></b></h2>

                                            <!-- CREATINA -->

    <div class="col-md-10 col-lg-8 col-sm-offset-1 col-md-offset-2 push-30-t">
        <div class="bg-white text-black-op shadow1 block block-rounded block-bordered overflow-hidden">
            <div class="block-header bg-gray-lighter">
                <h3 class="center-b block-title">CREATINE MONOHYDRATE 500 GRM</h3>
            </div>
            <div class="block-content">
                <div class="col-lg-4">
                    <img src="{{url('assets/img/creatine.jpg')}}" alt="creatine" title="creatina" class="img-responsive">
                </div>
                <div class="col-lg-7">
                    <p class="text-justify"><i>Creatine Monohydrate</i> es la creatina mas pura con un 99.99%
                        e pureza tipo industrial y ofrece la mejor relación calidad-precio en toda Colombia,
                        muchos de los suplementos de creatina Monohidrato pueden..
                        <a href="{{url('/creatina')}}">Ver mas</a>
                    </p>
                </div>
                <div class="col-lg-7">
                    <div class=" ">
                        <h4>Creatine 500 Grm</h4>
                        <p class="h4">CO$ 100.000</p>
                    </div>
                    <div class="c ">
                        <button class="btn btn-primary text-white ">COMPRAR</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

                                        <!-- GLUTAMINA -->

                                        <!-- PROTEINA-->
</div>
@endsection
@section('links')

@endsection