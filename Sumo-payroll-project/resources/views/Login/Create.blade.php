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
     
</style>
    </head>
    <body>
     <div class="col col-3 col-4 col-s-3 col-s-5 col- 8 col-12 dis">
         <form method="post" action="{{url('Checklogin')}}" id="Login" >
            @if(Session::has('success'))
              <div class="alert alert-success">{{Session::get('success')}}</div>
            @endif
             @if(Session::has('fail'))
              <div class="alert alert-danger">{{Session::get('fail')}}</div>
             @endif
         <div class="row container">
          <div class="col col-12 col-sm-12 col-md-12 col-lg-12 cal"> 
            <h1 style="margin-left: 140px;color:white">Login</h1>
              @csrf
          
             <div class="title m-b-md ">

                   <div class="row">
                    <div class="col  col-12">
                      <div class="form-group">
           
                        <input type="text" class="form-control" id="name" name="name" placeholder="User Name">
                         @error('name')
                           <div class="alert alert-danger" style="margin-left:0px;margin-top:10px;width:425px;font-size:15px;height:30px;padding-bottom: 27px;" >{{ $message }}</div>
                         @enderror
                      </div>
                    </div>
                   </div>

                  <div class="col col-3 col-4 col-s-3 col-s-5 col- 8 col-12">
                   <div class="form-group">
                     <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        @error('password')
                          <div class="alert alert-danger" style="margin-left:0px;margin-top:10px;width:425px;font-size:15px;height:30px;padding-bottom: 27px;" >{{ $message }}</div>
                        @enderror
                   </div>
                  </div>
 
                  <div class="col">

                   <div class="form-group">
                     <button style="cursor:pointer" type="submit" class="btn btn-primary submit-btn">Login</button>
    
                     <button style="cursor:pointer" type="reset" class="btn btn-primary clear-btn">Clear</button>
                   </div>
                  </div>
                     
            </div>
          </div>
        </div>
     </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" ></script>
    </body>
</html>

