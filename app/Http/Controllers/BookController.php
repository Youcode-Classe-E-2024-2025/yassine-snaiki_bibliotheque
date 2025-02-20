<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BookController extends Controller
{
    public function index()
    {
        return View('home',['books'=>Book::paginate(5)]);
    }
    public function books()
    {
        return View('books',['books'=>Book::all()]);
    }
    public function book($id)
    {
        return View('book',['book'=>Book::find($id)]);
    }

    public function create(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'image' => 'string|max:255',
        ]);

        $book = Book::create([
            'title' => $request->title,
            'description' => $request->description,
            'category' => $request->category,
            'author' => $request->author,
            'image'=>$request->image
        ]);
        return redirect()->intended('/dashboard')->with('message','book created successfuly');
    }

    public function show(Book $book)
    {
        return response()->json($book);
    }

    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category' => 'required|string|max:255',
            'author' => 'required|string|max:255',
        ]);

        $book->update($request->all());

        return response()->json($book);
    }

    public function delete($id)
    {
        Book::find($id)->delete();
        return redirect()->intended('/dashboard')->with("message",'deleted successfuly');
    }
    
}
