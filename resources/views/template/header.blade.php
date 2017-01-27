<nav class="navbar navbar-fixed-top bg-info">
    <div class="container ">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="glyphicon glyphicon-menu-hamburger text-white font25px"></span>
            </button>

            <div class="lognav">
                <a href="{{url('/')}}">
                    <img src="{{url('/assets/img/logo.png')}}"
                         width="120" alt="logo-testabolichd" title="Logo Testabolic" class="push-5-t push-10-l">
                </a>
            </div>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{url('proteina')}}" class="btn-nav ">PROTEINA</a></li>
                <li><a href="{{url('creatina')}}" class="btn-nav ">CREATINA</a></li>
                <li><a href="{{url('glutamina')}}" class="btn-nav ">GLUTAMINA</a></li>
                <li><a href="{{url('pagos-y-envios')}}" class="btn-nav "> PAGOS Y ENVIOS</a></li>
                <li><a href="{{url('contacto')}}" class="btn-nav "> CONTACTO</a></li>
                <!--
                <li class="btn-group">
                        <a class=" btn-nav dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            IDIOMA <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li>
                                <a tabindex="-1" href="{{url('/ingles')}}">
                                    English
                                </a>
                            </li>
                            <li>
                                <a tabindex="-1" href="{{url('/espanol')}}">
                                    Español
                                </a>
                            </li>
                        </ul>
                </li>
                -->
            </ul>
        </div>
    </div>
</nav>
@if(isset($soloMenu))
@else
    <div class="col-xs-12 bg-primary text-white center-b push-50-t">
        <div class="col-md-3 col-xs-12 col-sm-6 center-b ">
            <span class="glyphicon glyphicon-calendar fontsize3 push-15-t float-left push-20-l visible-md visible-lg visible-sm"></span>
            <p class="push-10-t "> HORARIO DE TRABAJO <br> 9.00 AM - 7.00 PM </p>
        </div>
        <div class="col-md-3 col-xs-12 col-sm-6 center-b ">
            <span class="glyphicon glyphicon-plane fontsize3 push-15-t float-left push-20-l visible-md visible-lg visible-sm"></span>
            <p class="push-10-t"> ENVIOS GRATIS <br> Compras Mayores $200.000 </p>
        </div>
        <div class="col-md-3 col-xs-12 col-sm-6 center-b ">
            <span class="glyphicon glyphicon-usd fontsize3 push-15-t float-left push-20-l visible-md visible-lg visible-sm"></span>
            <p class="push-10-t"> 100% GARANTIA <br> Mejor Calidad</p>
        </div>
        <div class="col-md-3 col-xs-12 col-sm-6 center-b ">
            <span class="glyphicon glyphicon-phone fontsize3 push-15-t float-left push-20-l visible-md visible-lg visible-sm"></span>
            <p class="push-10-t"> TELEFONO: 315-559-42-37<br> Pide En Linea Ahora !</p>
        </div>
    </div>
@endif