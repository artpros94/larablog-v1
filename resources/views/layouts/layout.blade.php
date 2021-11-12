<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
<body>

    <div class="wrapper">
    
        <div class="container">
            @include('elem.header')
        </div>
            
        <div class="content">

            @if(Route::is('home'))
            <div class="px-4 pt-1 my-1 text-center border-bottom">
                <h1 class="display-4 fw-bold">Centered screenshot</h1>
                <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                </div>
            </div>
            @endif  

            <div class="container">
                <div class="row">
                    <div class="col-10">
                        @yield('content')
                    </div>
                    <div class="col-2">
                        @include('elem.aside', ['categories' => $categories])
                    </div>
                </div>
            </div>
        </div>
  

    <div class="footer">
        <div class="container">
            @include('elem.footer')
        </div>
    </div>

    </div>
    
</body>
</html>