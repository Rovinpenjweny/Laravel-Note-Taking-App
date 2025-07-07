<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{

    public function index()
    {
        return view('note.index');
    }


    // for showing individual items
    public function show(Note $note)
    {   
        return view('note.show' , compact('note'));
    }
    
    public function store()
    {
        //
    }


    public function create()
    {
        return view('note.create');
    }


    public function edit(Note $note)
    {
        return view('note.edit' , compact('note'));
    }


    public function update(Note $note)
    {
        //
    }

    public function destroy()
    {
        //
    }


}
