<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreAirtimeRequest;
use App\Http\Requests\StoreBulkAirtimeRequest;
use App\Models\Airtime\AirtimeBundles;
use Excel;
//use Input;

class AirtimeBundlesController extends Controller
{
    public function create()
    {
        return view('airtime.buy_airtime_form');
    }

    public function bulk()
    {
        return view('airtime.bulk_airtime_form');
    }

    public function store(StoreAirtimeRequest $request)
    {
        $airtime = new AirtimeBundles($request->except('pin'));
         
        if(!$airtime->save()){
           
            session()->flash('message','Transaction Failed');
            return redirect()->back();
        }
       
        session()->flash('message','Transaction Successful');
        return redirect('/buy/airtime');
    }

    public function storeBulk(StoreBulkAirtimeRequest $request)
    {   
        //dd($request->file('airtime_file'));
        //dd($request->airtime_file);
        /*dd($request->airtime_file->store('images'));*/
        //$airtime = new AirtimeBundles($request->except('pin'));
        if($request->hasFile('airtime_file')){
            $path = $request->file('airtime_file')->getRealPath();
            $data = Excel::load($path, function($reader) {
            })->get();

                if(!empty($data) && $data->count())
          {
            $data = $data->toArray();
            for($i=0;$i<count($data);$i++)
            {
              $airtime = new AirtimeBundles($data[$i]);

                if(!$airtime->save()){
                   
                    session()->flash('message','Transaction Failed');
                    return redirect()->back();
                }
              //$dataImported[] = $data[$i];
            }
            session()->flash('message','Transaction Successful');
            return redirect('/buy/airtime/bulk');
          }
         //return back();
          //AirtimeBundles::insert($dataImported);
        }
            //return back();
         
      /*  
        */
    }
}
