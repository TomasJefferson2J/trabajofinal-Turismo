<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>El PLACER DE VIAJAR</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body,
            html {
                width: 100%;
                height: 100%;
            }

            body, p {
                color: #787976; 
                font: 400 1rem/1.5625rem "Open Sans", sans-serif;
            }

            h1 {
                color: #484a46;
                font: 700 2.5rem/3rem "Montserrat", sans-serif;
            }

            
            .spinner-wrapper {
                position: fixed;
                z-index: 999999;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                background: #113448;
            }





            .navbar-custom {
                padding-top: 0.375rem;
                padding-bottom: 0.375rem;
                background-color: #113448;
                box-shadow: 0 0.0625rem 0.375rem 0 rgba(0, 0, 0, 0.1);
                font: 600 0.875rem/0.875rem "Open Sans", sans-serif;
                transition: all 0.2s;
            }

            .navbar-custom .navbar-brand {
                font-size: 0;
            }

            .navbar-custom .navbar-brand.logo-image img {
                width: 7.0625rem;
                height: 2rem;

            }

            .navbar-custom .navbar-brand.logo-text {
                margin-top: 0.25rem;
                margin-bottom: 0.25rem;
                font: 700 2.25rem/1.5rem "Montserrat", sans-serif;
                color: #fff;
                text-decoration: none;
            }

            .navbar-custom .navbar-nav {
                margin-top: 0.75rem;
                margin-bottom: 0.5rem;
            }

            .navbar-custom .nav-item .nav-link {
                padding: 0.625rem 0.75rem 0.625rem 0.75rem;
                color: #fff;
                text-decoration: none;
                transition: all 0.2s ease;
            }








            .header {
                background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.5)), url('http://c.files.bbci.co.uk/7190/production/_110527092_machu.jpg') center center no-repeat;
                background-size: cover;
            }

            .header .header-content {
                padding-top: 8rem;
                padding-bottom: 2.125rem;
                text-align: center;
            }

            .header .text-container {
                margin-bottom: 3rem;
            }

            .header h1 {
                margin-bottom: 0.5rem;
                color: #fff;
            }

            .header .p-large {
                margin-bottom: 2rem;
                color: #dfe5ec;
            }

            .header .btn-solid-lg {
                margin-right: 0.5rem;
                margin-bottom: 1.25rem;
            }







            @media (min-width: 768px) {
                



                .navbar-custom {
                    padding: 2.125rem 1.5rem 2.125rem 2rem;
                    box-shadow: none;
                    background: transparent;
                }
                
                .navbar-custom .navbar-brand.logo-text {
                    color: #fff;
                }

                .navbar-custom .navbar-nav {
                    margin-top: 0;
                    margin-bottom: 0;
                }


                .navbar-custom .nav-item .nav-link:hover,
                .navbar-custom .nav-item .nav-link.active {
                    color: #14bf98;
                }

                .navbar-custom.top-nav-collapse {
                    padding: 0.375rem 1.5rem 0.375rem 2rem;
                    box-shadow: 0 0.0625rem 0.375rem 0 rgba(0, 0, 0, 0.1);
                    background-color: #113448;
                }


                .header .header-content{
                    padding-top: 14rem;
                    padding-bottom: 15rem;
                }
            }



            .piedepaginat {
                padding-top: 1rem;
                padding-bottom: 0.5rem;
                background-color: #113448;
                text-align: center;
            }

            .piedepaginat p,
            .piedepaginat a {
                color: #dfe5ec;
                text-decoration: none;
            }
            .header h1 {
              font: 700 3.5rem/4rem "Montserrat", sans-serif;
            }

            .header .header-content {
              padding-top: 13rem;
              padding-bottom: 7.5rem;
            }

            .header .header-content {
              padding-top: 14rem;
              padding-bottom: 15rem;
            }

            .header .text-container {
              margin-top: 6.5rem;
            }

            .header .header-content {
              padding-top: 14.75rem;
              padding-bottom: 17.5rem;
            }











                
            body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            text-align: left;
            background-color: #fff;
            }

  
            .nav {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            padding-left: 0;
            margin-bottom: 0;
            list-style: none;
            }

            .nav-link {
            display: block;
            padding: 0.5rem 1rem;
            }


            .nav-tabs .nav-item {
            margin-bottom: -1px;
            }


            .navbar-nav {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            padding-left: 0;
            margin-bottom: 0;
            list-style: none;
            }

            @media (min-width: 768px) {
            .navbar-expand-md {
                -ms-flex-flow: row nowrap;
                flex-flow: row nowrap;
                -ms-flex-pack: start;
                justify-content: flex-start;
            }
            .navbar-expand-md .navbar-nav {
                -ms-flex-direction: row;
                flex-direction: row;
            }
            .navbar-expand-md .navbar-nav .dropdown-menu {
                position: absolute;
            }
            .navbar-expand-md .navbar-nav .nav-link {
                padding-right: 0.5rem;
                padding-left: 0.5rem;
            }
            .navbar-expand-md > .container,
            .navbar-expand-md > .container-fluid {
                -ms-flex-wrap: nowrap;
                flex-wrap: nowrap;
            }
            .navbar-expand-md .navbar-collapse {
                display: -ms-flexbox !important;
                display: flex !important;
                -ms-flex-preferred-size: auto;
                flex-basis: auto;
            }
            .navbar-expand-md .navbar-toggler {
                display: none;
            }
            }

            .fixed-top {
            position: fixed;
            top: 0;
            right: 0;
            left: 0;
            z-index: 1030;
            }

            .ml-auto,
            .mx-auto {
            margin-left: auto !important;
            }
            
        </style>
    </head>
    
<body data-spy="scroll" data-target=".fixed-top">
    <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
        @if (Route::has('login'))
                <div class="collapse navbar-collapse" id="navbarsExampleDefault"> 
                        <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link page-scroll" href="http://127.0.0.1:8000/Historia">HISTORIA</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link page-scroll" href="http://127.0.0.1:8000/">WELCOME</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link page-scroll" href="http://127.0.0.1:8000/comida">DESTINOS</a>
                                </li>
                                <li class="nav-item">
                            @auth
                                <a href="{{ url('/home') }}" class="nav-link page-scroll">Home</a>
                                </li>
                                <li class="nav-item">
                            @else
                                    <a href="{{ route('login') }}" class="nav-link page-scroll">LOG IN</a>
                                </li>
                                <li class="nav-item">
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="nav-link page-scroll">REGISTER</a>
                                </li>
                                @endif
                            @endauth
                            </li>
                </div>
            @endif
    </nav>
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-container">
                            <h1>EL PLACER DE VIAJAR</h1>
                            <p class="p-heading p-large">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio officia labore error cum neque saepe minus voluptatum dolores dolore eos.</p>
                        </div>
                    </div> 
                </div> 
            </div> 
        </div> 
    </header> 
    <div class="piedepaginat">
    <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">El placer de viajar</a></p>
                </div> 
            </div> 
        </div> 
    </div>
</body>
</html>