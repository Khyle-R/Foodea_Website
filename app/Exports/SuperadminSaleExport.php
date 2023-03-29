<?php

namespace App\Exports;


use App\Models\superadmin_sales;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SuperadminSaleExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
      return collect(superadmin_sales::getAllSales());
    }
    public function headings():array{
        return[
            'superadmin_sales_id',
            'merchant_id',
            'name',
            'total',
            'revenue',
            'date'
        ];
    }
}