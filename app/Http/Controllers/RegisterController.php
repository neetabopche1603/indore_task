<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function __index()
    {
        return view('index');
    }

    public function __dashboard()
    {
        if(Auth()->user()){
            $earning = wallet::where('user_id',Auth()->user()->id)->select('amount')->first();
            return view('dashboard',compact('earning'));
        }else{
            return redirect()->route('login');
        }
        
    }

    public function __store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'username' => 'required|email|unique:users,email',
                'password' => 'required|min:6|max:8'
            ],
            [
                'name.required' => 'Please Enter Your Name',
                'username.required' => 'Please Enter Your Email',
                'password.required' => 'Please Enter Your Password'
            ]
        );

        // echo "<pre>";
        // print_r($request->all());
        // die;
        // echo "</pre>";
        //Insert Query

        $register = new User;
        $register->name = $request->name;
        $register->email = $request->username;
        $register->password = Hash::make($request->password);
        if ($request->refer_by != NULL) {
            $register->refer_by = $request->refer_by;
            $user = User::where('email',$request->refer_by)->first();
            if($user){
                $wallet_amt = wallet::where('user_id',$user->id)->first();
                $wallet_amt->amount = $wallet_amt->amount + 10.00;
                $wallet_amt->update();
            }else{
                return redirect()->route('register')->with('faild', $request->name . ' Please Enter Valid Refer Id...');
            }

            if($user->refer_by != NULL){
                $old_user=User::where('email',$user->refer_by)->first();
                $wallet_amt = wallet::where('user_id',$old_user->id)->first();
                $wallet_amt->amount = $wallet_amt->amount + 5.00;
                $wallet_amt->update();
            }
        }

        $register->save();
        $wallet = wallet::where('user_id',$register->id)->first();
        if(!$wallet){
            $create_wallet = new wallet;
            $create_wallet->user_id = $register->id;
            $create_wallet->amount = 0;
            $create_wallet->save();
        }

        return redirect()->route('login')->with('success', $request->name . ' Register Successfully...');
    }
}
