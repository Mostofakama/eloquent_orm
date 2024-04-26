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
        <div class="md-8">
            @if(session('status'))
            
            <div class="alert alert-success">
                {{session('status')}}
            </div>
            @endif
           
        </div>
        <div class="m-4">
        <h1>New Users</h1>
        </div>
        <div class="m-2 w-100">
          {{-- @foreach ($user as $user) --}}
          <form action="{{route('users.update',$user->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="my-2 w-100">
                <input value="{{$user->name}}" class="px-4 py-1 @error('name') is-invalid @enderror " type="text" placeholder="Name" name="name">
                <span class="text-danger d-block">
                    @error('name')
                       {{ $message;}}
                    @enderror
                </span>
            </div>
            
            <div class="my-2 w-100">
                
                <input value="{{$user->email}}" class="px-4 py-1    @error('email') is-invalid @enderror" type="email" placeholder="Email" name="email">
                <span class="text-danger d-block">
                    @error('email')
                    
                       {{ $message;}}
                   
                    @enderror
                </span>
            </div>
            {{-- <div class="my-2 w-100">
              
                <input value="{{old('password')}}" class="px-4 py-1 @error('password') is-invalid @enderror" type="password" placeholder="password" name="password">
                <span class="text-danger d-block">
                    @error('password')
                       {{ $message;}}
                    @enderror
                </span>
            </div> --}}
            <div class="my-2 w-100">
              
                <input value="{{$user->city}}" class="px-4 py-1 @error('city') is-invalid @enderror" type="text" placeholder="City" name="city">
                <span class="text-danger d-block">
                    @error('city')
                       {{ $message;}}
                    @enderror
                </span>
            </div>
            <div class="my-2 w-100">
              
                <input value="{{$user->age}}" class="px-4 py-1 @error('age') is-invalid @enderror" type="text" placeholder="Age" name="age">
                <span class="text-danger d-block">
                    @error('age')
                       {{ $message;}}
                    @enderror
                </span>
            </div>
            <div class="my-2 w-100">
              
                <input class="px-4 py-1" type="submit" value="submit">
            </div>
          </form>
          {{-- @endforeach --}}
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>