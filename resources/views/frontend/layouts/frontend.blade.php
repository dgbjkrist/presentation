<!doctype html>
<html  lang="">
    <head>

    <meta charset="UTF-8">
    <title> @yield('title')</title>
    <meta name="referrer" content="no-referrer">
    <meta name="description" content="Au theme template">
    <meta name="keywords" content="Au theme template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/front/img/icons/favicon.ico" type="/front/image/gif" sizes="16x16">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

		<!-- CSS here -->
        @include('frontend.components.css_js._css')
        @yield('css')
    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->


        <!-- Add your site or application content here -->


        <!-- header start -->
        <header>
            @include('frontend.components._header')
        </header>
        <!-- header end -->
            @yield('body')
        <footer>
            @include('frontend.components._footer')
        </footer>
        <!-- footer end -->






		<!-- JS here -->
        @include('frontend.components.css_js._js')

        @yield('js')
    </body>
</html>
