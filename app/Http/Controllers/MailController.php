<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Order;

class MailController extends Controller
{
    public function order(Request $request){
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'messages' => $request->message,
        ];
        Mail::to('vanjo757@gmail.com')->send(new Order($data));
        // try {
        //     return response()->json(['Done']);
        // } catch (\Exception $th) {
        //     return response()->json([$th]);
        // }
    }
}
