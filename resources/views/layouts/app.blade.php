<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <title>@yield("title")</title>
        <link rel="icon" href="/icon.png" />

        <!-- Meta description -->
        @yield('meta-desc')
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <!-- bootstrap.com -->
        <link 
            rel="stylesheet" 
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
            integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" 
            crossorigin="anonymous"
        >
        <!-- My Style -->
        <link 
            rel="stylesheet" 
            type="text/css" href={{ asset('style.css') }} 
        >
        <!-- Font Awesome -->
        <link 
            rel="stylesheet" 
            href={{ asset('fontawesome-free-5.12.1-web/css/all.min.css') }} 
            crossorigin="anonymous"
        >

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
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>
