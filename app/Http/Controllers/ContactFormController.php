<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactForm;

class ContactFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = ContactForm::select('id', 'name','title','created_at')
        ->get();
        
        return view('contacts.index', compact('contacts'));
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
        ContactForm::create([
            'name' => $request->name,
            'email' => $request->email,
            'title' => $request->title,
            'url' => $request->url,
            'age' => $request->age,
            'gender' => $request->gender,
            'contact' => $request->contact,

        ]);
        return redirect()->route('contacts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact = ContactForm::find($id);
        if($contact->gender === 0){
            $gender = '男性';
        } else {
            $gender = '女性';
        }

        if($contact->age === 1){ $age = '~19歳'; }
        if($contact->age === 2){ $age = '20歳~２9歳'; }
        if($contact->age === 3){ $age = '３0歳~３9歳'; }
        if($contact->age === 4){ $age = '４0歳~４9歳'; }
        if($contact->age === 5){ $age = '５0歳~５9歳'; }
        if($contact->age === 6){ $age = '６０歳〜'; }

        return view('contacts.show', compact('contact', 'age', 'gender'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = ContactForm::find($id);
        return view('contacts.edit', compact('contact'));

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
        $contact = ContactForm::find($id);
        if($contact->gender === 0){
            $gender = '男性';
        } else {
            $gender = '女性';
        }

        if($contact->age === 1){ $age = '~19歳'; }
        if($contact->age === 2){ $age = '20歳~２9歳'; }
        if($contact->age === 3){ $age = '３0歳~３9歳'; }
        if($contact->age === 4){ $age = '４0歳~４9歳'; }
        if($contact->age === 5){ $age = '５0歳~５9歳'; }
        if($contact->age === 6){ $age = '６０歳〜'; }
        $contact->name = $request->name;
        $contact->title = $request->title;
        $contact->email = $request->email;
        $contact->gender = $request->gender;
        $contact->age = $request->age;
        $contact->url = $request->url;
        $contact->contact = $request->contact;
        $contact->save();

        return view('contacts.show', compact('contact', 'age', 'gender'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = ContactForm::find($id);
        $contact->delete();

        return redirect()->route('contacts.index');

    }
}
