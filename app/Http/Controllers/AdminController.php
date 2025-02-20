<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use View;

class AdminController extends Controller
{
   public function dashboard(Request $request){
    if (!Auth::check() || Auth::user()->role !== 'admin') {
        return redirect()->route('login'); 
    }
    $books = Book::all();
    return View('dashboard',['books'=>$books]);
   }
}

