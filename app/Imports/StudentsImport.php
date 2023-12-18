<?php

namespace App\Imports;

use App\Models\Students;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class StudentsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        // dd($row);
        return new Students([
            'name' => $row['name'],
            'middle_name' => $row['middle_name'],
            'last_name' => $row['last_name'],
            'year_level' => $row['year_level'],
            'id_number' => $row['id_number'],
            'gender' => $row['gender'],
            'course' => $row['course'],
            'email' => $row['email'],
            'department_id' => $row['department_id'],
            'scholarship_id' => $row['scholarship_id'],
        ]);
    }
}
