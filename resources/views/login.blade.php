<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      background-image: url(assets/img/Adbg.png);
    }
    .login-form {
      max-width: 500px;
      width: 80%;
      padding: 30px;
      border-radius: 5px;
      background-color: #ffffff;

    }
    .logcontain{
        display: flex;
        justify-content: center;
        align-items: center;
        border-left: 2px solid #999999; /* Adjust the width and color as needed */

    }
    .logcontains{
        text-align: center;

    }
    .btn-primary {
      display: block;
      margin: 0 auto;
      padding: 10px 50px;
    }
    .welcome-text {
      font-family:sans-serif ;
      font-size: 45px;
      font-weight: 600;
      line-height: 50px;
    }
    .login-text {
      font-family: "Inter", sans-serif;
      font-size: 16px;
      font-weight: 500;
      line-height: 25px;
    }
   
  </style>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 logcontains">
       
        {{-- <img src="assets/img/lft_icon.png" alt="Image" width="500" class="img-fluid"> --}}

        <div id="lottie"></div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.13/lottie.min.js"></script>
    <script>
        bodymovin.loadAnimation({
            container: document.getElementById("lottie"),
            path: "{{asset('assets/json/data.json')}}"
        })
    </script>
      </div>
      <div class="col-md-6 logcontain">
        @if($errors->any())
            <ul>
                {!! implode('',$errors->all('<li>:message</li>')) !!}
            </ul>
        @endif
        <form class="login-form " method="POST" action="/authenticate">
            @csrf
          <h2 class="text-center welcome-text ">Welcome</h2>
          <p class="text-center login-text ">PLEASE LOGIN TO ADMIN DASHBOARD</p>
          <div class="form-group p-2">
            <input type="text" id="username" name="email" class="form-control" placeholder=" Username " >
          </div>
          <div class="form-group p-2">
            <input type="password" id="password" name="password" class="form-control" placeholder=" Password " >
          </div>
          <button type="submit" class="btn btn-primary  ">Login</button>
        </form>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS and jQuery -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
