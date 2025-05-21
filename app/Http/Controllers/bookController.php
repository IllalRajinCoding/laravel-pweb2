<?php

namespace App\Http\Controllers;

use App\Models\book;
use Illuminate\Http\Request;

class bookController extends Controller
{
    public function index()
    {
        $books = book::all();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'year' => 'required|integer',
        ]);

        book::create($validatedData);

        return redirect('/list')->with('success', 'Book created successfully.');
    }
}
