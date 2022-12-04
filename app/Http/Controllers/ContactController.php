<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
    $contacts = Contact::all();
    return view('contacts.index', [
        "contacts" => $contacts
    ]);
    }

    public function show(Request $request){
        $contactID = $request->id;
        $contact = Contact::query()->findOrFail($contactID);
        return view('contacts.show', [
            "contact" => $contact
        ]);
    }

    public function create(){
        return view('contacts.create');
    }

    public function save(Request $request){
        Contact::query()->create([
           "first_name" => $request->first_name,
            "last_name" => $request->last_name,
            "email" => $request->email,
            "phone_number" => $request->phone_number,
            "address" => $request->address
        ]);
        return redirect('/contacts');
    }

    public function edit(Request $request){
        $contactID = $request->id;
        $contact = Contact::query()->find($contactID);
        return view('contacts.edit', [
            "contact" => $contact
        ]);
    }

    public function update(Request $request){
        $contact = Contact::query()->findOrFail($request->id);
        $contact->update([
            "first_name" => $request->first_name,
            "last_name" => $request->last_name,
            "email" => $request->email,
            "phone_number" => $request->phone_number,
            "address" => $request->address
        ]);
        return redirect('/contacts');
    }

    public function destroy(Request $request){
        $contact = Contact::query()->findOrFail($request->id);
        $contact->delete();
        return redirect('/contacts');
    }

}


