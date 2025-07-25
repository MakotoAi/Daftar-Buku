<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'year' => 'required|digits:4|integer',
        ]);

        Book::create($request->all());
        return redirect()->back()->with('success', 'Buku berhasil ditambahkan!');
    }

    public function destroy($id)
    {
        Book::destroy($id);
        return redirect()->back()->with('success', 'Buku berhasil dihapus!');
    }
}
