<!DOCTYPE html>
<html>
<head>
    <title>Form pelaporan</title>
</head>
<body>
    <h1>from pelaporan</h1>
    <form action="/proses" method="post">
        @csrf
        <label>Nama:</label>
        <input type="text" name="nama"><br><br>

        <label>jenis bencana:</label>
        <input type="number" name="umur"><br><br>

        <label>Alamat:</label>
        <textarea name="alamat"></textarea><br><br>

        <button type="submit">Kirim</button>
    </form>
</body>
</html>