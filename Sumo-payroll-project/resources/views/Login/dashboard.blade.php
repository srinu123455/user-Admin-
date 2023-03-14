<html>
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
      <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
      <script src='https://www.google.com/recaptcha/api.js'></script>
      <link href="{{url('css/Dashboard.css')}}" rel="stylesheet">
   </head>
   <body>
      <!--  <button style="margin-bottom:10px;padding: 15px 0px 0px 40px; background: black"><a href="{{   url('http://localhost/newproject/blog/public/index') }}">User_Password_Data</a></button> -->
      <?php
         // dd(Session::get('role'));
         ?>
      <!-- @if(Session::get('id'))
         <div class="alert alert-success">{{Session::get('id')}}
          @endif -->
      @if(Session::get('role')=='Admin')
      @include('Login.Admin.viewEmployeeData')
      @elseif(Session::get('role')=='NonAdmin')
      @include('Login.Non_Admin.Non_AdminViewEmployee')
      @else
      @include('Login.Create')
      @endif
   </body>
</html>