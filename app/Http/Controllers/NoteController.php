<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Exception;
use Illuminate\Http\Request;

class NoteController extends Controller
{

    public function index()
    {
        $notes = Note::latest()->paginate(100);
        return view('note.index' , ['notes'=>$notes]);
    }


    // for showing individual items
    public function show(Note $note)
    {   
        return view('note.show' , ['note'=>$note]);
    }
    
    public function store()
    {
        $data = request()->validate([
            'title'=>['required' , 'string' , 'min:3'],
            'body'=>['required' , 'string' , 'min:5'],
        ]);
        
        $data['user_id']=1;
        Note::create($data);
        return redirect()->route('notes.index')->with('success' , 'Note Inserted Successfully');
          
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
        $data = request()->validate([
            'title'=>['required' , 'string' , 'min:3'],
            'body'=>['required' , 'string' , 'min:5']
        ]);
       $note->update($data);
       return redirect()->route('notes.show' , $note)->with('success' , 'Note Updated Successfully');
    }

    public function destroy(Note $note)
    {   
        $note->delete();
        return redirect()->route('notes.index')->with('success' , 'Note Deleted Successfully.');
    }


}
