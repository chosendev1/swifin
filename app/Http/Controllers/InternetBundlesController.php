<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreInternetRequest;
use App\Models\Internet\InternetBundles;

use Illuminate\Http\Request;

class InternetBundlesController extends Controller
{
    public function create()
    {
        return view('internet.buy_internet_form');
    }

    public function bulk()
    {
        return view('airtime.bulk_internet_form');
    }

    public function store(StoreInternetRequest $request)
    {
        $airtime = new InternetBundles($request->except('pin'));
        if(!$airtime->save()){
            session()->flash('message','Transaction Failed');
            return redirect()->back();
        }
        session()->flash('message','Transaction Successful');
        return redirect('/buy/internet');
    }
}
