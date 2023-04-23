<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function store(Request $request)
    {

        DB::table('orders')->insert([
            'name' => $request->name,
            'time' => $request->time,
            'email' => $request->email,
            'coment' => $request->coment,
            'number' => $request ->number,
        ]);
        return back();
    }

}
