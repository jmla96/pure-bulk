@extends('template.master')
@section('contenido')

    <div class="col-xs-12 push-50-t">
        <div class="col-lg-4 col-md-6 col-md-offset-2 col-xs-12">
            <div class="block block-themed border">
                <div class="block-header bgfive">
                    <h3 class="block-title"><i class="si si-envelope push-15-r"></i> Enviar mensaje</h3>
                </div>
                <div class="block-content">
                    <form action="{{ url('/basicemail') }}" method="post" class="form-horizontal push-5-t" onsubmit="return false;">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label class="col-xs-12" for="login1-username">Nombre</label>
                            <div class="col-xs-12">
                                <input class="form-control" type="text" id="nombre" name="nombre" placeholder="Ingresa tu nombre">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-12" for="login1-password">Correo electronico</label>
                            <div class="col-xs-12">
                                <input class="form-control" type="text" id="mail" name="mail" placeholder="Ingresa tu email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-12" for="login1-password">Mensaje</label>
                            <div class="col-xs-12">
                                <textarea class="form-control" name="mail" placeholder="Escribe tu mensaje"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <button class="btn btn-sm btn-primary" type="submit"><i class="fa fa-arrow-right push-5-r"></i> Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 text-justify col-xs-12">
            <div class="block block-themed border">
                <div class="block-header bgfive">

                    <h3 class="block-title"><span class="glyphicon glyphicon-phone-alt push-15-r"></span> CONTACTO</h3>
                </div>
                <div class="block-content mheight-100">
                        <li>TELEFONO: 315-559-42-37</li>
                        <li>TELEFONO: 314-553-56-32</li>
                        <li>CORREO ELECTRONICO: contacto@pure-bulk.com</li>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.536014950605!2d-74.05799409956433!3d4.676472198799039!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9aed9d4d312b%3A0x312cacce0c5a943b!2sCra.+19a+%2390-13%2C+Bogot%C3%A1%2C+Colombia!5e0!3m2!1sen!2ses!4v1484947888099"
                            class="width100" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

@endsection