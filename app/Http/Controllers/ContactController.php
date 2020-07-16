<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
   public function submit(ContactRequest $request) {
// $validation = $request->validate( // для класса Request
//     [
//        'subject' => 'required|min:5|max:50' ,
//        'message' => 'required'
//     ]
//     );
// dd($request->input('subject'));
   }
}
