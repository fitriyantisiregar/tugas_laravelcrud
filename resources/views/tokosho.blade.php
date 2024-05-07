<!DOCTYPE html>
<html>
<head>
    <title>Profil Toko</title>
</head>
<body>
    <h1>Profil Toko</h1>
    <p>Nama Toko: {{ $store->store_name }}</p>
    <p>Rate: {{ $store->rate }}</p>
    <p>Produk Terbaik: {{ $store->best_product }}</p>
    <p>Deskripsi: {{ $store->description }}</p>
</body>
</html>