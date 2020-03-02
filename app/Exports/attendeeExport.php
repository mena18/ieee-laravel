<?php

namespace App\Exports;

use App\Attendee;
use App\Registeration;
use App\Event;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class attendeeExport implements FromCollection,WithHeadingRow{
    /**
    * @return \Illuminate\Support\Collection
    */
    private $id;
    private $mega;
    public function __construct($id,$mega) {
        $this->id=$id;
        $this->mega=$mega;
    }

	use Exportable;

    public function collection(){

    	if($this->id==0){
        if($this->mega==0){
          $attendees = Attendee::all();

          $customer_array[] = array(
                 'Name'  => 'Name',
                 'Factuly'  => 'Factuly',
                 'Email'  => 'Email',
                 'Semester'  => 'Semester',
                 'Facebook'  => 'Facebook',
                 'mobile'  => 'mobile',
                 'membership Type'  => 'membership Type',
                 'Event'=>'Event',

            );
          foreach($attendees as $attendee){
                $customer_array[] = array(
                   'Name'  => $attendee->name,
                   'Factuly'  => $attendee->faculty,
                   'Email'  => $attendee->email,
                   'Semester'  => $attendee->semester,
                   'Facebook'  => $attendee->facebook_profile,
                   'mobile'  => $attendee->mobile,
                   'member ship'  => $attendee->membership_type,
                   'Event'=>$attendee->event['title'],

                );
            }
        }
    		
        else{
          $registration = Registeration::all();

          $customer_array[] = array(
                 'Name'  => 'Name',
                 'Email'  => 'Email',
                 'Mobile'  => 'Mobile',
                 'National ID'  => 'National ID',
                 'University'  => 'University',
                 'a_status'  => 'Status',
                 'IEEE Member'  => 'IEEE Member',
                 'Code'=>'Code',
                 'Date'=>'Date',
                 'Event'=>'Event',

            );
          foreach($registration as $regi){
                $customer_array[] = array(
                 'Name'  => $regi['name'],
                 'Email'  => $regi['email'],
                 'Mobile'  => $regi['mobile'],
                 'National ID'  => $regi['national_id'],
                 'University'  => $regi['university'],
                 'a_status'  => $regi['a_status'],
                 'IEEE Member'  => $regi['ieee_member'],
                 'Code'=>$regi['code'],
                 'Date'=>$regi['date'],
                 'Event'=>$regi->event['title'],

                );
            }
        }


    	}else{

        if($this->mega==0){
          $attendees = Attendee::where('event_id','=',$this->id)->get();
          $customer_array[] = array(
                 'Name'  => 'Name',
                 'Factuly'  => 'Factuly',
                 'Email'  => 'Email',
                 'Semester'  => 'Semester',
                 'Facebook'  => 'Facebook',
                 'mobile'  => 'mobile',
                 'membership Type'  => 'membership Type',
            );
          foreach($attendees as $attendee){
                $customer_array[] = array(
                   'Name'  => $attendee->name,
                   'Factuly'  => $attendee->faculty,
                   'Email'  => $attendee->email,
                   'Semester'  => $attendee->semester,
                   'Facebook'  => $attendee->facebook_profile,
                   'mobile'  => $attendee->mobile,
                   'member ship'  => $attendee->membership_type,
                );
            }
        }
        else{
          $registration = Registeration::where('event_id','=',$this->id)->get();

          $customer_array[] = array(
                 'Name'  => 'Name',
                 'Email'  => 'Email',
                 'Mobile'  => 'Mobile',
                 'National ID'  => 'National ID',
                 'University'  => 'University',
                 'a_status'  => 'Status',
                 'IEEE Member'  => 'IEEE Member',
                 'Code'=>'Code',
                 'Date'=>'Date',


            );
          foreach($registration as $regi){
                $customer_array[] = array(
                 'Name'  => $regi['name'],
                 'Email'  => $regi['email'],
                 'Mobile'  => $regi['mobile'],
                 'National ID'  => $regi['national_id'],
                 'University'  => $regi['university'],
                 'a_status'  => $regi['a_status'],
                 'IEEE Member'  => $regi['ieee_member'],
                 'Code'=>$regi['code'],
                 'Date'=>$regi['date'],

                );
            }
        }
        


    	}

        return collect($customer_array);
    }
}
