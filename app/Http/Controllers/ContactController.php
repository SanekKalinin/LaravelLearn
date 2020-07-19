<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
   public function submit(ContactRequest $request) {
    $contact = new Contact;
       $contact->name = $request->input('name');
       $contact->email = $request->input('email');
       $contact->subject = $request->input('subject');
       $contact->message = $request->input('message');

       $contact->save();
       return redirect()->route('home')->with('success','Сообщение было добавлено');
// $validation = $request->validate( // для класса Request
//     [
//        'subject' => 'required|min:5|max:50' ,
//        'message' => 'required'
//     ]
//     );
// dd($request->input('subject'));
   }

   public function allData() {
       $contact = new Contact;
// dd(Contact::all());
//$contact->inRandomOrder()->get()
//$contact->orderBy('id','asc')->skip(1)->take(1)-get()
//$contact->where('subject', '<>', 'hello')->get()
return view('messages', ['data' => $contact->all()]);
    }

    public function showFullMessage($id) {
        $contact = new Contact;
        return view('fullMessage', ['data' => $contact->find($id)]);
    }
    public function updateMessage($id) {
        $contact = new Contact;
        return view('updateMessage', ['data' => $contact->find($id)]);
    }

    public function updateMessageSubmit($id, ContactRequest $request) {
        $contact = Contact::find($id);
           $contact->name = $request->input('name');
           $contact->email = $request->input('email');
           $contact->subject = $request->input('subject');
           $contact->message = $request->input('message');

           $contact->save();
           return redirect()->route('contact-data-full', $id)->with('success','Сообщение было обновлено');
    }

    public function deleteMessage($id) {
        $contact = Contact::find($id)->delete();
        return redirect()->route('contact-data')->with('success','Сообщение было удалено');
    }

}
