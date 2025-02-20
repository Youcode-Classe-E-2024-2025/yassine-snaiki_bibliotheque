<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use View;

class ClientController extends Controller
{
   public function borrow(Request $request){
    if (!Auth::check()) {
        return redirect()->route('login'); 
    }

    $request->validate([
        'id' => 'required|string',
    ]);
    
    $book = Book::findOrFail($request->id);
    if($book->user_id) {
        return redirect()->intended("/books/{$book->id}")->with("book already borrowed");
    }else {
        $book->update(['user_id'=>Auth::id()]);
        return redirect()->intended("/books/{$book->id}")->with("book reserved successfuly");
    }
   }
   public function borrowed() {
    if (!Auth::check()) {
        return redirect()->intended('login'); 
    }

    $books = Book::where('user_id', Auth::id())->get(); // Fetch the actual books

    return view('borrowed', ['books' => $books]);
}
}
