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
            <div class="container">
                <div class="row">
                    <div class="col-10">
                        @yield('content')
                    </div>
                    <div class="col-2">
                        @include('elem.aside')
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