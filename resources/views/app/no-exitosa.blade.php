@extends('template.master')
@php $soloMenu = '1'; @endphp
@section('contenido')
    <div class="bg-gray-light center-b">
        <div class="col-xs-12 remove-padding push-100-t">
            <div class="padding-20 col-xs-12 remove-margin">
                <h1 class="font-s128 font-w300 text-danger animated zoomIn"><i class="fa fa-close"></i></h1>
                <h2 class="h3 font-w300 push-50 animated fadeInUp">Ha habido un error al intentar realizar la compra,
                    <br> intentelo nuevamente</h2>
                <div class="col-xs-12 push-20-t">
                    <a href="{{url('/')}}" class="font-s20 link-effect"><span class="glyphicon glyphicon-home"></span>
                        Ir al inicio</a>
                </div>
            </div>
        </div>
    </div>
@endsection