<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom auth</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 mt-2">
                <h4>
                    Registartion 
                </h4>
                <form action="{{route('register-user')}}" method="POST">
                    @if(Session::has('success'))
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                @endif
                @if(Session::has('fail'))
                    <div class="alert alert-fail">{{Session::get('fail')}}</div>
                @endif
                    @csrf

                    <div class="form-group">
                        <label for="name">Full name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter your name" id="" value="{{old('name')}}">
                    <span class="text-danger">@error('name') {{$message}} @enderror</span> 
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" placeholder="Enter your email" name="email" id="" value="{{old('email')}}">
                        <span class="text-danger">@error('email') {{$message}} @enderror</span> 
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" placeholder="Enter your password" name="password" id="" value="{{old('password')}}">
                        <span class="text-danger">@error('password') {{$message}} @enderror</span> 
                    </div>
<div class="form-group">
    <button class="btn btn-block btn-primary mt-2" type="submit">
        Register
    </button>
</div>
<br>
<a href="login">Log in</a>
                </form>
            </div>
        </div>
    </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>