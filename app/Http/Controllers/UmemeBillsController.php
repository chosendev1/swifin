<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUmemeBillsRequest;
use App\Models\Bills\UmemeBills;

class UmemeBillsController extends Controller
{
    public function umemeYaka()
    {
        return view('pay-bills.umeme_pay_yaka_form');
    }

    public function storeUmemeYaka(StoreUmemeBillsRequest $request)
    {
        $bill = new UmemeBills($request->except('pin'));
                    
        if(!$bill->save()){
           
            session()->flash('message','Transaction Failed');
            return redirect()->back();
        }
       
        session()->flash('message','Transaction Successful');
        return redirect('/paybills/umeme/yaka');
    }

    public function umemePostPaid()
    {
        return view('pay-bills.umeme_postpaid_form');
    }

    public function storeUmemePostPaid(StoreUmemeBillsRequest $request)
    {
        $bill = new UmemeBills($request->except('pin'));
                    
        if(!$bill->save()){
           
            session()->flash('message','Transaction Failed');
            return redirect()->back();
        }
       
        session()->flash('message','Transaction Successful');
        return redirect('/paybills/umeme/postpaid');
    }
}
