<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {   
        $contacts = Contact::get();
       //dd($users);
        return view('admin.contacts.index',[
            'contacts'=> $contacts
    ]);
    }
    public function create()
    {
        return view("admin.contacts.create");
    }
    public function store(Request $request)
    {
        $contacts = new Contact();

        $contacts->name = $request->name;
        $contacts->position = $request->position;
        $contacts->phonecontact = $request->phonecontact;
        $contacts->save();
        return redirect()->back();
        //dd($category);

        
    }
    public function edit($id)
    {   
        $contacts = Contact::find($id);
        if(!$contacts)
        {
            abort(404);
        }
       //dd($users);
        return view('admin.contacts.edit',[
            'contacts'=> $contacts
    ]);
    }
    public function update(Request $request,$id)
    {
        $contacts = Contact::find($id);
        $contacts->name = $request->name;
        $contacts->position = $request->position;
        $contacts->phonecontact = $request->phonecontact;
            //dd($user);
            $contacts->save();
        return redirect()->back();
    }
    public function show($id)
    {
        $contacts = Contact::find($id);
       
        return view('admin.contacts.show',[
            'contacts'=> $contacts]);
    }
    public function delete($id)
    {
        $contacts = Contact::find($id);
        $contacts->delete();
        return redirect()->back();
    }
}
