<?php

namespace App\Http\Controllers;

use App\Models\Messages;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MessagesController extends Controller
{
    public function index()
    {
        $token = AccountController::getCookie();
        if (!empty($token)){
            $user = Users::select()->where('user_id', '=', $token)->first();
            $messages = Users::select('login', 'avatar_url', 'status', 'user_id')->get()->toArray();
//            dd($user);
            return view('profile.messages')->with(compact('user', 'messages'));
        } else {
            return redirect('/login');
        }
    }

    public function write($id)
    {
        $token = AccountController::getCookie();
//        dd($token);
        $user = Users::select()->where('user_id', '=', $token)->first();
        if (!empty($token)){
            if (!empty($id)){
                $messages = Messages::select()->where('from_user', '=', $user->user_id)->where('to_user', '=', $id)->
                orWhere('to_user', '=', $user->user_id)->where('from_user', '=', $id)->get();

//                $messages = Messages::select()->where('from_user', '=', $user->user_id)->where('to_user', '=', $id)->
//                orWhere('to_user', '=', $user->user_id)->where('from_user', '=', $id)->orderBy('id')->latest()->take(5)->get();

                $id = Users::select('user_id', 'login', 'avatar_url')->where('user_id', '=', $id)->first();
//                dd($id);
//                self::sendGet($id);

//                $titles = array();
//                foreach ($messages as $current_user){
//                    $object = Users::select('login')->where('user_id', '=', $current_user->to_user)->orWhere('user_id', '=', $current_user->from_user)->first();
//                    dd($object);
//                    array_push($titles, $object);
//                }
////                $titles = Users::select('login')->where('user_id', '=', $id_list)->get();
//                dd($titles);

                return view('profile.write', compact('user', 'id', 'messages'));
            } else {
                $messages = Messages::select()->where('from_user', '=', $user->login)->orWhere('to_user', '=', $user->login)->get();
                return view('profile.messages', compact('user', 'messages'));
            }
        } else {
            return redirect('/login');
        }

    }

    public function sendGet(Request $request){
        $token = AccountController::getCookie();
        if (!empty($token)){
            $user = Users::select()->where('user_id', '=', $token)->first();
            $id = Users::select('user_id')->where('user_id', '=', $request->route('id'))->first();
            $msg = new Messages();
            $msg->from_user = $request['from_user'];
            $msg->to_user = $request['to_user'];
            $msg->message = $request['message'];
//        $msg->save();
            $messages = Messages::select()->where('from_user', '=', $user->user_id)->where('to_user', '=', $request->route('id'))->
            orWhere('to_user', '=', $user->user_id)->where('from_user', '=', $request->route('id'))->get();


//            $messages = Messages::select()->where('from_user', '=', $user->user_id)->where('to_user', '=', $request->route('id'))->
//            orWhere('to_user', '=', $user->user_id)->where('from_user', '=', $request->route('id'))->orderBy('id')->latest('id')->limit(5)->get();

            return response()->json(['messages' => $messages, 'id' => $id]);
        } else {
            return redirect('login');
        }
    }

    public function send(Request $request){
        $token = AccountController::getCookie();
        if (!empty($token)){
            $user = Users::select()->where('user_id', '=', $token)->first();
            $id = Users::select('user_id', 'login')->where('user_id', '=', $request['to_user'])->first();
            $msg = new Messages();
            $msg->from_user = $request['from_user'];
            $msg->to_user = $request['to_user'];
            $msg->message = $request['message'];
            $msg->save();


            $messages = Messages::select()->where('from_user', '=', $user->user_id)->where('to_user', '=', $request['to_user'])->
            orWhere('to_user', '=', $user->user_id)->where('from_user', '=', $request['to_user'])->get();

//            $messages = Messages::select()->where('from_user', '=', $user->user_id)->orWhere('to_user', '=', $user->user_id)->get();


//            $messages = Messages::select()->where('from_user', '=', $user->user_id)->where('to_user', '=', $id->user_id)->
//            orWhere('to_user', '=', $user->user_id)->where('from_user', '=', $id->user_id)->orderBy('id')->latest()->limit(5)->get();

//        dd(response()->json($id->login));
            return response()->json(['messages' => $messages, 'id' => $id]);
//        return response()->json(['messages' => $messages, 'user' => $user, 'id' => $id]);
        } else {
            return redirect('login');
        }
    }
}
