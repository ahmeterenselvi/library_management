<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $messages = Message::all();
        return view('messages.index', compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('messages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $message = new Message($validatedData);
        $message->save();

        // İsteğe bağlı olarak başarılı bir şekilde kaydedildiğini belirten bir mesaj eklenebilir.

        return redirect()->route('messages.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $message = Message::findOrFail($id);
        return view('messages.show', compact('message'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $message = Message::findOrFail($id);
        return view('messages.edit', compact('message'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $message = Message::findOrFail($id);
        $message->update($validatedData);

        // İsteğe bağlı olarak başarılı bir şekilde güncellendiğini belirten bir mesaj eklenebilir.

        return redirect()->route('messages.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $message = Message::findOrFail($id);
        $message->delete();

        // İsteğe bağlı olarak başarılı bir şekilde silindiğini belirten bir mesaj eklenebilir.

        return redirect()->route('messages.index');
    }
}
