{{-- 9.	Membuat container untuk halaman Login & Register di  --}}
<!DOCTYPE html>
<html>

<head>
    <title> Masuk atau Daftar - {{ config('app.name') }}</title>
    <link href="{{ asset('css/sb-admin-2.css') }}" rel="stylesheet">
</head>

<body id="page-top">
@yield('content')

<!-- Javascript Vendor -->
<script src="{{ asset('js/sb-admin-2.js') }}"></script>
</body>

</html>

{{-- 10.	Kemudian kita copy semua kode yang ada di login.html pada Template SB Admin 2 ke --}}
{{-- resources/views/auth/login.blade  --}}

