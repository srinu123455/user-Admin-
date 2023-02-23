<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <script
          src="https://code.jquery.com/jquery-3.6.3.min.js"
          integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
          crossorigin="anonymous"></script>
          <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
          <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
          <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
          <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

          <script src="{{url('js/CreateNewEmployee.js')}}"></script>    
          <link href="{{url('css/CreateandupateNewEmployee.css')}}" rel="stylesheet">
 
     
      
 </head>
  <body> 
   @include('Login.dashboard') <div style="">
      
       <div class="flex-center position-ref full-height">
         <div class="row container">
          <div class="col col-12 col-sm-12 col-lg-4 col-md-6 col-xl-3">
          
       
            <form method="post" action="SaveCreateNewEmployee" class="form" id=CreateEmp>
              <div class="formhead">
                <h3 >Create New Employee</h3>
              </div> 
                 @csrf
                   <div class="title m-b-md formbody">
                               <!--   Employee-ID -->
                     <div style="margin-top: 5px">  
                       <input type="text" name="EmpId"style="width:280px;height:33px" class="" id="EmpId"  placeholder="Enter Employee Id">
                          @error('EmpId')
                            <div class="alert alert-danger" style="margin-left:0px;margin-top:10px;width:280px;font-size:13px;height:30px;padding-bottom: 27px;">{{ $message }}</div><br>
                          @enderror
                     </div><br>
                               <!--  First-name -->
                     <div>
                        <input type="text" name="F_Name" class="" id="F_Name" style="width:280px;margin-left:0px;height:33px" placeholder="Enter your First-name"><br>
                            @error('F_Name')
                            <div class="alert alert-danger" style="margin-left:0px;margin-top:10px;width:280px;font-size:13px;height:30px;padding-bottom: 27px;" >{{ $message }}</div>
                            @enderror
                     </div><br>
                                    <!--  Last-Name -->
                     <div>
                        <input type="text" name="L_Name" class="" id="L_Name" style="width:280px;height:33px"  placeholder="Enter your Last-name"><br>
                            @error('L_Name')
                            <div class="alert alert-danger" style="margin-left:0px;margin-top:10px;width:280px;font-size:13px;height:30px;padding-bottom: 27px;" >{{ $message }}</div>
                            @enderror
                     </div><br>
                                     <!--  Gender -->
                     <div class="radio">
                      
                            <span for="gender" style="margin-left: 0px">Gender:<span style="color:red"></span></span>
                               <input type="radio" name="gender"  value="male" style="margin-left: 15px";><span style="margin-left: 35px";>male</span>
                               <input type="radio" name="gender"  value="female" style="margin-left: 0px";><span style="margin-left: 15px";>Female</span><span style="margin-right:70px"></span>
                               <label for="gender" class="error" style="display:none"></label>
                               @error('gender')
                                     <div class="alert alert-danger" style="margin-left:0px;margin-top:10px;width:280px;font-size:13px;height:30px;padding-bottom: 27px;">{{ $message }}
                                     </div>
                               @enderror

                     </div><br>
                    <!--  <div class="radio">
                      
                          <select>
                            <option value="Male">Male
                            </option>
                             <option value="Female">Female
                            </option>
                               @error('gender')
                                     <div class="alert alert-danger" style="margin-left:0px;margin-top:10px;width:280px;font-size:13px;height:30px;padding-bottom: 27px;">{{ $message }}
                                     </div>
                               @enderror

                     </div><br> -->
                               <!--   skills -->
                     <div>
                     <div class="checkbox1">
                          <label for="" class="form-label" style="margin:5px 0px 0px 0px;padding-right: 8px">Skills<span style="margin-left: 15PX">:</label>
                           
                            C <input type="checkbox" name="checkbox[]" value=C style="margin-right:  20px">
                            C++<input type="checkbox" name="checkbox[]" value=C++ style="margin-right:  20px">
                            Java<input type="checkbox" name="checkbox[]" value=Java style="margin-right:  20px">
                            .Net<input type="checkbox" name="checkbox[]" value=.Net style="margin-right:  20px">
                            Python<input type="checkbox" name="checkbox[]" value=Python style="margin-right:  20px">

                            PHP<input type="checkbox" name="checkbox[]" value=PHP style="margin-right: 20px"></div>
                           
                            <div class="error"></div>
                              @error('checkbox')
                                     <div class="alert alert-danger" style="margin-left:0px;margin-top:10px;width:280px;font-size:13px;height:30px;padding-bottom: 27px;">{{ $message }}
                                     </div>
                            @enderror<br>
                     </div>
                                      <!-- Start-Date -->
                     <div>
                      <input type="text" name="Start_Date" id="datepicker" style="width:280px;"  placeholder="Start-Date" autocomplete="off">
                           
                           @error('Start_Date')
                                     <div class="alert alert-danger" style="margin-left:0px;margin-top:10px;width:280px;font-size:13px;height:30px;padding-bottom: 27px;">{{ $message }}
                                     </div>
                                  @enderror    
                      </div>

                          <input type="submit" style="margin:5px 0px 0px 217px; background: #337ab7; color:white" name="submit" id="submit" value="submit" >


               </div>
         </form>
       </div>
      </div>
     </div>
    
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" ></script>
  </body>
</html>
<script>
  $( function() {
    $( "#datepicker" ).datepicker({ dateFormat: 'yy/dd/mm' });
  } );
  </script>
