<?php

namespace App\Exports;

use App\Order;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class OrderExportPaid implements FromView
{
    use Exportable;

    public function view(): View
    {
        $orders = Order::select([
            \DB::raw('sum(total_price) as total'),
            \DB::raw('date'),
            \DB::raw('id')
        ])
            ->where('status','dibayar')
            ->groupBy('date')
            ->orderBy('date','desc')
            ->get();

        $totals = Order::
        selectRaw('sum(total_price) as total')->where('status', 'dibayar') 
        ->get();
        return view('report.AllExcel', compact('orders','totals'));
    }
}