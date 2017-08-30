<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Book;
class BooksController extends Controller
{
    public function index(){
    	$books = DB::table('books')->orderBy('id', 'desc')->limit(10)->get();
    	return $books;
    }

    public function store(Request $req){
    	return Book::create($req->all());
    }

    public function show($id){
    	return Book::find($id);
    }

    public function edit($id){

    	$book = Book::find($id);
    	return view('edit-book',['book'=> $book]);
    }

    public function update(Request $req, $id){
    	//dd($req->title);
    	$book = Book::find($id);
    	$book->title = $req->title;
    	$book->author = $req->author;
    	$book->save();
    		return $book;
    	
    }
}
