<form action="{{ url('/books/store') }}" method="POST" class="p-4 border rounded shadow-sm bg-light">
    @csrf

    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" value="{{ old('title') }}">
        @error('title')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="author" class="form-label">Author</label>
        <input type="text" class="form-control @error('author') is-invalid @enderror" name="author" id="author" value="{{ old('author') }}">
        @error('author')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="year" class="form-label">Year</label>
        <input type="number" class="form-control @error('year') is-invalid @enderror" name="year" id="year" value="{{ old('year') }}">
        @error('year')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Save Book</button>
</form>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">