<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>
<body>
    <section class="home">
        @section('titleName', 'Home')
        <h1>
            Home Page
        </h1>
        <ul>
            <li><a href="{{ route('dogs.index') }}">Dogs</a></li>
            <li><a href="#">Cats</a></li>
            <li><a href="#">Birds</a></li>
        </ul>
    </section>
</body>
</html>


