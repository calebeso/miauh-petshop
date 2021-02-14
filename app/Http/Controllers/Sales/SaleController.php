<?php

namespace App\Http\Controllers\Sales;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Sale;

class SaleController extends Controller
{
    
    public function index()
    {
        $sales = Sale::all();
        return view('sales.index', compact('sales'));
    }

    
    public function createOrder()
    {
        return view('sales.create-order');
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
