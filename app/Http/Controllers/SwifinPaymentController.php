<?php

namespace App\Http\Controllers;

use App\Models\Payments\SwifinPayment;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSwifinPaymentRequest;
use App\Http\Requests\StoreBulkSwifinPaymentRequest;
use App\Models\SwifinApi\Swifin;
use Excel;

class SwifinPaymentController extends Controller
{
   /* private 
    $swifin = new Swifin;*/


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function create()
    {
        return view('send-money.send_swifin_money_form');
    }

    public function confirmTransaction(StoreSWifinPaymentRequest $request)
    {   
        $login = session('login-details');
        /*$swifin = new Swifin;
        $data =json_encode(array(*/
            // 'amount' => $request->amount,
            // 'description' => $request->description,
            // 'type' =>'ugxAccount.ugxPayment',
            // 'subject' => 'mobilePhone:'.$request->phone_number
        // ));
        $swifin = new Swifin;
        $user = json_decode($swifin->ConfirmUser($request->phone_number));

        $amount = $request->amount;
        $description = $request->description;
        $name =  $user->Details->toAccount->user->display;
        $phone_number = $request->phone_number;

            return view('send-money.send_swifin_money_confirm_form',compact('amount','description','phone_number','name'));
        /*$payment_data = $swifin->MakeSwifinPayment($data,$login);
        $payment = json_decode($payment_data);

        if($payment->Code===201){
        $user_balance = json_decode($swifin->CheckBalance('ugxAccount', $login));
        $balance = number_format($user_balance->Details->status->balance,'2','.',',');
        session(['account_balance' => $balance, 'message' => 'Money Sent']);
        return redirect()->back();
        }
        else
            {
            session()->flash('message','Money NOT Sent');
          */  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function creatett()
    {   
        $swifin = new Swifin;
        $confrim_transaction = $swifin->TransactionDetails('UGX000007872790P');
        //$user_balance = $swifin_balance->CheckBalance('ugxAccount','+256701067454:2345');
        //$user = $swifin->ConfirmUser('+256700905408');
        $data =json_encode([
            'amount' => 1,
            'description' => 'payment test',
            'type' =>'ugxAccount.ugxPayment',
            'subject' => 'mobilePhone:+256700905408'
        ]);
        /*$payment =json_decode($swifin->MakeSwifinPayment($data));
        dd($payment->Details->amount);*/
        $payment =json_decode($swifin->MakeSwifinPayment($data));
        dd($payment->Details->fromUser->display);
        return view('send-money.send_swifin_money_form',compact('user_balance'));
    }

     public function bulk()
    {
        return view('send-money.batch_processing_form');
    }

   /* public function sendMoney(StoreSendMoneysRequest $request)
    {
    
    }*/

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSWifinPaymentRequest $request)
    {   
        $login = session('login-details');
        $swifin = new Swifin;
        $data =json_encode(array(
            'amount' => $request->amount,
            'description' => $request->description,
            'type' =>'ugxAccount.ugxPayment',
            'subject' => 'mobilePhone:'.$request->phone_number
        ));
        $payment_data = $swifin->MakeSwifinPayment($data,$login);
        $payment = json_decode($payment_data);

        if($payment->Code===201){
        $user_balance = json_decode($swifin->CheckBalance('ugxAccount', $login));
        $balance = number_format($user_balance->Details->status->balance,'2','.',',');
        session(['account_balance' => $balance, 'message' => 'Money Sent']);
        return redirect()->back();
        }
        else
            {
            session()->flash('message','Money NOT Sent');
            return redirect()->back();
        }
    }

   /* public function storeBulk(StoreSendMoneysRequest $request)
    {   
        $send_money = new SendMoneys($request->all());
                    
        if(!$send_money->save()){
           
            session()->flash('message','Money NOT Sent');
            return redirect()->back();
        }
       
        session()->flash('message','Money Sent');
        return redirect('/');
    }*/

    public function storeBulk(StoreBulkSwifinPaymentRequest $request)
    {   
        if($request->hasFile('send_money_file')){
            $path = $request->file('send_money_file')->getRealPath();
            $data = Excel::load($path, function($reader) {
            })->get();

            if(!empty($data) && $data->count())
            {
                $data = $data->toArray();
                for($i=0;$i<count($data);$i++)
                { 
                  $send_money = new SwifinPayment($data[$i]);
                    if(!$send_money->save()){
                        session()->flash('message','Transaction Failed');
                        return redirect()->back();
                    }
                }
                session()->flash('message','Transaction Successful');
                return redirect('/send-money/bulk');
          }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
