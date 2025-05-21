<h1>Daftar Kelurahan</h1>

<table class="table table-zebra">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Kelurahan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($kelurahans as $kelurahan)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $kelurahan->name }}</td>
                <td>
                    <a href="{{ url('kelurahan.edit', $kelurahan->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ url('kelurahan.destroy', $kelurahan->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
            </tr>
        @endforeach
    </tbody>
</table>