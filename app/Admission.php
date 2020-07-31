<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    protected $table = 'admission';
    protected $fillable = ['student_name','student_address','student_phone','home_phone','email','ae_name','course_title','course_duration','class_time','admit_date','batch_no','class_day','course_fee','discount','net_fee','student_id','student_picture'];

    
    public function payments(){

    	return $this->hasMany(payment::class);
    }
}
