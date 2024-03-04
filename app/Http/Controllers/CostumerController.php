<?php

namespace App\Http\Controllers;

use App\Models\Costumer;
use Illuminate\Http\Request;

class CostumerController extends Controller
{
    //
    public function saveRecord(Request $request)
    {
        $costumer = new Costumer();
        $costumer->name = $request->input('Name');
        $costumer->email = $request->input('Email');
        $costumer->message = $request->input('Message');
        $costumer->save();
    
        return redirect(route('home'));
    }
}
