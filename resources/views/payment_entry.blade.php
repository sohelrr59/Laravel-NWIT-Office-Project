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
	                    <i><b>Payment-Entry Page</b></i>
	                </div>
	            </div>
	        </div>
        	<form action="{{route('payment_post')}}" method="post" enctype="multipart/form-data">
        		{{csrf_field()}}
       			<table width="100%" height="300px">
       				
       				<tr>
       					<td>
       						
		            		<div class="card border-primary rounded-0" style="width:480px;height:300px;margin-top:0px;margin-bottom:0px;">
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
		                                <p><b>Student Name: </b><i>{{$admission->student_name}}</i></p>
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
		                                <p><b>Batch No: </b><i>{{$admission->batch_no}}</i></p>
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
   					<td>
   						
		            		<div class="card border-primary rounded-0" style="width:480px;height:300px;margin-top:0px;margin-bottom:0px;">
		                    <div class="card-header p-0">
		                        <div class="bg-info text-white text-center py-2">
		           
		                        </div>
		                    </div>
		                    <div class="card-body p-3">

		                        <!--Body-->

		                        <div class="form-group">
			                            <div class="input-group mb-2">
			                                <div class="input-group-prepend">
			                                    <div class="input-group-text"><i class="fa fa-user text-info">  Admission ID:</i></div>
			                                </div>
			                                <input type="text" class="form-control" id="admission_id" name="admission_id" value="{{$admission->id}}" required>
			                            </div>
			                        </div>
		        
		                        <div class="form-group">
			                            <div class="input-group mb-2">
			                                <div class="input-group-prepend">
			                                    <div class="input-group-text"><i class="fa fa-phone text-info">  Student Phone:</i></div>
			                                </div>
			                                <input type="text" class="form-control" id="phone" name="phone" value="{{$admission->student_phone}}" required>
			                            </div>
			                        </div>
		                        
								<div class="form-group">
		                            <div class="input-group mb-2">
		                                <div class="input-group-prepend">
		                                    <div class="input-group-text"><i class="fa fa-calendar text-info">  Payment Date:</i></div>
		                                </div>
		                                <input type="date" class="form-control" id="payment_date" name="payment_date" placeholder="Payment Date" required>
		                            </div>
		                        </div>	
		                        
								<div class="form-group">
		                            <div class="input-group mb-2">
		                                <div class="input-group-prepend">
		                                    <div class="input-group-text"><i class="fa fa-calendar text-info">  Payment</i></div>
		                                </div>
		                                <input type="text" class="form-control" id="payment_entry" name="payment_entry" placeholder="Payment Entry" required>
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