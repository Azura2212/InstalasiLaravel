<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mahasiswa</title>
</head>
<body>
    <h1>Tambah Mahasiswa</h1>

    @if($errors->any())
        <ul style="color:red;">
            @foreach($errors->all() as $err)
                <li>{{ $err }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('mahasiswa.store') }}" method="POST">
        @csrf
        Nama: <input type="text" name="nama" value="{{ old('nama') }}"><br>
        NIM: <input type="text" name="nim" value="{{ old('nim') }}"><br>
        Jurusan: <input type="text" name="jurusan" value="{{ old('jurusan') }}"><br>
        Tahun Masuk: <input type="text" name="tahun_masuk" value="{{ old('tahun_masuk') }}"><br>
        Email: <input type="email" name="email" value="{{ old('email') }}"><br><br>
        <button type="submit">Simpan</button>
    </form>

    <a href="{{ route('mahasiswa.index') }}">Kembali</a>
</body>
</html>
