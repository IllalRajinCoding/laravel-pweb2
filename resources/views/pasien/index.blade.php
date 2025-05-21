<h1>Daftar Pasien</h1>
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Kode </th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>Kelurahan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pasiens as $p)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $p->kode }}</td>
                <td>{{ $p->nama }}</td>
                <td>{{ $p->tmp_lahir }}</td>
                <td>{{ $p->tgl_lahir }}</td>
                <td>{{ $p->gender }}</td>
                <td>{{ $p->alamat }}</td>
                <td>{{ $p->email }}</td>
                <td>{{ $p->kelurahan_id }}</td>
                <td>
                    <a href="{{ url('pasien.edit', $p->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ url('pasien.destroy', $p->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>