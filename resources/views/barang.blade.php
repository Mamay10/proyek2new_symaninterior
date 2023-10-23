<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Barang</title>
    <!-- Memuat Tailwind CSS melalui CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    @include('layout.navbar')
        <div class="container max-h">
            <article>
                <div class="centered">
                <div class="max-h bg-yellow-700">
                    <div class="flex justify-center">
                        <p style="font-family: Poppins;" class="text-white text-5xl font-bold mt-3">PRODUK</p>
                    </div>
                <div class="card w-60 h-80 bg-white shadow-xl rounded-lg ml-10 mt-10">
                    <figure><img class="w-15 h-15" src="/asset/image/list polos.jpg" alt="" /></figure>
                        <div class="card-body">
                            <h2 class="card-title text-center" style="font-size: 25px">
                            List polos</h2>
                            <div class="badge badge-secondary">Rp. 20000</div>
                            <div class="card-actions justify-end">
                            <div class="badge badge-outline">Fashion</div> 
                            <div class="badge badge-outline">Products</div>
                        </div>
                </div>
                </div>
                <div class="card w-60 h-80 bg-white shadow-xl rounded-lg ml-10 mt-10">
                    <figure><img class="w-15 h-15" src="/asset/image/list mata sapi.jpg" alt="" /></figure>
                        <div class="card-body">
                            <h2 class="card-title text-center" style="font-size: 25px">
                            List polos</h2>
                            <div class="badge badge-secondary">Rp. 20000</div>
                            <div class="card-actions justify-end">
                            <div class="badge badge-outline">Fashion</div> 
                            <div class="badge badge-outline">Products</div>
                        </div>
                </div>
                </div>
                <div class="card w-60 h-80 bg-white shadow-xl rounded-lg ml-10 mt-10">
                    <figure><img class="w-15 h-15" src="/asset/image/list molding.jpg" alt="" /></figure>
                        <div class="card-body">
                            <h2 class="card-title text-center" style="font-size: 25px">
                            List polos</h2>
                            <div class="badge badge-secondary">Rp. 20000</div>
                            <div class="card-actions justify-end">
                            <div class="badge badge-outline">Fashion</div> 
                            <div class="badge badge-outline">Products</div>
                        </div>
                </div>
                </div>
                <div class="card w-60 h-80 bg-white shadow-xl rounded-lg ml-10 mt-10">
                    <figure><img class="w-15 h-15" src="/asset/image/list kangkung.jpg" alt="" /></figure>
                        <div class="card-body">
                            <h2 class="card-title text-center" style="font-size: 25px">
                            List polos</h2>
                            <div class="badge badge-secondary">Rp. 20000</div>
                            <div class="card-actions justify-end">
                            <div class="badge badge-outline">Fashion</div> 
                            <div class="badge badge-outline">Products</div>
                        </div>
                </div>
                </div>
            </div>
            </article>
        </div>
    @yield('content')
</body>
@include('layout.footer')
</html>