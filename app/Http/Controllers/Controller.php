<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function insert(Request $reg){

    	$name = $reg->input('name');
    	$email = $reg->input('email');
    	$password = $reg->input('password');
    	$role = $reg->input('role');


    	$data = array('name'=>$name,'email'=>$email,'password'=>bcrypt('$password'),'role'=>$role);

    	DB::table('users')->insert($data);

    	echo "Success";
    }
}
