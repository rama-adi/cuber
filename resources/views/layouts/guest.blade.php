<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <meta property="og:title" content="Cuber - Curhat bareng online!">
    <meta property="og:site_name" content="Cuber">
    <meta property="og:url" content="https://curhat.website">
    <meta property="og:description"
          content="Yuk, curhat bareng dan dapatkan konseling secara anonim di cuber. Gratis!">
    <meta property="og:type" content="website">
    <meta property="og:image"
          content="https://cdn.curhat.website/static-web-assets/img/clio-2.png">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://js.hcaptcha.com/1/api.js?hl=id" async defer></script>


    <!-- Cloudflare Web Analytics -->
    <script defer src='https://static.cloudflareinsights.com/beacon.min.js'
            data-cf-beacon='{"token": "6c782579329c4440a1e8955542954c28"}'></script>
    <!-- End Cloudflare Web Analytics -->
    <script defer src="https://cuber-injectable-service.rama-adi.workers.dev/"></script>

</head>
<body>
<div class="font-sans text-gray-900 antialiased">
    {{ $slot }}
</div>
</body>
</html>
