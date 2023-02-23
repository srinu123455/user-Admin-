<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <script
 src="https://code.jquery.com/jquery-3.6.3.min.js"
 integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
 crossorigin="anonymous">
</script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

 <script src="{{url('js/LoginFormValidation.js')}}"></script>
 <link href="{{url('css/Createlogin.css')}}" rel="stylesheet">
 <style>
  form{
   height:300px;
                width:800px;
                background-color:white;
                color:black;
                 box-sizing: border-box;
                 border:1px solid #cdcaca;
                 border-radius: 10px;
                 margin-left: 550px;
                 margin-top: 20px;
  }
  .button{
    margin-left: 1270px;
    font-size: 25px;
    border-color: #989fa7;
    border-radius:5px;

  }
 </style>
 </head>
  <body>
    <div><h2><button  class="button"> <a href="{{url('http://localhost/laravel-Sumo-project/Sumo-payroll-project/public/Login')}}" style="text-decoration: none;">Login</a></button></h2>
    </div>
    <form>
     <div class="col col-3 col-4 col-s-3 col-s-5 col- 8 col-12 dis">
      <h1 style="margin:75px 0px 0px 305px;color:#989fa7">404 Error</h1>
     </div>
     <div class="col col-3 col-4 col-s-3 col-s-5 col- 8 col-12 dis">
      <h1 style="margin:0px 0px 0px 270px;color:#989fa7">Access Denied</h1>
     </div>
    </form>
  </body>
</html>

