<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
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

    public function show(Request $request, Contact $contact){
        return view('contacts.show', [
            "contact" => $contact
        ]);
    }

    public function create(){
        return view('contacts.create');
    }

    public function store(ContactRequest $request){
        Contact::query()->create([
           "first_name" => $request->first_name,
            "last_name" => $request->last_name,
            "email" => $request->email,
            "phone_number" => $request->phone_number,
            "address" => $request->address
        ]);
        return redirect()->route('contacts.index');
    }

    public function edit(Request $request, Contact $contact){
        return view('contacts.edit', [
            "contact" => $contact
        ]);
    }

    public function update(ContactRequest $request, Contact $contact){
        $contact->update([
            "first_name" => $request->first_name,
            "last_name" => $request->last_name,
            "email" => $request->email,
            "phone_number" => $request->phone_number,
            "address" => $request->address
        ]);
        return redirect()->route('contacts.index');
    }

    public function destroy(Request $request,Contact $contact){
        $contact->delete();
        return redirect()->route('contacts.index');
    }

}


