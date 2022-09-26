<?php

namespace App\Exports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
class ProductExport implements FromCollection, ShouldAutoSize,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Product::all();
    }
    public function headings(): array
    {
        return [
            '#',
            'Product Name',
            'Category id',
            'Brand id',
            'Inventory Stock',
            'SKU',
            'Cost Price',
            'Selling Price',
            'Weight',
            'Status',
            'Description',
            'Created At',
            'Updated At',
        ];
    }
}
