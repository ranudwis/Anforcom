<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Pendaftaran workshop</h2>
    <form method="POST" action="{{route()}}">
        <label>Nama</label>
        <input type="text" name="nama"><br>
        <label>Email</label>
        <input type="text" name="email"><br>
        <label>Kontak</label>
        <input type="number" name="kontak"><br>
        <label>Foto KTM</label>
        <input type="file" name="ktm"><br>
        <label>Foto KTP</label>
        <input type="file" name="ktp"><br>
        <button type="submit">Submit</button>
    </form>
</body>

</html>
