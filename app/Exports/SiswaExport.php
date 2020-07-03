<?php

namespace App\Exports;

use App\Member;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SiswaExport implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Member::all();
    }

    public function map($invoice): array
    {
        return [
            $invoice->nama_lengkap(),
            $invoice->jenis_kelamin,
            $invoice->tanggalLahir,
            $invoice->alamat,
            $invoice->instansi,
            $invoice->email,
            $invoice->instagram,
            $invoice->noHandphone,
        ];
    }

    public function headings(): array{
        return [
            'NAMA LENGKAP',
            'JENIS KELAMIN',
            'TANGGAL LAHIR',
            'ALAMAT',
            'INSTANSI',
            'EMAIL',
            'INSTAGRAM',
            'NO HANDPHONE'
        ];
    }
}
