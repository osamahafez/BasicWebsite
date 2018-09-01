<html>
    <head>
        <meta charset="utf8">
        <title> @yield('title') </title>
        <link rel="stylesheet"  href="css/app.css">
    </head>
    <body> 

        @include('inc/navbar')

        @if(Request::is('/')) 
            @include('inc/showcase') {{--include showcase only if we are in the home page--}}
        @endif
    
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8">
                    @include('inc/messages')
                    @yield('content')
                </div>
                <div class="col-md-4 col-lg-4">
                    @include('inc/sidebar')
                </div>
            </div>
        </div>
        
        <footer id="footer" class="text-center">
            Copyright 2018 &copy; BasicWebsite
        </footer>
         
    </body>
</html>