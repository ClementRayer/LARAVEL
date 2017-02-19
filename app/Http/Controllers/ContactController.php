<?php

namespace App\Http\Controllers;

use App\Contact;
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'first_name' => 'required',
            'email' => 'required',
            'object' => 'required',
            'message' => 'required',
        ],
            [
                'name.required' => 'We can\'t know who you are',
                'first_name.required' => 'We can\'t know who you are',
                'email.required' => 'We can\'t answer to your message without your e-mail address',
                'object.required' => 'We\'d like to know easily your message theme',
                'message.required' => 'Don\'t you have a message for us?'
            ]
        );

        Contact::create([
            'name' => $request->name,
            'first_name' => $request->first_name,
            'email' => $request->email,
            'object' => $request->object,
            'message' => $request->message,
        ]);

        return redirect()->route('')->with('success', 'Form sent');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
