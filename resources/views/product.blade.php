
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row my-lg-5 bg-info rounded">
            <div class="col-12 my-5">
                <div class="d-flex  align-items-center">
                    <div class="col-2">
                        <a href="{{ route('admin.create') }}" class="btn btn-primary">Ke Halaman Admin</a>
                    </div>
                    <div class="col-8 ">
                        <h3 class="fw-bold text-center">PRODUCTS</h3>
                    </div>
                </div>
                <div class="border border-top border-black mx-auto mt-3" style="width: 100px"></div>
                <div class=" row justify-content-center mt-5">
                    @foreach ($products as $product)
                    <div class="col-md-3 mb-4">
                        <div class="card p-1 ">
                            <img src="{{$product->gambar}}" class="card-img-top image-product rounded" alt="...">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h4 class="card-title">{{ $product->nama }}</h4>
                                    <p class="card-text bg-success p-1 rounded text-white  @if($product->kondisi == 'baru') bg-success @else bg-warning @endif">{{ $product->kondisi  }}</p>
                                </div>
                                <div class="d-flex justify-content-between m-1 mt-2">
                                    <p class="bg-success rounded text-white p-1  ">{{ $product->stock }}</p>
                                    <p class="bg-info  rounded p-1 w-10">Rp.{{ $product->harga }}</p>
                                    <p class="bg-secondary text-white rounded p-1 w-10">{{ $product->berat}} gr</p>
                                </div>
                                <p>{{ $product->deskripsi }}</p>
                                <a href="#" class="btn btn-primary w-100 ">Pesan sekarang</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
</body>

</html>
