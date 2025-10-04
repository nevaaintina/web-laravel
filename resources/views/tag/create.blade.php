<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Tag</title>
</head>
<body>
    <h2>Tambah Tag</h2>

    {{-- Pesan sukses --}}
    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    {{-- Form tambah tag --}}
    <form action="{{ url('/tag') }}" method="POST">
        @csrf
        <label for="tag">Tag</label>
        <input type="text" name="tag" id="tag" required>

        <button type="submit">Simpan</button>
    </form>

    <br>
    <a href="{{ url('/tag') }}">Kembali ke daftar tag</a>

    <footer>
        <p>© 2025 Vokasi UB</p>
    </footer>
</body>
</html>
