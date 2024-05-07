<!DOCTYPE html>
<html>
<head>
    <title>Profil Pengguna</title>
</head>
<body>
    <h1>Profil Pengguna</h1>
    <p>Nama Akun: {{ $user->name }}</p>
    <p>Email: {{ $user->email }}</p>
    <p>Gender: {{ $user->gender }}</p>
    <p>Umur: {{ $user->age }}</p>
    <p>Tanggal Lahir: {{ $user->birthdate }}</p>
    <p>Alamat: {{ $user->address }}</p>
</body>
</html>