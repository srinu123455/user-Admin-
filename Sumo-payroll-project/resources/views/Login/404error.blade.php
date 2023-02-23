<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

 <style>
  body{
    background:#ebe4e5;
  }
  form{
                height:300px;
                width:800px;
                background-color:white!important;
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
    background: blue;


  }
 </style>
 </head>
  <body>
    <div><h2><button  class="button"> <a href="{{url('http://localhost/laravel-Sumo-project/Sumo-payroll-project/public/Login')}}" style="text-decoration: none;color:white">Login</a></button></h2>
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

