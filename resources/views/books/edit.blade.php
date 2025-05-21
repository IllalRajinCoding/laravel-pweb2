<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Buku</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-base-200 flex items-center justify-center">
    <div class="w-full max-w-md bg-base-100 p-8 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold mb-6 text-primary text-center">Edit Buku</h2>
        <form action="{{ url('/books/update/' . $book->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label class="block mb-1 font-semibold">Title:</label>
                <input type="text" name="title" value="{{ old('title', $book->title) }}"
                    class="input input-bordered w-full" autocomplete="off">
                @error('title')
                    <small class="text-error">{{ $message }}</small>
                @enderror
            </div>

            <div>
                <label class="block mb-1 font-semibold">Author:</label>
                <input type="text" name="author" value="{{ old('author', $book->author) }}"
                    class="input input-bordered w-full" autocomplete="off">
                @error('author')
                    <small class="text-error">{{ $message }}</small>
                @enderror
            </div>

            <div>
                <label class="block mb-1 font-semibold">Year:</label>
                <input type="number" name="year" value="{{ old('year', $book->year) }}"
                    class="input input-bordered w-full" autocomplete="off">
                @error('year')
                    <small class="text-error">{{ $message }}</small>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary w-full">Update Book</button>
        </form>
    </div>
</body>

</html>
