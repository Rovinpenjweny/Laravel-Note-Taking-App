<?php

use App\Http\Controllers\NoteController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/notes' , [NoteController::class , 'index'])->name('note.index');
// Route::get('/notes/create' , [NoteController::class , 'create'])->name('note.create');
// Route::post('/notes' , [NoteController::class , 'store'])->name('note.store');
// Route::patch('/notes/{note}' ,[NoteController::class , 'update'])->name('note.update');
// Route::get('/notes/{note}' , [NoteController::class , 'show'])->name('note.show');
// Route::get('/notes/{note}/edit' , [NoteController::class , 'edit'])->name('note.edit');
// Route::delete('/notes/{note}' , [NoteController::class , 'destroy'])->name('note.destroy');


Route::resource('notes' , NoteController::class);

