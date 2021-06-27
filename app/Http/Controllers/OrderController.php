<?php

namespace App\Http\Controllers;

use App\Exports\OrderExport;
use App\Exports\OrderExportPaid;
use App\Order;
use Illuminate\Http\Request;
use Auth;
use App\Order_Product;
use PDF;

class OrderController extends Controller
{

    public function __construct()
    {
        $this->middleware('role:admin');
    }

    public function index()
    {
        $orders = Order::orderBy('date','desc')->get();
        return view('order.index', compact('orders'));
    }

    public function detail($id)
    {
        $details = Order_Product::where('order_id',$id)->get();
        $identity = Order_Product::where('order_id',$id)->first();
        return view('order.detail', compact('details', 'identity'));
    }
}
