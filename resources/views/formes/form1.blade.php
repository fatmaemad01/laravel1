<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('cssfiles/login.css')}}">

  </head>
  <body>


    <div class="container" id="container">
        <div class="form-container sign-in-container">

            <form action="{{route('formes.form1_data')}}" method="POST">
             {{ csrf_field() }}
                <h1>Sign in</h1>
                <span>or use your account</span>

                <input type="text" placeholder="User ID"name="number" class="form-control @error('number') is-invalid @enderror">
                @error('number')
                <small class="invalid-feedback">{{$message}}</small>
                @enderror
                <input type="password" placeholder="Password" name="password"  class="form-control @error('password') is-invalid @enderror " >
                @error('password')
                <small class="invalid-feedback">{{$message}}</small>
                @enderror

                <a href="#">Forgot your password?</a>
                <button>Sign In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                    <img src="images/2.png" >
                    <p>Medical commissions work to establish the necessary standards for evaluating healthcare providers,
                         develop training and continuous development programs for medical personnel, review complaints related
                         to healthcare providers, and take necessary actions to protect patients from dangers and harm.</p>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
