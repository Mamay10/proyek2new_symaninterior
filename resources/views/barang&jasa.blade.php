<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Barang & Jasa</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    @include('layout.navbar')
    <article class="bg-yellow-700 w-full">
        <div class="centered">
        <div class="max-full bg-yellow-700">
            <div class="flex justify-center">
                <p style="font-family: Poppins;" class="text-white text-5xl font-bold mt-3">BARANG & JASA</p>
            </div>
            <div class="flex flex-container">
                <div class="card w-30 h-50 bg-white shadow-xl rounded-lg mt-10 " style="width:25%">
                    <figure><img class="" src="/asset/image/list polos.jpg" alt="" /></figure>
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
                <div class="card w-30 h-50 bg-white shadow-xl rounded-lg ml-10 mt-10" style="width:25%">
                    <figure><img class="width:25%" src="/asset/image/list mata sapi.jpg" alt="" /></figure>
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
                <div class="card w-30 h-50 bg-white shadow-xl rounded-lg ml-10 mt-10" style="width:25%">
                    <figure><img class="width:25%" src="/asset/image/list molding.jpg" alt="" /></figure>
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
                <div class="card w-30 h-50 bg-white shadow-xl rounded-lg ml-10 mt-10" style="width:25%">
                    <figure><img class="width:25%" src="/asset/image/list kangkung.jpg" alt="" /></figure>
                        <div class="card-body">
                            <h2 class="card-title text-center" style="font-size: 25px">
                            List polos</h2>
                            <div class="badge badge-secondary">Rp. 20000</div>
                            <div class="card-actions justify-end">
                            <div class="badge badge-outline">Fashion</div> 
                            <div class="badge badge-outline">Products</div>
                        </div>
                    </div>
        </article>
</body>
@include('layout.footer')
</html>