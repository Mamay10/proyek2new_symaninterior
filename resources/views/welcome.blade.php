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
    <div class="w-full h-20 bg-white shadow-xl flex justify-start items-center">
        <p class="ml-20 font-bold" style="font-family: Poppins;">Home</p>
        <p class="ml-20 font-bold">Barang</p>
        <p class="ml-20 font-bold">Jasa</p>
        <p class="ml-20 font-bold">Barang & Jasa</p>
        <p class="ml-20 font-bold">Keranjang</p>
        <p class="ml-20 font-bold">History</p>
    </div>
    <!-- Elemen berukuran kecil dengan latar belakang kuning -->
    <div class="max-h-100 bg-yellow-700">
        <div class="flex justify-center">
            <p style="font-family: Poppins;" class="text-white text-5xl font-bold mt-6">SYMAN</p>
            <p style="font-family: Poppins;" class="text-black text-5xl font-bold mt-6">INTERIOR</p>
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
</body>
<footer class="footer p-7 bg-white text-base-content flex">
    <!-- Services -->
    <nav class="flex flex-col items-start flex-1 mr-8">
        <header class="footer-title font-bold mb-5">Services</header>
        <a class="link link-hover mb-2">Branding</a> 
        <a class="link link-hover mb-2">Design</a> 
        <a class="link link-hover mb-2">Marketing</a> 
        <a class="link link-hover mb-2">Advertisement</a>
    </nav>

    <!-- Company -->
    <nav class="flex flex-col items-center flex-1 mr-8">
        <header class="footer-title font-bold mb-5">Company</header>
        <a class="link link-hover mb-2">About us</a> 
        <a class="link link-hover mb-2">Contact</a> 
        <a class="link link-hover mb-2">Jobs</a> 
        <a class="link link-hover mb-2">Press kit</a>
    </nav>

    <!-- Social -->
    <nav class="flex flex-col items-end flex-1">
        <header class="footer-title mb-2">Social</header> 
        <div class="flex gap-4">
            <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path></svg></a>
            <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path></svg></a>
            <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path></svg></a>
        </div>
    </nav>
</footer>
</html>