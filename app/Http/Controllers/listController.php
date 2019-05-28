<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Book ;
class listController extends Controller
{
   
  
    public function addBooks(Request $request){
        $add = new Book;
        $add->fill($request->all());
        $add->save();
        return view('addBooks');

    }
        //фукция для изменения книг, до конца не реализована 
        public function editBooks(){
            $books= App\Book::all();
        
           Book::where('id', 1)
          ->update([]);
           return view('editorBooks', compact('books'));
           

    }
    
    
}
