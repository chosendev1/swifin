<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreWaterBillsRequest;
use App\Models\Bills\WaterBills;

class WaterBillsController extends Controller
{
    public function create()
    {
        return view('pay-bills.water_bills_form');
    }

    public function store(StoreWaterBillsRequest $request)
    {
        $bill = new WaterBills($request->except('pin'));
                    
        if(!$bill->save()){
           
            session()->flash('message','Transaction Failed');
            return redirect()->back();
        }
       
        session()->flash('message','Transaction Successful');
        return redirect('/paybills/water');
    }
}
