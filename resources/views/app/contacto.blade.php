@extends('template.master')
@section('contenido')

    <div class="col-xs-12 margin-top40px">
        <div class="col-md-6">
            <form action="{{ url('/basicemail') }}" method="post" class="margin-top30px col-xs-10 col-xs-offset-2 center-b padding50px">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <label class="col-md-12 fontsize2">Nombre
                    <input type="text" name="name" placeholder="Digite su nombre aqui" class="form-control "></label>

                <label class="col-md-12 margin-top20px fontsize2">Correo electronico
                    <input type="text" name="mail" placeholder="ejemplo@email.com" class="form-control "></label>

                <label class="col-md-12 margin-top20px fontsize2">Mensaje
                    <textarea type="text" name="mensaje" placeholder="Escriba aqui su mensaje" class="form-control "></textarea></label>

                <label class="col-md-12 margin-top20px fontsize2">
                    <button type="submit" value="SEND" class=" btn mt40px bg-button1 text-white bordernone  ">  ENVIAR
                    </button></label>
            </form>
        </div>
        <div class="col-md-6 ">
            <p class="h3 center-b"><b>CONTACTO</b></p>
            <div class="margin-top30px">
                <div class="col-xs-1 col-md-offset-2">
                    <span class="glyphicon glyphicon-phone-alt fontsize4"></span>
                </div>
                <div class="col-xs-8 ">
                    <li>TELEFONO: 315-559-42-37</li>
                    <li>CORREO ELECTRONICO: 315-559-42-37</li>
                </div>
            </div>
        </div>
    </div>

@endsection