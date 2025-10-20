<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>

    <table border="1" cellpadding="6">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
        </tr>

        @foreach ($mahasiswa as $mhs)
        <tr>
            <td>{{ $mhs->id }}</td>
            <td>{{ $mhs->nama }}</td>
            <td>{{ $mhs->nim }}</td>
            <td>{{ $mhs->jurusan }}</td>
        </tr>
        @endforeach
    </table>

    <br>
    <a href="/form">Tambah Data Baru</a>
</body>
</html>
