<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('about');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|max:50',
                'email' => 'required|email',
                'subject' => 'required|max:100',
                'contact_message' => 'required|max:255',
            ]
        );

        $contact_message = Contact::create($request->all());

        return redirect(route('contact.page'))->with('contact_success', 'Thank you for Contacting Us!');
    }
}
