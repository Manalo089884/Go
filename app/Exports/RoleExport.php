<?php

namespace App\Exports;
use App\Models\Role;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;

class RoleExport implements FromCollection,WithHeadings,ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Role::all();
    }
    public function headings(): array
    {
        return [
            '#',
            'Name',
            'Created_at',
            'Updated_at',
        ];
    }
}
