<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Excel;

class ExportExcelController extends Controller
{
     function index()
    {
     $books = DB::table('books')->get();
     return view('export_excel')->with('books', $books);
    }
    
    function excel()
    {
     $books = DB::table('books')->get()->toArray();
     $books_array[] = array('title', 'Author', 'page', 'year', 'publisher');
     foreach($books as $book)
     {
      $books_array[] = array(
       'title'  => $book->title,
       'author'   => $book->author,
       'page'    => $book->page,
       'year'  =>$book->year,
       'publisher'   => $book->publisher
      );
     }
     Excel::create('Books', function($excel) use ($books_array){
      $excel->setTitle('Books');
      $excel->sheet('Books', function($sheet) use ($books_array){
      $sheet->fromArray($books_array, null, 'A1', false, false);
      });
     })->download('xlsx');
    }
}
