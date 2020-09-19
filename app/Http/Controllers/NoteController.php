<?php

namespace App\Http\Controllers;

use Session;
use App\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("welcome", ["notes" => Note::latest()->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $data = $request->all();
       $request->validate([
        'subject' => 'required',
        'body' => 'required',
    ]);
        $note = new Note();
        $note->subject = $data['subject'];
        $note->body = $data['body'];

        $note->save();
        Session::flash('message', 'Added a new Note');
        return redirect('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function show(Note $note)
    {
        return view('view', ['note' => $note]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Note $note)
    {
        $request->validate([
            'subject' => 'required',
            'body' => 'required',
        ]);
        $data = $request->all();
        $note->subject = $data['subject'];
        $note->body = $data['body'];

        $note->save();
        Session::flash('message', 'Successfully updated a record!');
        return redirect('/');
    }

}
