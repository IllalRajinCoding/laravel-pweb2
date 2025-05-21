<!DOCTYPE html>
<html>
<head>
    <title>{{ $judul }}</title>
</head>
<body>
    <h1>{{ $judul }}</h1>
    
    <ul>
        @foreach($listprodi as $prodi)
            <li>
                {{ $prodi->kode }} - {{ $prodi->nama }}
                (Kaprodi: {{ $prodi->kaprodi }})
            </li>
        @endforeach
    </ul>
</body>
</html>