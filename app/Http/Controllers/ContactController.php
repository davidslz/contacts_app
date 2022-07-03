<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\contact;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contacts.index', ['contacts' => auth()->user()->contacts]);
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
        $data = $request->validate([
            'name' => 'required|max:255',
            'phone_number' => 'required|digits:10',
            'email' => 'required|email',
            'age' => 'required|numeric|min:1|max:100'
        ]);

        //auth()->user()->contacts()->create($data);

        $data['user_id'] = auth()->id();

        contact::create($data);

        return redirect()->route('contacts.index', ['contacts' => contact::all()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(contact $contact)
    {
        return view('contacts.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(contact $contact)
    {
        return view('contacts.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, contact $contact)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'phone_number' => 'required|digits:10',
            'email' => 'required|email',
            'age' => 'required|numeric|min:1|max:100'
        ]);

        $contact->update($data);

        // $contact->save($data);

        return view('contacts.show', compact('contact'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(contact $contact)
    {
        $contact->delete();

        return redirect()->route('contacts.index', ['contacts' => contact::all()]);
    }
}
