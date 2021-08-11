<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Worker;

class SaleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function sale()
    {
        return view('sale.sale');
    }
}
