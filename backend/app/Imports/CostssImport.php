<?php

namespace App\Imports;

use App\Models\Costs;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class CostssImport implements ToModel, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    
           /**
     * @return int
     */
    public function startRow(): int
    {
        return 2;
    }


    public function model(array $row)
    {

        // return new Costs([
        // 'fixed_costs' => $row[0],
        // 'variable_costs' => $row[1],
        // 'furniture_costs' => $row[2],
        // 'equipment_costs' => $row[3],
        // 'rental_payment' => $row[4],
        // 'capital' => $row[5]
        // ]);

        $student = app('firebase.firestore')->database()->collection('Dataset')->newDocument();
          $student->set([
           'fixed_costs' => $row[0],
           'variable_costs' => $row[1],
           'furniture_costs' =>  $row[2],
           'equipment_costs'=> $row[3],
           'rental_payment' => $row[4],
           'capital' => $row[5]
       ]);

       return;

    }
}
