<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;

class ContactController extends Controller
{
    
    public function store_contact(Request $request)
    {
        /* validation data */
        $request->validate([
            'nom_complet' => 'required',
            'email' => 'email',
            'objet' => 'required',
            'message' => 'required',
           ]);
    
           Contact::create($request->all()); //creation du contact// save data contact submitted 
    
           return redirect()->route('home')->with('success_contact', 'Merci de nous avoir contactés ! Vous recevrez un message dans les 24 heures pour votre requête.👍');
    }

    public function index_admin()
    {
        $contacts = Contact::latest()->paginate(2);


        return view('admin.contacts.index', compact('contacts'));
    }

}
