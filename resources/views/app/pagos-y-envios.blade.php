@extends('template.master')
@section('contenido')
    <div class="col-xs-12 margin-top40px">
        <p class="center-b h3">
            POLITICAS DE PAGO Y ENVIO
        </p>

        <div class="text-left center-b col-md-4 col-md-offset-2 text-justify push-15-t">
            <p>
                puedes realizar una transferencia a una cuenta bancaria Bancolombia , es completamente ¡GRATIS!
            </p>
            <p>
                Despues de realizar el pago debe enviarnos una foto/scanner del recibo con el numero de su pedido al
                correo: contacto@pure-bulk.com, con el fin de agilizar el proceso de envío.
            </p>
            <p>
                NOTA: "si es por consignacion fuera de Bogota debes anexar $10.000"
            </p>
            <div class="col-xs-6">
                <img src="{{url('assets/img/logo grupo vertical.jpg')}}" width="100%">
            </div>
            <div class="col-xs-6 ">
                Cuenta numero: #865-898-08870 <br>
                Tipo de cuenta: Ahorro <br>
                Titular: Erika Rodriguez <br>
            </div>
        </div>
        <div class="text-left center-b col-md-4 push-15-t">
            <p class="h4">PAGO POR PAYU</p>
            <p>puedes realizar el pago por tarjeta de credito con nuestra plataforma PAYU</p>
            <p>Todas nuestras formas de pago estan 100% aseguradas por nuestra politica de devolucion al consumidor</p>

            <a href=""><img src="{{url('assets/img/logo-payu.png')}}"></a>
        </div>
    </div>
@endsection