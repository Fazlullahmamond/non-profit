<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class FrontPageController extends Controller
{
    public function index()
    {

        return view('welcome');
    }


    public function contact()
    {
        return view('contact');
    }


    public function save_contact(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|max:20',
            'message' => 'required|string',
        ]);

        // Create a new Contact instance and store the data
        $contact = new Contact();
        $contact->name = $validatedData['name'];
        $contact->email = $validatedData['email'];
        $contact->phone = $validatedData['phone'];
        $contact->message = $validatedData['message'];
        $contact->save();
        session()->flash('success', 'Thank you for your message. We will get back to you soon.');

        return redirect()->route('contact');
    }
}
