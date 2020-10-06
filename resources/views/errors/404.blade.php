<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>404 Page not found</title>
    <link rel="stylesheet" href="{{asset('css/404.css')}}">
</head>
<body>
    <div class="container">
        <div class="image">
            <img src="{{asset('images/meme.jpg')}}" alt="error not found">
        </div>
        <div class="error-txt">
            <h3>ERROR 404</h3>
            <h1>Oops!</h1>
            <p>We couldn't find what you are looking for.</p>
            <div class="buttons">
                <a href="{{ url()->previous() }}">Go back</a>
                <a href="{{url('/')}}">Dashboard</a>
                <a href="#">Support</a>
            </div>
        </div>
    </div>
</body>
</html>