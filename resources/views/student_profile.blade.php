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
	                    <i><b>Student-Profile Page</b></i>
	                </div>
	            </div>
	        </div>
        	
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
		                                <div class="profile_text">
		                                <p><b>Student ID: </b><i>{{$admission->student_id}}</i></p>
		                               </div> 
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <div class="input-group mb-2">
		                                <div class="input-group-prepend">
		                                    <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
		                                </div>
		                                <div class="profile_text">
		                                <p><b>Student Name: </b><i>{{$admission->student_name}}</i></p>
		                               </div> 
		                            </div>	
		                        </div>
		                        <div class="form-group">
		                            <div class="input-group mb-2">
		                                <div class="input-group-prepend">
		                                    <div class="input-group-text"><i class="fa fa-home text-info"></i></div>
		                                </div>
		                                <div class="profile_text">
		                                <p><b>Student Address: </b><i>{{$admission->student_address}}</i></p>
		                               </div> 
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <div class="input-group mb-2">
		                                <div class="input-group-prepend">
		                                    <div class="input-group-text"><i class="fa fa-phone text-info"></i></div>
		                                </div>
		                                <div class="profile_text">
		                                <p><b>Student Phone: </b><i>{{$admission->student_phone}}</i></p>
		                               </div> 
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <div class="input-group mb-2">
		                                <div class="input-group-prepend">
		                                    <div class="input-group-text"><i class="fa fa-phone text-info"></i></div>
		                                </div>
		                                <div class="profile_text">
		                                <p><b>Home Phone: </b><i>{{$admission->home_phone}}</i></p>
		                               </div> 
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <div class="input-group mb-2">
		                                <div class="input-group-prepend">
		                                    <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
		                                </div>
		                                <div class="profile_text">
		                                <p><b>Student Email: </b><i>{{$admission->email}}</i></p>
		                               </div> 
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <div class="input-group mb-2">
		                                <div class="input-group-prepend">
		                                    <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
		                                </div>
		                                <div class="profile_text">
		                                <p><b>AE Name: </b><i>{{$admission->ae_name}}</i></p>
		                               </div> 
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <div class="input-group mb-2">
		                                <div class="input-group-prepend">
		                                    <div class="input-group-text"><i class="fa fa-book text-info"></i></div>
		                                </div>
		                                <div class="profile_text">
		                                <p><b>Course Title: </b><i>{{$admission->course_title}}</i></p>
		                               </div> 
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <div class="input-group mb-2">
		                                <div class="input-group-prepend">
		                                    <div class="input-group-text"><i class="fa fa-calendar text-info"></i></div>
		                                </div>
		                                <div class="profile_text">
		                                <p><b>Course Duration: </b><i>{{$admission->course_duration}}</i></p>
		                               </div> 
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
								<div class="image">
		                            <div class="input-group mb-2">
		                                <div class="input-group-prepend">
		                                    <div class="input-group-text"><i class="fa fa-user text-info"></i></div> 
		                                </div>

		                                <div class="profile_text">
		                                <p><b>Student Picture: </b><img src="{{asset('uploads/images/'.$admission->student_picture)
		                                	}}" alt="Student Photo" width="100px" height="100px"></p>
		                               </div> 
		                            </div>
		                        </div>
			
		                        <div class="form-group">
		                            <div class="input-group mb-2">
		                                <div class="input-group-prepend">
		                                    <div class="input-group-text"><i class="fa fa-calendar text-info"></i></div>
		                                </div>
		                                <div class="profile_text">
		                                <p><b>Class Time: </b><i>{{$admission->class_time}}</i></p>
		                               </div> 
		                            </div>
		                        </div>

		                      	
								<div class="form-group">
		                            <div class="input-group mb-2">
		                                <div class="input-group-prepend">
		                                    <div class="input-group-text"><i class="fa fa-calendar text-info">        </i></div>
		                                </div>
		                                <div class="profile_text">
		                                <p><b>Admit Date: </b><i>{{$admission->admit_date}}</i></p>
		                               </div> 
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <div class="input-group mb-2">
		                                <div class="input-group-prepend">
		                                    <div class="input-group-text"><i class="fa fa-calendar text-info"></i></div>
		                                </div>
		                                <div class="profile_text">
		                                <p><b>Batch No: </b><i>{{$admission->batch_no}}</i></p>
		                               </div> 
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <div class="input-group mb-2">
		                            	
		                            		
		                            	<div class="input-group-prepend">
		                                    <div class="input-group-text"><i class="fa fa-calendar text-info"></i>
		                                 </div>
		                            	</div>
		                            	<div class="profile_text">
		                                <p><b>Class Day: </b><i>{{$admission->class_day}}</i></p>
		                               </div> 	
		                            	
		                                
		                                
		                            </div>
		                        </div>

		                        <div class="form-group">
		                            <div class="input-group mb-2">
		                                <div class="input-group-prepend">
		                                    <div class="input-group-text"><i class="fa fa-money text-info"></i></div>
		                                </div>
		                                <div class="profile_text">
		                                <p><b>Course Fee: </b><i>{{$admission->course_fee}}</i></p>
		                               </div> 
		                            </div>
		                        </div>

		                        <div class="form-group">
		                            <div class="input-group mb-2">
		                                <div class="input-group-prepend">
		                                    <div class="input-group-text"><i class="fa fa-money text-info"></i></div>
		                                </div>
		                                <div class="profile_text">
		                                <p><b>Discount: </b><i>{{$admission->discount}}</i></p>
		                               </div> 
		                            </div>
		                        </div>


		                        <div class="form-group">
		                            <div class="input-group mb-2">
		                                <div class="input-group-prepend">
		                                    <div class="input-group-text"><i class="fa fa-money text-info"></i></div>
		                                </div>
		                                <div class="profile_text">
		                                <p><b>Net Fee: </b><i>{{$admission->net_fee}}</i></p>
		                               </div> 
		                            </div>
		                        </div>

		                        
		               			
		                    </div>

		                </div>
		            	
   					</td>
   				</tr>
			
   			</table>
      		
        	<div class="text-center">
                <p class="bg-primary rounded-0  p-3 text-white">North Western IT Village An IT For Creative Learning</p>
            </div>
        	
  
        </div>

	</div>
</div>


@endsection