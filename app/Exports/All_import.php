<?php
namespace App\Exports;

use App\Certificates;
use Maatwebsite\Excel\Concerns\FromCollection;

class All_import implements FromCollection
{
    public function collection()
    {
        return Certificates::all();
    }
}
