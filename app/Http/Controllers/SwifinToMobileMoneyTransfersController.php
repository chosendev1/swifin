<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreSwifinToMobileMoneyTransferRequest;
use App\Models\SwifinToMobileMoneyTranfer\SwifinToMobileMoneyTransfers;

class SwifinToMobileMoneyTransfersController extends Controller
{	

	public function create()
    {   
        return view('transfer-funds.transfer_to_mobile_money_form');
    }

    public function store(StoreSwifinToMobileMoneyTransferRequest $request)
    {   
        $deposit = new SwifinToMobileMoneyTransfers($request->except('pin'));
                    
        if(!$deposit->save()){
           
            session()->flash('message','Transaction Failed');
            return redirect()->back();
        }
       
        session()->flash('message','Transaction Successful');
        return redirect('/swifin-to-mobile-money-transfer');
    }
}
