<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Book;
class BooksController extends Controller
{
    public function index(){
    	$books = DB::table('books')->limit(10)->get();
    	return $books;
    }

    public function create(Request $req){
    	return Book::create($req->all());
    }
}
