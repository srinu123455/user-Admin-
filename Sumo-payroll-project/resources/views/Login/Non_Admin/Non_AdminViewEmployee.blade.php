<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


      <title>Laravel</title>
      <style>
        #table{
       margin-left: 20px;
       width:84% !important;
       height:1160px;
     }  
       table{
       margin:20px 20px 0px 20px;
     } 
     .head{
      background:#fff0f0 !important;
      height:50px;

     }   </style>
</head>
 <body>
  @include('Login.Non_Admin.Non_Admin')
   <div class="head ">
                  <h3><a href="{{url('logout')}}" style="margin-left: 1500px">logout</a></h3>
   </div>
           <div class="table-responsive " id="table">
              <table class="table table-striped table-hover  "  >
                 <thead style="background: pink">
                     <tr>
                        <th><strong>Id</strong></th>
                        <th><strong>Login Id</strong></th>
                        <th><strong>Name</strong></th>
                         <th><strong>Role</strong></th>
                     </tr>
                 </thead>
                 <tbody>

                    @foreach($Nonadmin as $NonAdmindata)
                     <tr style="border:1px solid black">
                      <td>{{$NonAdmindata->id}}</td>
                      <td>{{$NonAdmindata->login_id}}</td>
                      <td>{{$NonAdmindata->name}}</td>
                      <td>{{$NonAdmindata->role}}</td>
                     </tr>
                    @endforeach
                 </tbody>
              </table>
            </div>
      
       
  </body>
</html>