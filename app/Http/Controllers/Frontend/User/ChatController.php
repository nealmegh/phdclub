<?php

namespace App\Http\Controllers\Frontend\User;

use App\Models\Auth\Chat;
use App\Models\Auth\User;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;

class ChatController extends Controller
{


    public function index()
    {
//        $users = User::all();
        $users = User::where('id', '!=', Auth::id())->get();
        return view('frontend.user.chat.chats', ['users' => $users]);
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('frontend.user.chat.showchat', ['user' => $user, 'fromId' => Auth::id(), 'toId' => $id]);
    }

    public function getChat($id)
    {
        $chats = Chat::where(function ($query) use ($id){
            $query->where('from_id', '=', Auth::user()->id)->where('to_id', '=', $id);
        })->orWhere(function ($query) use ($id){
            $query->where('from_id', '=', $id)->where('to_id', '=', Auth::user()->id);
        })->get();
//        return view('frontend.user.chat.showchat', ['user' => $user]);
        return $chats;
    }
     public function sendChat(Request $request)
     {
         Chat::create([
             'from_id' => $request->from_id,
             'to_id'   => $request->to_id,
             'chat'    => $request->chat
         ]);

         return[];
     }


}
