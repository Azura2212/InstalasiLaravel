<!DOCTYPE html>
<html>
<head>
    <title>Edit Mahasiswa</title>
</head>
<body>
    <h1>Edit Data Mahasiswa</h1>

    @if($errors->any())
        <ul style="color:red;">
            @foreach($errors->all() as $err)
                <li>{{ $err }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
        @csrf
        @method('PUT')
        Nama: <input type="text" name="nama" value="{{ old('nama', $mahasiswa->nama) }}"><br>
        NIM: <input type="text" name="nim" value="{{ old('nim', $mahasiswa->nim) }}"><br>
        Jurusan: <input type="text" name="jurusan" value="{{ old('jurusan', $mahasiswa->jurusan) }}"><br>
        Tahun Masuk: <input type="text" name="tahun_masuk" value="{{ old('tahun_masuk', $mahasiswa->tahun_masuk) }}"><br>
        Email: <input type="email" name="email" value="{{ old('email', $mahasiswa->email) }}"><br><br>
        <button type="submit">Update</button>
    </form>

    <a href="{{ route('mahasiswa.index') }}">Kembali</a>
</body>
</html>

