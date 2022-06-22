<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\EvaluasiImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\EvaluasiImportTestimoni;

class ImportDataEvaluasiController extends Controller
{
    public function importExcel(Request $request){
        // dd($request->all());
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);

        $file = $request->file('file');

        $nama_file = rand().$file->getClientOriginalName();

        $file->move('file_import',$nama_file);
        Excel::import(new EvaluasiImport, public_path('/file_import/'.$nama_file));

        return redirect('/evaluator/master-list-data');
    }
    public function importExcelTestimoni(Request $request){
        // dd($request->all());
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);

        $file = $request->file('file');

        $nama_file = rand().$file->getClientOriginalName();

        $file->move('file_import',$nama_file);
        Excel::import(new EvaluasiImportTestimoni, public_path('/file_import/'.$nama_file));

        return redirect('/evaluator/testimoni');
    }
}
