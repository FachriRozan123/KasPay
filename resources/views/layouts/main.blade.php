<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KasPay</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style2.css') }}">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg">
    <div class="container">
        <nav class="isi">
            <div class="Merek">
            <div class="namaAwal">Kas</div>
            <div class="namaAkhir">Pay</div>
            </div>

            <ul class="navigasi">
                <li><a href="#">Home</a></li>
                <li><a href="#">Pembayaran</a></li>
                <li><a href="#">Pengeluaran</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Login</a></li>
            </ul>
        </nav>
    </div>
    @yield('container')
</body>
</html>