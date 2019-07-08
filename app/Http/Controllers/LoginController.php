<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SwifinApi\Swifin;

class LoginController extends Controller
{	

    public function index()
    {   
        return view('users.login');
    }

	public function login(Request $request)
	{

    $swifin = new Swifin;
    $user = json_decode($swifin->ConfirmUser($request->username));
    $slice = str_after($user->Details->toAccount->user->display, '(');
    $userId = str_before($slice, ')');
    $swifin->Logins($userId,$request->password);
    $login = $request->username.':'.$request->pin;
    $user_balance = json_decode($swifin->CheckBalance('ugxAccount', $login));
    $balance = number_format($user_balance->Details->status->balance,'2','.',',');
    $username = $user->Details->toAccount->user->display;

    session(['account_balance' => $balance, 'username' => $username, 'login-details' => $login]);

    return redirect('/send-money');
    //return view('send-money.send_swifin_money_form',compact('user_balance','username'));
	}

    public function logout()
    {
        //auth()->logout();
        return redirect('/login');
    }

}
