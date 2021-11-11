<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Human Resource -Management System</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: rgb(252, 248, 248);
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
               
            }
            .col-sm-3{
              margin-left:15vw;
              margin-right:.5vw;
              margin-top:20vh;
            }
            .cols-sm-10{
              margin-top:100px;
              margin: auto;
            }
        </style>
    </head>
    <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Brooklyn Micro-Tech System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        
      </nav>
       <div class="row" id="logo">
         <div class="cols-sm-10">
          <img src="{{ asset('admin-panel/assets/images/bmts logo 001.png')}}" alt="LOGO"></div>
         </div>
       </div>
       @if(Route::has('login'))
          <div class="row" style="visibility: hidden;">
           @auth
             <a href="{{ url('dashboard')}}">Dashboard</a>
           @endauth
          </div>
          @endif
        <div class="row">
          
          <div class="col-sm-3">
            <div class="card " style="align-items: center;">
              <div class="card-body">
                <h5 class="card-title">LOGIN</h5>
                <i class="fa fa-sign-in fa-x10" style="font-size: 80px; margin-bottom:20px"></i><br>
                <a href="{{route('login')}}" class="btn btn-primary">LOGIN</a>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="card" style="align-items: center;">
              <div class="card-body">
                <h5 class="card-title">New User</h5>
                <i class="fa fa-user-circle fa-x10" style="font-size: 80px; margin-bottom:20px"></i><br>
                <a href="{{route('register')}}" class="btn btn-primary">REGISTER</a>
              </div>
            </div>
          </div>
        </div>
     
          
   
    </body>
</html>
