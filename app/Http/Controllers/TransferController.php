<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransferController extends Controller
{

{
    return view('topup.swifin_topup_form');
}

public function mobileMoney()
{
    return view('transfer-funds.transfer_to_mobile_money_form');
}

}
