<?php

namespace App\Exports;

use App\Models\GrupBarang;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class GrupBarangExport implements FromCollection, WithHeadings, WithMapping
{
    public function collection()
    {
        $currentMonth = date('m');
        $currentYear = date('Y');
        return GrupBarang::with('barangs')
            ->whereMonth('created_at', $currentMonth)
            ->whereYear('created_at', $currentYear)
            ->get();
    }

    public function headings(): array
    {
        $additionalColumns = ['Kode Barang', 'Nama Barang', 'Jumlah'];
        $headers = [
            'Kode Resi',
            'Nama Grup',
            'Total Barang',
            'Lokasi'
        ];
        $startColumn = 5;
        for ($i = 1; $i <= 3; $i++) {
            foreach ($additionalColumns as $header) {
                $headers[] = $header . ' ' . $i;
            }
        }
        return $headers;
    }

    public function map($grupBarang): array
    {
        $additionalColumns = ['Kode Barang', 'Nama Barang', 'Jumlah'];
        $data = [
            $grupBarang->kode_resi,
            $grupBarang->nama_grup,
            $grupBarang->barangs->count(),
            $grupBarang->kode_lokasi_asal
        ];

        foreach ($grupBarang->barangs as $barang) {
            $data[] = $barang->kode;
            $data[] = $barang->nama;
            $data[] = $barang->jumlah_barang;
        }
        return $data;
    }
}