<?php

namespace App\Imports;

use App\Models\Agent;
use Maatwebsite\Excel\Concerns\ToModel;

class BulkImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Agent([
            'id_passport_no' => $row[0],
            'full_name' => $row[1],
            'biz_name' => $row[2],
            'dob' => $row[3],
            'join_date' => $row[4],
            'role' => $row[5],
            'title' => $row[6],
            'scheme' => $row[7],
            'nationality' => $row[8],
           
            
        ]);
    }
}
