<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- <meta name="color-scheme" content="dark-mode light default dark"> --}}
        {{-- Website base URL, added this because of drawmap.js but don't know if this will be necessary --}}

        <base href="{{ url('/') }}" target="_self">

        <title>SuMisura</title>
        <meta name="description" content="SuMisura Description">
        <meta name="keywords" content="portugal homes golden visa properties">


        <!-- Favicon -->
        <link rel="icon" href="{{ url('favicon.ico') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        {{-- <link href="https://fonts.googleapis.com/css2?family=Chivo:ital,wght@0,300;0,400;0,500;0,600;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet"> --}}

        <!-- Setting the meta theme color - Color which mobile devices tabs will have when visiting the website -->
        <meta name="theme-color" content="#D9AB4D"/>

        <script src="https://code.jquery.com/jquery-4.0.0.min.js" integrity="sha256-OaVG6prZf4v69dPg6PhVattBXkcOWQB62pdZ3ORyrao=" crossorigin="anonymous"></script>

        <!-- Dark Mode Javascript File -->
        <script src="/assets/js/dark-mode.js"></script>

        <!-- Styles -->
        @vite([
            'resources/scss/reset.scss',
            'resources/scss/frontend/app.scss',
            'resources/js/app.js'
            ])

        <!-- Favicon(s) -->
        <link rel="icon" type="image/png" href="/assets/img/favicon/favicon16x16.png" sizes="16x16">
        <link rel="icon" type="image/png" href="/assets/img/favicon/favicon32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="/assets/img/favicon/favicon96x96.png" sizes="96x96">

        <!-- Favicons optimized for Apple devices -->
        <link rel="apple-touch-icon" sizes="114x114" href="/assets/img/favicon/favicon114x114.png" >
        <link rel="apple-touch-icon" sizes="152x152" href="/assets/img/favicon/favicon152x152.png" >
        <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/favicon/favicon180x180.png">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        {{-- <link rel="stylesheet" href="{{ mix('/assets/css/app.css') }}"> --}}


        {{-- Loading whatever custom styles the view may have --}}
        @stack('styles')

        <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/76c891ceee.js" crossorigin="anonymous"></script>
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <!-- Start of HubSpot Embed Code -->
        @if (env('APP_ENV') != 'prod')
            {{-- <script type="text/javascript" id="hs-script-loader" async defer src="//js-eu1.hs-scripts.com/26707743.js"></script> --}}
        @else
            {{-- <script type="text/javascript" id="hs-script-loader" async defer src="//js-eu1.hs-scripts.com/4623514.js"></script> --}}
        @endif
        <!-- End of HubSpot Embed Code -->

    </head>
<body>
    {{-- <script>
            // Checking if the dark mode local storage value exists - if it does, apply the dark-mode class to the body
            // Inserting this in the header so there's no white blinking and the dark mode is applied ASAP

            if( localStorage.getItem('dark_mode') ){
                setTimeout(() => {
                    document.body.classList.add("dark-mode");

                    // Make the dark mode button be toggled
                    document.getElementById("dark-mode-input-switch").checked = true;
                });

                // We're adding a more delayed timeout - the input wasn't created on window load so this was popping an error
                setTimeout(() => {

                    document.getElementById("dark-mode-input-mobile-switch").checked = true;

                }, 800);
            }

    </script> --}}
    {{-- HEADER INCLUDE --}}
    @include('partials.header')

    <!-- Echoing the content from our view into this template through 'yield' which works as an 'echo' of content, basically -->

        @yield('content')

    {{-- FOOTER INCLUDE --}}
    @include('partials.footer')

    <!-- Notifications Element -->
    <div id="notifications"></div>

    {{-- Loading custom scripts --}}
    @stack('scripts')

</body>
</html>
