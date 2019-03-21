<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>@yield('title') - Videos Laravel</title>
    </head>
    <body>
        @section('header')
            MASTER HEADER
        @show
         
        <div class="container">
            @yield('content')
        </div>
 
        @section('footer')
            MASTER FOOTER
        @show
        
    </body>
</html>
