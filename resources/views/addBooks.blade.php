<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>AddBooks</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .href, .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
            <a class="href" href="http://127.0.0.1:8000/" class="btn btn-default">main</a>

            <div class="content">
                <div class="title m-b-md">
                    Add Books
                </div>
            </div>
            <div class="content">
            <form method="post" action="{{route('addBooks')}}">
                <div class="form-group">
                   <label for="name">Введите название</label>
                      <input type="text" required class="form-control" id="" name="title" value="">
                </div>
                
                <div class="form-group">
                   <label for="auth">Введите автора</label>
                         <input type="text" required class="form-control" id="author" name="author" value="">
                </div>
                
                <div class="form-group">
                   <label for="page">Введите кол-во страниц</label>
                   <input type="number" required class="form-control"  name="page" value="">
                </div>
                
                <div class="form-group">
                   <label for="year">Год выпуска</label>
                   <input type="number" required class="form-control"  name="year" value="">
                </div>
                    

                <div class="form-group">
                   <label for="publisher">Издательство</label>
                         <input type="text" required class="form-control"  name="publisher" value="">
                </div>

                <button type="submit" class="btn btn-primary">Добавить книгу</button>
                {{csrf_field()}}
                </form>
            </div>
    </body>
</html>