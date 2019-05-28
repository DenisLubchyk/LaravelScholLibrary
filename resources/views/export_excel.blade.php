<!DOCTYPE html>
<html>
 <head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
    border:1px solid #ccc;
   }
   .href{
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
  </style>
 </head>
 <body>
     <a class="href" href="http://127.0.0.1:8000/" class="btn btn-default">main</a>
  <br />
  <div class="container">
   <h3 align="center">Export Data to Excel in Laravel using Maatwebsite</h3><br />
   <div align="center">
    <a href="{{ route('export_excel.excel') }}" class="btn btn-success">Export to Excel</a>
   </div>
   <br />
   <div class="table-responsive">
    <table class="table table-striped table-bordered">
     <tr>
      <td>TITLE</td>
      <td>AUTHOR</td>
      <td>PAGE</td>
      <td>YEAR</td>
      <td>PUBLISHER</td>
     </tr>
     @foreach($books as $book)
     <tr>
      <td>{{ $book-> title }}</td>
      <td>{{ $book->author }}</td>
      <td>{{ $book->page }}</td>
      <td>{{ $book->year }}</td>
      <td>{{ $book->publisher }}</td>
     </tr>
     @endforeach
    </table>
   </div>
   
  </div>
 </body>
</html>


