<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function showBookForm()
    {
        return view('backend.add-book');
    }


    public function store(Request $request)
    {
        $request->validate([
            'bookName' => 'required|string|max:255',
            'authorName' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'totalNoOfBooks' => 'required|integer|min:1',
        ]);

        Book::create([
            'name' => $request->input('bookName'),
            'author' => $request->input('authorName'),
            'category' => $request->input('category'),
            'total' => $request->input('totalNoOfBooks'),
        ]);
        return redirect()->back()->with('success', 'Book added successfully!');
    }

    public function search(Request $request)
    {
        $request->validate([
            'bookName' => 'nullable|string|max:255',
        ]);
        $books = Book::where('name', 'like', '%' . $request->input('bookName') . '%')->get();
        return view('backend.book-search', ['books' => $books]);
    }

    public function bookList()
    {
        $books = Book::all();
        return view('backend.book-list', ['books' => $books]);
    }
}
