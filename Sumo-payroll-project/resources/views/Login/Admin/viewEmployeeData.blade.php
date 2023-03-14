<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      
            <title>Laravel</title>
      <link href="{{url('css/tables.css')}}" rel="stylesheet">
   </head>
   <body>
      <div style="">
         @include('Login.Admin.Admin')
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
                  @foreach($viewEmployeeData as $employeeData)
                  <tr>
                     <td>{{$employeeData->id}}</td>
                     <td>{{$employeeData->emp_id}}</td>
                     <td>{{$employeeData->f_name}}</td>
                     <td>{{$employeeData->l_name}}</td>
                     <td>{{$employeeData->gender}}</td>
                     <td>{{$employeeData->skills}}</td>
                     <td>{{$employeeData->start_date}}</td>
                     <td>{{$employeeData->created_by}}</td>
                     <td>{{$employeeData->updated_by}}</td>
                     <td>{{$employeeData->created_at}}</td>
                     <td>{{$employeeData->updated_at}}</td>
                     <td><a href="{{url('employeEditData/'.$employeeData->id)}}"class="btn btn-info  btn3"  id="edit">Edit</a>
                        <a href="{{url('delete/'.$employeeData->id)}}" class="btn btn-danger btn2"  id="delete">Delete</a>
                     </td>
                     </td>
                  </tr>
                  @endforeach
               </tbody>
            </table>
            <!-- <nav aria-label="Page navigation example">
               <ul class="pagination">
                 <li class="page-item">
                   <a class="page-link" href="#" aria-label="Previous">
                     <span aria-hidden="true">&laquo;</span>
                     <span class="sr-only">Previous</span>
                   </a>
                 </li>
                 <li class="page-item"><a class="page-link" href="#">1</a></li>
                 <li class="page-item"><a class="page-link" href="#">2</a></li>
                 <li class="page-item"><a class="page-link" href="#">3</a></li>
                 <li class="page-item">
                   <a class="page-link" href="#" aria-label="Next">
                     <span aria-hidden="true">&raquo;</span>
                     <span class="sr-only">Next</span>
                   </a>
                 </li>
               </ul>
               </nav> -->
            <div class="d-flex justify-content-center">
               {!! $viewEmployeeData->links() !!}
            </div>
         </div>
      </form>
   </body>
</html>