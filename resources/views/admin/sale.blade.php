<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/sale" method="post">
        @csrf
        <input type="text" name="nama">
        <input type="text" name="gambar">
        <input type="number" name="harga">
        <input type="number" name="stok">
        <input type="submit" value="kirim">
    </form>
</body>
</html>