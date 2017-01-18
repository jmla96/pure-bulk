@extends('template.master')
@section('contenido')
    <div class="col-xs-12 margin-top40px">
        <p class="center-b h3">
            POLITICAS DE PAGO Y ENVIO
        </p>
        <p class="text-left center-b col-md-8 col-md-offset-2 margin-top20px">
            puedes realizar una transferencia a una cuenta bancaria Bancolombia , es completamente ¡GRATIS!
            <br>
            Despues de realizar el pago debe enviarnos una foto/scanner del recibo con el numero de su pedido al correo: contacto@pure-bulk.com, con el fin de agilizar el proceso de envío.
            <br>
            NOTA: "si es por consignacion fuera de Bogota debes anexar $10.000"
        </p>
        <div class="col-md-offset-3 col-md-11">
            <div class="col-xs-3">
                <img src="{{url('assets/img/logo grupo vertical.jpg')}}" width="100%">
            </div>
            <br>
            <div class="col-xs-6 ">
                Cuenta numero: #865-898-08870 <br>
                Tipo de cuenta: Ahorro <br>
                Titular: Erika Rodriguez <br>
            </div>
        </div>
        <div class="col-md-offset-2 col-md-8 margin-top30px height200px">
            Pago Por PAYU
            puedes realizar el pago por tarjeta de credito con nuestra plataforma PAYU
            <br>
            <a href="" class="col-md-offset-3"><img src="{{url('assets/img/logo-payu.png')}}"></a>
            <br>
            <p>Todas nuestras formas de pago estan 100% aseguradas por nuestra politica de devolucion al consumidor</p>
        </div>
    </div>
@endsection