<?php

namespace App\Http\Controllers;

use App\Exports\GrupBarangExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class ExportController extends Controller
{
    public function exportData(Request $request)
    {
        $fileName = 'laporan_bulan_' . date('F') . '.xlsx'; // Perubahan ekstensi file ke .xlsx
        return Excel::download(new GrupBarangExport, $fileName);
    }
}
