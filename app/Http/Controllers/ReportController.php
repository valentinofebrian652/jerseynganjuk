<?php

namespace App\Http\Controllers;

use App\Exports\OrderExport;
use App\Exports\OrderExportPaid;
use Auth;
use PDF;
use App\Order;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function report()
    {
        $orders = Order::select([
            \DB::raw('sum(total_price) as total'),
            \DB::raw('date')
        ])
            ->where('status','dibayar')
            ->groupBy('date')
            ->orderBy('date','asc')
            ->get();

        $totals = Order::
        selectRaw('sum(total_price) as total')->where('status', 'dibayar') 
        ->get();
        return view('report.index', compact('orders','totals'));
    }

    public function monthReport(Request $request)
    {
        if ($request->bulan == null) {
            return redirect('/report');
        } else {
            $orders = Order::select([
                \DB::raw('sum(total_price) as total'),
                \DB::raw('date')
            ])
                ->where('status','dibayar')
                ->whereMonth('date', '=', $request->bulan)
                ->groupBy('date')
                ->orderBy('date','desc')
                ->get();
    
            $totals = Order::
            selectRaw('sum(total_price) as total')
            ->where('status', 'dibayar')
            ->whereMonth('date', '=', $request->bulan)
            ->get();
            return view('report.index', compact('orders','totals'));
        }
    }

    public function exportPDF()
    {
        $orders = Order::select([
            \DB::raw('sum(total_price) as total'),
            \DB::raw('date')
        ])
            ->where('status','dibayar')
            ->groupBy('date')
            ->orderBy('date','asc')
            ->get();

        $totals = Order::
        selectRaw('sum(total_price) as total')->where('status', 'dibayar') 
        ->get();
        $pdf = PDF::loadView('report.AllPdf', compact('orders','totals'));
        return $pdf->stream('reports.pdf');
    }

    public function exportExcelPaid()
    {
        return (new OrderExportPaid())->download('reports.xlsx');
    }
}
