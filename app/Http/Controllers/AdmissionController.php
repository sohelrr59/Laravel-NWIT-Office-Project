<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admission;
use App\Payment;
use DB;

class AdmissionController extends Controller
{
	//this function is for show admission form

	public function admission_entry(){
		
		return view('admission_entry');
	}

	//this function is for post data into database

	public function admission_post(Request $request){

		$admission = new Admission();

		$admission->student_name = $request->input('name');
		$admission->student_address = $request->input('address');
		$admission->student_phone = $request->input('phone');
		$admission->home_phone = $request->input('home_phone');
		$admission->email = $request->input('email');
		$admission->ae_name = $request->input('ae_name');
		$admission->course_title = $request->input('course_title');
		$admission->course_duration = $request->input('duration');
		$admission->class_time = $request->input('class_time');
		$admission->admit_date = $request->input('admit_date');
		$admission->batch_no = $request->input('batch_no');
		$admission->class_day = $request->input('class_day');
		$admission->course_fee = $request->input('course_fee');
		$admission->discount = $request->input('discount');
		$admission->net_fee = $request->input('net_fee');
		$admission->student_id = $request->input('student_id');

		if($request->hasfile('student_picture')){

			$file = $request->file('student_picture');
			$extension = $file->getClientOriginalExtension();
			$filename = time().'.'.$extension;
			$file->move('uploads/images/',$filename);
			$admission->student_picture = $filename;
		}else{
			return $request;
			$admission->student_picture = '';

		}

		$admission->save();

		return view('admission_entry')->with('admission',$admission);
	}

	//this function is for show all admited  students in a page
	//Admission::All() replace with paginate() function for pagination

	public function admited_view(){

		$admission = Admission::paginate(3);

		return view('admited_view')->with('admission', $admission);
	}


	//this function is for show admited student full profile single

	public function profile($id){

		$admission = Admission::find($id);

		return view('student_profile')->with('admission', $admission);
	}

	//this function is for edit admited student profile single

	public function edit($id){

		$admission = Admission::find($id);

		return view('update_profile')->with('admission',$admission);
	}

//this function is for update admited student profile single

	public function update(Request $request, $id){

		$admission = Admission::find($id);

		$admission->student_name = $request->input('name');
		$admission->student_address = $request->input('address');
		$admission->student_phone = $request->input('phone');
		$admission->home_phone = $request->input('home_phone');
		$admission->email = $request->input('email');
		$admission->ae_name = $request->input('ae_name');
		$admission->course_title = $request->input('course_title');
		$admission->course_duration = $request->input('duration');
		$admission->class_time = $request->input('class_time');
		$admission->admit_date = $request->input('admit_date');
		$admission->batch_no = $request->input('batch_no');
		$admission->class_day = $request->input('class_day');
		$admission->course_fee = $request->input('course_fee');
		$admission->discount = $request->input('discount');
		$admission->net_fee = $request->input('net_fee');
		$admission->student_id = $request->input('student_id');

		if($request->hasfile('student_picture')){

			$file = $request->file('student_picture');
			$extension = $file->getClientOriginalExtension();
			$filename = time().'.'.$extension;
			$file->move('uploads/images/',$filename);
			$admission->student_picture = $filename;
		}

		$admission->save();

		return redirect('/admited_view')->with('admission',$admission);
	}

//this function is for delete admited student 

	public function delete($id){
		$admission = Admission::find($id);

		$admission->delete();

		return redirect('/admited_view')->with('admission',$admission);
	}

//this function is for show add payment page of all students 

	public function add_payment(){

		$admission = Admission::paginate(3);

		return view('add_payment')->with('admission',$admission);
	}

    //this function is for add payment of a single student

    public function payment_entry($id){

    	$admission = Admission::find($id);

    	return view('payment_entry')->with('admission',$admission);
    }

    //this function is for post payment data of a single student

   
    public function payment_post(Request $request){

    	$payment = new Payment();

    	$payment->admission_id = $request->input('admission_id');
    	$payment->student_phone = $request->input('phone');
    	$payment->payment_date = $request->input('payment_date');
    	$payment->payment = $request->input('payment_entry');

    	$payment->save();

    	return redirect('add_payment');

    }

      //this function is for paid view of all  students

    public function paid_view(){
    	$admission = Admission::paginate(3);

		return view('paid_view')->with('admission',$admission);
    }
      
      //this function is for paid students single paid view


    public function paid($id){

		$admission = Admission::find($id);

		return view('paid',compact('admission'));
	}

//this function is for edit-paid students single paid 

	public function editpaid($id){

		$payment = Payment::find($id);

			return view('editpaid')->with('payment',$payment);
	}



	//this function is for update-paid students single paid 


	public function updatepaid(Request $request, $id){


		$payment = Payment::find($id);

		$payment->admission_id = $request->input('admission_id');
		$payment->student_phone = $request->input('phone');
		$payment->payment_date = $request->input('payment_date');
		$payment->payment = $request->input('payment_entry');

		$payment->save();

		return redirect('/paid_view');

	}



		//this function is for delete-paid students single paid 

		public function deletepaid($id){

			$payment = Payment::find($id); 

			$payment->delete();

			return redirect('/paid_view');

		}

		//this function is for admitted student view search bar

		public function admited_view_search(Request $request){

			$search = $request->get('search');

			$admission = DB::table('admission')->where('student_name', 'like', '%'.$search.'%')->orwhere('student_phone', 'like','%'.$search.'%')->paginate(5);
			return view('admited_view', ['admission' => $admission]);
		}


		//this function is for add payment view search bar 

		public function add_payment_search(Request $request){

			$search = $request->get('search');

			$admission = DB::table('admission')->where('student_name', 'like', '%'.$search.'%')->orwhere('student_phone', 'like','%'.$search.'%')->paginate(5);
			return view('add_payment', ['admission' => $admission]);
		}


		//this function is for paid view search bar 

		public function paid_view_search(Request $request){

			$search = $request->get('search');

			$admission = DB::table('admission')->where('student_name', 'like', '%'.$search.'%')->orwhere('student_phone', 'like','%'.$search.'%')->paginate(5);
			return view('paid_view', ['admission' => $admission]);
		}



}
