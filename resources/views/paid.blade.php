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
                      <i><b>Paid-View Page</b></i>
                  </div>
              </div>
          </div>
          
          
          
            <table class="table table-hover text-center">
              
              <tr>
                <th>Student_ID</th>
                <th>Student Name</th>
                <th>Phone NO</th>
                <th>Course Name</th>
                <th>Net Fee</th>
                
              </tr>
            
              <tr>
                <td>{{$admission->student_id}}</td>
                <td>{{$admission->student_name}}</td>
                <td>{{$admission->student_phone}}</td>
                <td>{{$admission->course_title}}</td>
                <td>{{$admission->net_fee}}</td>
              </tr>

          </table>
    
            <table class="table table-hover text-center">
              
              <tr>
                <th>Payment Date</th>
                <th>Payment Amount(Tk.)</th>
                <th>Edit</th>
                <th>Delete</th>
                
              </tr>
            
             @foreach($admission->payments as $payment)
              <tr>
                <td>{{$payment->payment_date}}</td>
                <td>{{$payment->payment}}</td>
                <td><a href="/editpaid/{{$payment->id}}" class="btn btn-info">Edit</a></td>
                <td><a href="/deletepaid/{{$payment->id}}" class="btn btn-danger">Delete</a></td>
              </tr>
              @endforeach
           
          </table>
          
          <div class="text-center">
            <p class="bg-primary rounded-0  p-3 text-white">North Western IT Village An IT For Creative Learning</p>
          </div>
  

      </div>

  </div>
</div>


@endsection