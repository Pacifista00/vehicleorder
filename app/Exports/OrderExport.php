<?php

namespace App\Exports;

use App\Models\Order;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMapping;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Maatwebsite\Excel\Concerns\WithHeadings;

class OrderExport implements FromQuery, WithMapping, WithHeadings
{
    use Exportable;

    public function query()
    {
        return Order::query()->where('status_id',4);
    }
    public function map($order): array
    {
        return [
            $order->driver,
            $order->region->name,
            $order->vehicle->name,
            $order->bbm,
            date_format($order->created_at,"Y/F/d H:i:s"),
            date_format($order->updated_at,"Y/F/d H:i:s"),
        ];
    }
    public function headings(): array
    {
        return [
            'Driver',
            'Daerah',
            'Jenis Kendaraan',
            'BBM digunakan /liter',
            'Waktu Pengajuan',
            'Waktu Selesai',
        ];
    }
}