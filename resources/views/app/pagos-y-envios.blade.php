@extends('template.master')
@section('contenido')
    <div class="col-xs-12">
        <p class="center-b h2 push-20-t">
            POLITICAS DE PAGO Y ENVIO
        </p>
        <div class="push-20-t">
            <div class=" text-justify col-xs-12 col-sm-5 col-sm-offset-1">
                <div class="block block-themed border">
                    <div class="block-header bgfive">

                        <h3 class="block-title"><span class="fa fa-bank push-15-r"></span> Pago
                            Transferencia Bancaria</h3>
                    </div>
                    <div class="block-content ">
                        <p>puedes realizar una transferencia a una cuenta bancaria Bancolombia ,
                            es completamente ¡GRATIS!</p>
                        <div class="col-sm-5">
                            <img src="{{url('assets/img/logo-grupo-vertical.jpg')}}" class="width100">
                        </div>
                        <div class="col-sm-7 text-left">
                            <li>Cuenta numero:<br> <div class="push-30-l">#865-898-08870</div></li>

                            <li>Tipo de cuenta: Ahorro</li>

                            <li>Titular: Erika Rodriguez</li>
                        </div>
                        <p>
                            Despues de realizar el pago debe enviarnos una foto/scanner del recibo con el numero de su pedido al correo: contacto@pure-bulk.com, con el fin de agilizar el proceso de envío.
                        </p>
                        <p>
                            NOTA: "si es por consignacion fuera de Bogota debes anexar $10.000"
                        </p>
                    </div>
                </div>
            </div>
            <div class=" text-justify col-xs-12 col-sm-5">
                <div class="block block-themed border">
                    <div class="block-header bgfive">

                        <h3 class="block-title"><img src="{{url('assets/img/icon-payu.svg')}}" class="width20px push-15-r"> Pago Por PAYU</h3>
                    </div>
                    <div class="block-content center-b ">
                        <p class="text-justify">puedes realizar el pago por tarjeta de credito con nuestra plataforma PAYU</p>
                        <button class="btn btn-primary "><img src="{{url('assets/img/logo-payu.svg')}}"  width="60"></button>
                        <p class="text-justify push-30-t">Todas nuestras Formas de Pago estan 100% aseguradas por neustra politica de devolucion al consumidor</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection