<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title','Yayasan')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div id="app">
        <section id="header">
            @include('layouts.frontend.template_parts.header')
        </section>
        <section id="slider">
            @include('layouts.frontend.template_parts.slider')
        </section>
        <section id="hero">
            @include('layouts.frontend.template_parts.hero')
        </section>
        <section id="event">
            @include('layouts.frontend.template_parts.event')
        </section>
        <section id="main">
            <div class="container">
                <div class="w-100 text-center">
                    <h1 class="title-section">Artikel</h1>
                </div>
                @yield('main')
                <div class="w-100 text-center"><a href="#" class="next">Selengkapnya</a></div>
            </div>
        </section>
        <section id="footer">
            @include('layouts.frontend.template_parts.footer')
        </section>
        <section id="copy">
            @include('layouts.frontend.template_parts.copy')
        </section>
    </div>

    <script src="{{asset('js/app.js')}}"></script>

</body>

</html>