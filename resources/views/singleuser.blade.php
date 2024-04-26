<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>curd project in laravel "get methid"</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h2 class="bg-success text-white fs-8 p-2">From Validation</h2>
                @foreach ($user as $user)
                <div class="">
                    <h2>User Name:{{$user->name}}</h2>
                    <h2>User Email:{{$user->email}}</h2>
                    <h2>User City:{{$user->city}}</h2>
                    <h2>User Age:{{$user->age}}</h2>
                </div>
                @endforeach
            </div>
        </div>
        <div class="">
            <a class="btn btn-danger btn-sm" href="{{route('users.index')}}">Back</a>
        </div>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>