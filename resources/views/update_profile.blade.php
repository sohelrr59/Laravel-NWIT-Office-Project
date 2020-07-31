@extends('master')

@section('content')

<div class="container">
    
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card border-primary rounded-0" style="margin-bottom:0px;margin-top:0px;width:968px;">
	            <div class="card-header p-0">
	                <div class="bg-info text-white text-center py-2">
	                    <h3><i class="fa fa-user"></i> Students Information Form</h3>
	                    <p class="m-0">Update Student Information</p>
	                    <i><b>Edit-Profile Page</b></i>
	                </div>
	            </div>
	        </div>
        	<form action="/update_profile/{{$admission->id}}" method="post" enctype="multipart/form-data">

        		{{csrf_field()}}
        		{{method_field('PUT')}}
        		<input type="hidden" id="id" name="id" value="{{$admission->id}}">
       			
       			<table width="100%" height="625px">
       				<tr>
       					<td>
       						
			            		<div class="card border-primary rounded-0" style="width:480px;height:625px;margin-top:0px;margin-bottom:0px;">
			                    <div class="card-header p-0">
			                        <div class="bg-info text-white text-center py-2">
			                            
			                        </div>
			                    </div>
			                    <div class="card-body p-3">

			                        <!--Body-->
			                        <div class="form-group">
			                            <div class="input-group mb-2">
			                                <div class="input-group-prepend">
			                                    <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
			                                </div>
			                                <input type="text" class="form-control" id="name" name="name" placeholder="Student Name" value="{{$admission->student_name}}" required>
			                            </div>
			                        </div>
			                        <div class="form-group">
			                            <div class="input-group mb-2">
			                                <div class="input-group-prepend">
			                                    <div class="input-group-text"><i class="fa fa-home text-info"></i></div>
			                                </div>
			                                <input type="text" class="form-control" id="address" name="address" placeholder="Student Address"  value="{{$admission->student_address}}">
			                            </div>
			                        </div>
			                        <div class="form-group">
			                            <div class="input-group mb-2">
			                                <div class="input-group-prepend">
			                                    <div class="input-group-text"><i class="fa fa-phone text-info"></i></div>
			                                </div>
			                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Student Phone No"  value="{{$admission->student_phone}}" required>
			                            </div>
			                        </div>
			                        <div class="form-group">
			                            <div class="input-group mb-2">
			                                <div class="input-group-prepend">
			                                    <div class="input-group-text"><i class="fa fa-phone text-info"></i></div>
			                                </div>
			                                <input type="text" class="form-control" id="home_phone" name="home_phone" placeholder="Home Phone No" value="{{$admission->home_phone}}" required>
			                            </div>
			                        </div>
			                        <div class="form-group">
			                            <div class="input-group mb-2">
			                                <div class="input-group-prepend">
			                                    <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
			                                </div>
			                                <input type="email" class="form-control" id="email" name="email" placeholder="Student Email"  value="{{$admission->email}}">
			                            </div>
			                        </div>
			                        <div class="form-group">
			                            <div class="input-group mb-2">
			                                <div class="input-group-prepend">
			                                    <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
			                                </div>
			                                <input type="text" class="form-control" id="ae_name" name="ae_name" placeholder="AE Name"  value="{{$admission->ae_name}}">
			                            </div>
			                        </div>
			                        <div class="form-group">
			                            <div class="input-group mb-2">
			                                <div class="input-group-prepend">
			                                    <div class="input-group-text"><i class="fa fa-book text-info"></i></div>
			                                </div>
			                                <input type="text" class="form-control" id="course_title" name="course_title" placeholder="Course Title" value="{{$admission->course_title}}" required>
			                            </div>
			                        </div>
			                        <div class="form-group">
			                            <div class="input-group mb-2">
			                                <div class="input-group-prepend">
			                                    <div class="input-group-text"><i class="fa fa-calendar text-info"></i></div>
			                                </div>
			                                <input type="text" class="form-control" id="duration" name="duration" placeholder="Course Duration" value="{{$admission->course_duration}}">
			                            </div>
			                        </div>
			                        <div class="form-group">
			                            <div class="input-group mb-2">
			                                <div class="input-group-prepend">
			                                    <div class="input-group-text"><i class="fa fa-calendar text-info"></i></div>
			                                </div>
			                                <input type="text" class="form-control" id="class_time" name="class_time" placeholder="Class Time"  value="{{$admission->class_time}}">
			                            </div>
			                        </div>

			                        
			                    </div>

			                </div>
			            	
       					</td>
       					<td>
       						
			            		<div class="card border-primary rounded-0" style="width:480px;height:625px;margin-top:0px;margin-bottom:0px;">
			                    <div class="card-header p-0">
			                        <div class="bg-info text-white text-center py-2">
			           
			                        </div>
			                    </div>
			                    <div class="card-body p-3">

			                        <!--Body-->
			                      
									<div class="form-group">
			                            <div class="input-group mb-2">
			                                <div class="input-group-prepend">
			                                    <div class="input-group-text"><i class="fa fa-calendar text-info">     Admit Date:   </i></div>
			                                </div>
			                                <input type="date" class="form-control" id="admit_date" name="admit_date" placeholder="Admit Date"  value="{{$admission->admit_date}}" required>
			                            </div>
			                        </div>
			                        <div class="form-group">
			                            <div class="input-group mb-2">
			                                <div class="input-group-prepend">
			                                    <div class="input-group-text"><i class="fa fa-calendar text-info"></i></div>
			                                </div>
			                                <input type="text" class="form-control" id="batch_no" name="batch_no" placeholder="Batch No" value="{{$admission->batch_no}}">
			                            </div>
			                        </div>
			                        <div class="form-group">
			                            <div class="input-group mb-2">
			                            	<div class="row">
			                            		<div class="col-md-6">
			                            			<div class="input-group-prepend">
			                                    <div class="input-group-text"><i class="fa fa-calendar text-info">  Class Day </i></div>
			                                </div>
			                            		</div>
			                            		<div class="col-md-6">
			                            			<label class="  active">
   <input  type="radio" name="class_day" value="SMW" checked=""   value="{{$admission->class_day}}">SMW </label>
   &nbsp;
   
   <label class="">
   <input type="radio" name="class_day" value="STT"  value="{{$admission->class_day}}">STT</label>
			                          		</div>
			                            	</div>
			                                
			                                
			                            </div>
			                        </div>

			                        <div class="form-group">
			                            <div class="input-group mb-2">
			                                <div class="input-group-prepend">
			                                    <div class="input-group-text"><i class="fa fa-money text-info"></i></div>
			                                </div>
			                                <input type="text" class="form-control" id="course_fee" name="course_fee" placeholder="Course Fee" value="{{$admission->course_fee}}" required>
			                            </div>
			                        </div>

			                        <div class="form-group">
			                            <div class="input-group mb-2">
			                                <div class="input-group-prepend">
			                                    <div class="input-group-text"><i class="fa fa-money text-info"></i></div>
			                                </div>
			                                <input type="text" class="form-control" id="discount" name="discount" placeholder="Discount" value="{{$admission->discount}}">
			                            </div>
			                        </div>


			                        <div class="form-group">
			                            <div class="input-group mb-2">
			                                <div class="input-group-prepend">
			                                    <div class="input-group-text"><i class="fa fa-money text-info"></i></div>
			                                </div>
			                                <input type="text" class="form-control" id="net_fee" name="net_fee" placeholder="Net Fee" value="{{$admission->net_fee}}" required>
			                            </div>
			                        </div>


			                        <div class="form-group">
			                            <div class="input-group mb-2">
			                                <div class="input-group-prepend">
			                                    <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
			                                </div>
			                                <input type="text" class="form-control" id="student_id" name="student_id" placeholder="Student ID" value="{{$admission->student_id}}" required>
			                            </div>
			                        </div>


			                        <div class="image">
			                            <div class="input-group mb-2">
			                                <div class="input-group-prepend">
			                                    <div class="input-group-text"><i class="fa fa-user text-info">Upload Student Picture:</i></div> 
			                                </div>

			                                <label class=" btn btn-info file-upload text-white">
									      <input type="file" name="student_picture" onchange="readURL(this);" 
									      value="{{$admission->student_picture}}" />
									      <img id="blah" src="#" alt="your image" />
									    </label>
			                            </div>
			                        </div>
				
			               			
			                    </div>

			                </div>
			            	
       					</td>
       				</tr>
				
       			</table>
          		
            	<div class="text-center">
                    <input type="submit" value="Submit" class="btn btn-info btn-block rounded-0 py-2">
                </div>
        	</form>
  
        </div>

	</div>
</div>


@endsection