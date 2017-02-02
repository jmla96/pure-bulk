<!doctype html>
<html lang="es" xml:lang="es">
<head>
    @include('template.head')
    @yield('meta')
</head>
<body>
<div id="page-container" class="header-navbar-fixed header-navbar-transparent">
    <!-- Header -->
@include('template.header')
<!-- END Header -->

    <!-- Main Container -->
@yield('contenido')
<!-- END Main Container -->

    <!-- Footer -->
@include('template.footer')
<!-- END Footer -->
</div>
@include('template.scripts')
</body>
</html>
<!-- END Stylesheets -->
