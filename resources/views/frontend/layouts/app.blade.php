<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title', app_name())</title>

        <!-- Meta -->
        <meta name="description" content="@yield('meta_description', 'Laravel 5 Boilerplate')">
        <meta name="author" content="@yield('meta_author', 'Anthony Rappa')">
        @yield('meta')

        <!-- Styles -->
        @yield('before-styles')
        <link href="/css/bootstrap.css" rel='stylesheet' type='text/css' />
        <link href="/css/style.css" rel='stylesheet' type='text/css' />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
        {{ Html::style(elixir('css/frontend.css')) }}

        <!-- Check if the language is set to RTL, so apply the RTL layouts -->
        @langRTL
            {!! Html::style(elixir('css/rtl.css')) !!}
        @endif

        @yield('after-styles')

        <!-- Scripts -->
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>
    </head>
    <body id="app-layout">
        <div id="app">
            @include('includes.partials.logged-in-as')
            @include('frontend.includes.nav')
            <div class="main">
                <div class="container">
                    @include('includes.partials.messages')
                    @yield('content')
                </div><!-- container -->
            </div>
        </div><!--#app-->
        <!--Footer-->
        @include('frontend.includes.footer')
        <!--End Footer-->
        <!-- Scripts -->
        @yield('before-scripts')
        {!! Html::script(elixir('js/frontend.js')) !!}
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <script src="/js/jquery.min.js"></script>
        <script type="text/javascript">
                jQuery(document).ready(function($) {
                    $(".scroll").click(function(event){     
                        event.preventDefault();
                        $('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
                    });
                });
        </script>
        <!-- grid-slider -->
        <script type="text/javascript" src="/js/jquery.mousewheel.js"></script>
        <script type="text/javascript" src="/js/jquery.contentcarousel.js"></script>
        <script type="text/javascript" src="/js/jquery.easing.1.3.js"></script>

        @yield('after-scripts')

        @include('includes.partials.ga')
    </body>
</html>