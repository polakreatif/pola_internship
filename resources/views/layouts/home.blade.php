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
            #################################################
            Dont forget to see me on alifata.com. See You.

            #################################################
            Laundry Jone. 
            Simple application of laundry services. 
            Made to fulfill the internship assignments at polakreatif.com (PT Aruziki Digital Indonesia).
            To multiply my portfolio too.
            Thank you for visiting. May be useful for you.

            ################################################
            Thanks to :
            1. laravel.com -> framework
            2. getbootstrap.com -> CSS, style
            3. fontawesome.com -> font, style
            4. gojek.com -> inspirator, image download play store n app store
            5. github.com -> you know
            6. polakreatif.com n Mr. Choirul -> mentor intership
            7. my team (syamil, andi, bima)
            9. and other

            ###############################################
            Dont forget to see me on alifata.com. See You
         -->
         
        <!-- Navbar -->
        @include('component.navbar')

        @yield('jumbotron')

        <!-- Space between content -->
        <br/><br/><br/>

        <!-- Container -->
        <div class="container">
            <!-- About Us -->
            @yield('about')

            <!-- Space between content -->
            <br/><br/><br/><br/>

            <!-- Carousel -->
            @yield('carousel')
            
            <!-- Space between content -->
            <br/><br/><br/><br/>

            <!-- Product -->
            @yield('product')

        </div><!-- Close Container -->

        <!-- Space between content -->
        <br/><br/><br/>

        <!-- Footer -->
        @include('component.footer')
        
        <!-- Script require for Bootstrap -->
        @include('component.linkJs')
    </body>
</html>
