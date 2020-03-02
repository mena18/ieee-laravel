<?php

namespace App\Exports;

use App\Team;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;

class VolunteerExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */

    use Exportable;


    public function collection()
    {

        $volunteers = Team::select('id','name','committee','facebook','linkedin')->get();

        $volunteers_array[] = array(
            'Id'  => 'id',
            'Name'  => 'Name',
            'Committee'  => 'Committee',
            'Facebook'  => 'Facebook',
            'Linkedin'  => 'Linkedin',
        );

        foreach($volunteers as $volunteer){
            $volunteers_array[] = array(
            'Id'  => $volunteer->id,
            'Name'  => $volunteer->name,
            'Committee'  => $volunteer->committee,
            'Facebook'  => $volunteer->facebook,
            'Linkedin'  => $volunteer->linkedin,
            );
        }

        return collect($volunteers_array);
    }
}
