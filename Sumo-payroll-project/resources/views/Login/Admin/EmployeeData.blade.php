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
     }    </style>
</head>
 <body>
  <div style="">
   @include('Login.dashboard')
 </div>
 <form method="get" action="">


      
         <div class="table-responsive " id="table">
              <table class="table table-striped table-hover  table-bordered"  >
                 <thead style="background: pink">
                     <tr>
                        <th><strong>Id</strong></th>
                        <th><strong>Employee_Id</strong></th>
                        <th><strong>F_Name</strong></th>
                        <th><strong>L_Name</strong></th>
                        <th><strong>Gender</strong></th>
                        <th><strong>Skills</strong></th>
                        <th><strong>Start_date</strong></th>
                        <th><strong>Created By</strong></th>
                        <th><strong>Updated By</strong></th>
                        <th><strong>Created On</strong></th>
                        <th><strong>Updated On</strong></th>
                        <th><strong>Action</strong></th>
                     </tr>
                 </thead>
                 <tbody>
                    @foreach($ViewEmployeeData as $EmployeeData)
                    <tr>
                     <td>{{$EmployeeData->id}}</td>
                     <td>{{$EmployeeData->EmpId}}</td>
                     <td>{{$EmployeeData->F_Name}}</td>
                     <td>{{$EmployeeData->L_Name}}</td>
                     <td>{{$EmployeeData->gender}}</td>
                    
                      <td>{{$EmployeeData->skills}}</td>

                  

                     <td>{{$EmployeeData->Start_Date}}</td>
                     <td>{{$EmployeeData->created_on}}</td>
                     <td>{{$EmployeeData->updated_on}}</td>
                     <td>{{$EmployeeData->created_at}}</td>
                     <td>{{$EmployeeData->updated_at}}</td>
                     <td><a href="{{url('Employeeditdata/'.$EmployeeData->id)}}"class="btn btn-info  btn3"  id="edit">Edit</a>
                              <a href="{{url('delete/'.$EmployeeData->id)}}" class="btn btn-danger btn2"  id="delete">Delete</a></td> 
                    </td>
                  </tr>
                  @endforeach
               </tbody>
              </table>
        </div>

     </form>
 </body>
</html>