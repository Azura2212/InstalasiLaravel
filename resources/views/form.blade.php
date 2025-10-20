<!DOCTYPE html>
<html>
<head>
    <title>Form Mahasiswa</title>
</head>
<body>
    <h2>Input Data Mahasiswa</h2>
    

    @if (isset($message))
    <p style="color: green; font-weight: bold;">{{ $message }}</p>
@endif


    <form action="/simpan" method="POST">
        @csrf
        <label>Nama:</label>
        <input type="text" name="nama" required><br><br>

        <label>NIM:</label>
        <input type="text" name="nim" required><br><br>

        <label>Jurusan:</label>
        <input type="text" name="jurusan" required><br><br>

        <button type="submit">Simpan</button>
    </form>

    <br>
    <a href="/daftar-mahasiswa">Lihat Daftar Mahasiswa</a>
</body>
</html>
