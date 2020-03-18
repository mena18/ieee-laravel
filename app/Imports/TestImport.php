<?php

namespace App\Imports;

use App\User;
use App\Certificates;
use App\Courses;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\OnEachRow;
use Maatwebsite\Excel\Row;

function random_string(){
  $digits = "0123456789";
  $str = "";
  for($i=0;$i<3;$i++){$str.= $digits[rand(0,9)];}
  $str.="-";
  for($i=0;$i<3;$i++){$str.= $digits[rand(0,9)];}
  return $str;
}


class Testimport implements OnEachRow
{
    /**
     * @param array $row
     *
     * @return User|null
     */
    public static $arr = array();
    public function onRow(Row $row)
    {
      $rowIndex = $row->getIndex();
      $row2      = $row->toArray();
      if($rowIndex==1){
        foreach ($row2 as $key => $value) {
          self::$arr[strtolower($value)] = $key;
        }
      }
      else{
        $course = Courses::where('name',$row2[self::$arr['course']])->where('open',1)->get()[0];
        $certificate = new Certificates();
        $certificate->name = $row2[self::$arr['name']];
        $cont=1;
        while($cont){
            $certificate->serial = $course->code.random_string();
            $cont = $certificate::where('serial',$certificate->serial)->count();
        }
        $certificate->course_id    = $course->id;
        $certificate->email = $row2[self::$arr['email']] ? $row2[self::$arr['email']] : "";
        $certificate->link         =  "";
        $certificate->attendance   = $course->hours;
        $save = $certificate->save();

      }

    }
}
