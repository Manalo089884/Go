<?php

namespace App\Exports;

use App\Models\Supplier;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
class SupplierExport implements FromCollection, ShouldAutoSize,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Supplier::all();
    }

    public function headings(): array
    {
        return [
            '#',
            'Supplier Name',
            'Email',
            'Contact Number',
            'Address',
            'Created at',
            'Updated at'
        ];
    }
}
