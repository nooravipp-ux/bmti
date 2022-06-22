<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Maatwebsite\Excel\Concerns\WithLimit;
use Maatwebsite\Excel\Concerns\WithStartRow;

class EvaluasiImportTestimoni implements ToCollection, WithLimit, WithStartRow
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {
        // dd($collection);
        foreach ($collection as $row) {
            if (!empty($row[4])) {
                DB::table('t_testimoni')->insert([
                    'nama' => $row[4],
                    'asal_sekolah' => $row[5],
                    'nama_diklat' => $row[6],
                    'testimoni' => $row[7],
                    'created_by' => auth()->user()->name,
                    'updated_by' => auth()->user()->name
                ]);
            }
        }
    }

    public function limit(): int
    {
        return 50; // only take 100 rows
    }

    public function startRow(): int
    {
        return 6;
    }
}