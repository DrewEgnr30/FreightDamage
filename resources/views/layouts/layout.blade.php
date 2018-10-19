<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <title>Freight Damage</title>
    </head>
    <body>
        <nav style="width: 3000px;" class="navbar navbar-expand-xl navbar-dark bg-primary">
            <a class="navbar-brand" href="/">Quincy</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Claims</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="input">Input</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div id="app" class="mt-4">
            @yield('content')
        </div>
        <script src="js/app.js" ></script>
    </body>
</html>
