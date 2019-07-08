<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreTVSubscriptionRequest;
use App\Models\Bills\TvSubscriptions;

class TvSubscriptionsController extends Controller
{
    
    public function payDstv()
    {
        return view('pay-bills.dstv_pay_form');
    }

    public function storePayDstv(StoreTVSubscriptionRequest $request)
    {
        $bill = new TVSubscriptions($request->except('pin'));
                    
        if(!$bill->save()){
           
            session()->flash('message','Transaction Failed');
            return redirect()->back();
        }
       
        session()->flash('message','Transaction Successful');
        return redirect('/paybills/dstv');
    }

    public function payGotv()
    {
        return view('pay-bills.gotv_pay_form');
    }

    public function storePayGotv(StoreTVSubscriptionRequest $request)
    {
        $bill = new TVSubscriptions($request->except('pin'));
                    
        if(!$bill->save()){
           
            session()->flash('message','Transaction Failed');
            return redirect()->back();
        }
       
        session()->flash('message','Transaction Successful');
        return redirect('/paybills/gotv');
    }

    public function payStartimes()
    {
        return view('pay-bills.startimes_pay_form');
    }


    public function storePayStartimes(StoreTVSubscriptionRequest $request)
    {
        $bill = new TVSubscriptions($request->except('pin'));
                    
        if(!$bill->save()){
           
            session()->flash('message','Transaction Failed');
            return redirect()->back();
        }
       
        session()->flash('message','Transaction Successful');
        return redirect('/paybills/startimes');
    }

    public function payZukutv()
    {
        return view('pay-bills.zukutv_pay_form');
    }

    public function storePayZukutv(StoreTVSubscriptionRequest $request)
    {
        $bill = new TVSubscriptions($request->except('pin'));
                    
        if(!$bill->save()){
           
            session()->flash('message','Transaction Failed');
            return redirect()->back();
        }
       
        session()->flash('message','Transaction Successful');
        return redirect('/paybills/zukutv');
    }
}
