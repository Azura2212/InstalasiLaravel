<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href="{{ route('mahasiswa.create') }}">+ Tambah Mahasiswa</a>

    <table border="1" cellpadding="6" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>Tahun Masuk</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
        @foreach($mahasiswas as $mhs)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $mhs->nama }}</td>
            <td>{{ $mhs->nim }}</td>
            <td>{{ $mhs->jurusan }}</td>
            <td>{{ $mhs->tahun_masuk }}</td>
            <td>{{ $mhs->email }}</td>
            <td>
                <a href="{{ route('mahasiswa.edit', $mhs->id) }}">Edit</a>
                <form action="{{ route('mahasiswa.destroy', $mhs->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Yakin hapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
