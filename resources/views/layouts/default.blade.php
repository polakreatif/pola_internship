<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- Custom Head -->
        @yield('custom-head')

        <title>Laundry Jone</title>
        <link rel="icon" href="/icon.png" />

        <!-- Link Style -->
        @include('component.linkStyle')
    </head>
    <body>
        <!-- 
            blogs
         -->
         
        <!-- Navbar -->
        @include('component.navbar')

        <!-- Space -->
        <br/><br/>

        <!-- Container -->
        <div class="container">

            @yield('content')
            
        </div><!-- Close Container -->

        <!-- Space -->
        <br/><br/><br/>

        <!-- Footer -->
        @include('component.footer')
        
        <!-- Script require for Bootstrap -->
        @include('component.linkJs')
    </body>
</html>
