<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class AccountController extends Controller
{
    public static function GenerateUserId()
    {
        $value = rand(000000001, 999999999);
        while (!empty(Users::find($value))){
            $value = rand(000000001, 999999999);
        }
//        dd($value);
        return $value;
    }
    public static function checkAuth($value)
    {
        $user = Users::select()->where('user_id', '=', $value)->first();
//        dd($user);
        if (!empty($user)){
            return $user;
        } else {
            return null;
        }
    }

    public static function checkAccount($login)
    {
        $user = Users::select()->where('login', '=', $login)->first();
//        dd($user);
        if (!empty($user)){
            return $user;
        } else {
            return null;
        }
    }
    protected static function getToken()
    {
        $USERTOKEN = 'USER';
        return $USERTOKEN;
    }
    public function setCookie($value)
    {
        return Cookie::queue(AccountController::getToken(), $value, 20);
    }

    public static function getCookie()
    {
        return Cookie::get(AccountController::getToken());
    }

    public static function delCookie()
    {
        return Cookie::queue(Cookie::forget(AccountController::getToken()));
    }

    public function register(Request $request)
    {
        if (!empty($request['login'] && !empty($request['password']))){
            $user = new Users();
            $user->user_id = self::GenerateUserId();
            $user->login = $request['login'];
            $user->password = $request['password'];
            $user->avatar_url = 'img/default.png';
            $user->status = '1';
            $user->save();
            $this->setCookie($user->user_id);
            return redirect()->route('profile')->with(compact('user'));
        } else {
            $error = 'Data is incorrect';
            return view('register', compact('error'));
        }

    }

    public function login(Request $request)
    {
        $user = AccountController::checkAccount($request['login']);
        if ($user != null){
            if ($user->password == $request['password']){
                $this->setCookie($user->user_id);
                $user = self::checkAuth($user->user_id);
                return redirect()->route('profile')->with(['user' => $user]);
            } else {
                $error = 'Data is incorrect';
                return view('login', compact('error'));
            }
        } else {
            $error = 'User not found';
            return view('login', compact('error'));
        }
    }

    public function updateData(Request $request){

        $user = Users::select()->where('login', '=', request()->cookie(AccountController::getToken()))->first();

        if (!empty($user)){
            $data = Users::find($user)->first();
            $user['login'] = $request['name'];
            if ($request['password'] == $request['repeat_password']){
                $data['password'] = $request['password'];
//            $data->phone = $request['phone'];
//            $data->code = $request['code'];
//            $data->email = $request['email'];
                $data['login'] = $request['name'];

                $data->save();
                AccountController::setCookie($data->login);
                $success = 'Data is updated';
                return redirect()->route('profile')->with(compact('user', 'success'));
            } else {
                return redirect()->route('profile')->with(compact('user'));
            }
        } else {
            return redirect()->route('login');
        }
    }
}
