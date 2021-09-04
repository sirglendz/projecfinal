<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Personal Website - Code With Dary
    </title>
    <link 
        rel="stylesheet" 
        href="style.css"
    />
    <link 
        href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;900&display=swap" 
        rel="stylesheet"
    />
    <link 
        rel="stylesheet" 
        href="//use.fontawesome.com/releases/v5.0.7/css/all.css"
    />
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    </head>

<body>
    <header>
        <!-- Navigation -->
        @include('layouts.header')
    </header>
    
    <!--Yield define section that user from child page (index page) to  master page (app apge)-->
    @yield('content')

    <!-- Footer -->
    <footer>
        @include('layouts.footer')
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
</body>
</html>