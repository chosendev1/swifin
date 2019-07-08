<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreMobileMoneyTopupRequest;
use App\Models\MobileMoney\MobileMoneyDeposits;

class MobileMoneyDepositsController extends Controller
{
    
    public function create()
    {   
        return view('topup.mobile_money_topup_form');
    }

    public function store(StoreMobileMoneyTopupRequest $request)
    {   
        $deposit = new MobileMoneyDeposits($request->except('pin'));
                    
        if(!$deposit->save()){
           
            session()->flash('message','Transaction Failed');
            return redirect()->back();
        }
       
        session()->flash('message','Transaction Successful');
        return redirect('/mobile-money-topup');
    }
}
