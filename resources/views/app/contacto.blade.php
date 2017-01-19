@extends('template.master')
@section('contenido')

    <div class="col-xs-12 margin-top40px">
        <div class="col-md-4 col-md-offset-1">
            <div class="block block-themed">
                <div class="block-header bgfive">
                    <ul class="block-options">
                        <li>
                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                        </li>
                        <li>
                            <button type="button" data-toggle="block-option" data-action="content_toggle"><i class="si si-arrow-up"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Enviar mensaje</h3>
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
            <!-- END Bootstrap Login -->
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