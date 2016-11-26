<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MessageController extends Controller {
    public function messageList(){
        $messages = DB::table('messages')->get();
        return view('messages.index', ['messages' => $messages]);
    }

    public function addMessage(Request $request){
        DB::table('messages')
            ->insert([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'message' => $request->input('message')
            ]);
        return redirect('/list');
    }

    public function editMessage($id){

    }

    public function deleteMessage($id){
        DB::table('messages')->where('id', '=', $id)->delete();
        return redirect('/list');
    }
}