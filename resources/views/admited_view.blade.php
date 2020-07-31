@extends('master')

@section('content')

<div class="container">
    
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card border-primary rounded-0" style="margin-bottom:0px;margin-top:0px;width:968px;">
              <div class="card-header p-0">
                  <div class="bg-info text-white text-center py-2">
                      <h3><i class="fa fa-user"></i>North Western IT Village</h3>
                      <p class="m-0">House # 24, Begum Rokeya Sarany, Hatem Khan, Rajshahi-6000.</p>
                      <i><b>Data-View Page</b></i>
                  </div>
              </div>
          </div>
           <div class="container mt-2">
             <div class="col-md-11">
                <form action="/admited_view_search" method="get">
                  <div class="input-group">
                    <input type="text" name="search" class="form-control" style="margin-top: 6px;
border: 1px solid #bbb;
padding: 19px;">
                    <span class="input-group-prepend">
                      <button type="submit" class="btn btn-info">Search</button>
                    </span>
                  </div>
                </form>
              </div>
           </div>   
            <hr>  
            <table class="table table-hover text-center">
            <thead>
              <tr>
                <th>Student_ID</th>
                <th>Name</th>
                <th>Course</th>
                <th>Batch</th>
                <th>Phone NO</th>
                <th>View</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
              @foreach($admission as $item)
              <tr>
                
                <td>{{$item->student_id}}</td>
                <td>{{$item->student_name}}</td>
                <td>{{$item->course_title}}</td>
                <td>{{$item->batch_no}}</td>
                <td>{{$item->student_phone}}</td>

                <td><a href="/student_profile/{{$item->id}}" class="btn btn-success">View</a></td>
                <td><a href="/editform/{{$item->id}}" class="btn btn-info">Edit</a></td>
                <td><a href="/delete_data/{{$item->id}}" class="btn btn-danger">Delete</a></td>
              </tr>
              

              @endforeach
            </tbody>
          </table>

          <!--Below laravel code syntax for show pagination-->
          
            {!! $admission->links(); !!}
          
          
          <div class="text-center">
            <p class="bg-primary rounded-0  p-3 text-white">North Western IT Village An IT For Creative Learning</p>
          </div>
  

      </div>

  </div>
</div>


@endsection