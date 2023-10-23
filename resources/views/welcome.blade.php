<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <!-- Memuat Tailwind CSS melalui CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <!-- Elemen berukuran panjang dengan latar belakang merah -->
    @include('layout.navbar')
    <div class="container max-h">
        <article>
            <div class="max-h bg-yellow-700">
                <div class="flex justify-center">
                    <p style="font-family: Poppins;" class="text-white text-5xl font-bold mt-3">SYMAN</p>
                    <p style="font-family: Poppins;" class="text-black text-5xl font-bold mt-3">INTERIOR</p>
                </div>
            <div class="flex">
                <img src="asset/image/logobaru.png" alt="" class="bg-white rounded-xl ml-8 mt-7 w-13 h-15">
                    <p style="font-family: Poppins;" class="mt-40 ml-10 text-black text-2xl">Syman Interior merupakan penyedia jasa pemasangan sekaligus barang interior yang berfokus pada bidang plafon dan dinding. Kami berkomitmen untuk membantu anda dalam proses pembuatan rumah impian anda dengan model-model terkini</p>
            </div>
            <div class="flex justify-center">
                    <p style="font-family: Poppins;" class="text-white text-5xl font-bold mt-8">Wujudkan Rum</p>
                    <p style="font-family: Poppins;" class="text-black text-5xl font-bold mt-8">ah Impian MU</p>
            </div>
        </div>
    </div>
</article>
@yield('content')
</body>
@include('layout.footer')
</html>