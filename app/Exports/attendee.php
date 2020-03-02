<?php

namespace App\Exports;

use App\attendees;
use Maatwebsite\Excel\Concerns\FromCollection;

class attendee implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return attendees::all();
    }
}
