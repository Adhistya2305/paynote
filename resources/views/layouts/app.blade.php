<!DOCTYPE html>
<html>
{{-- langkah 12 --}}

<head>
    <title>@yield('title', 'PayNote')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sb-admin-2.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
</head>

<body id="page-top">
    @include('layouts.partials.header');

    @yield('content')

    @include('layouts.partials.footer')
</body>

</html>

{{-- 13.	Membuat Header untuk Halaman Dashboard di resources/views/layouts/partials/header.blade.php
    yang diambil dari file index.html template SB Admin 2 --}}