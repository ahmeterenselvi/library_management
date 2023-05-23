<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Announcement;

class LibraryController extends Controller
{
    public function index()
    {
        $books = Book::all();
        $announcements = Announcement::all();

        return view('library.index', compact('books', 'announcements'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'message' => 'required',
            'sender' => 'required',
            'receiver' => 'required'
        ]);

        $message = new Message($validatedData);
        $message->save();

        // İsteğe bağlı olarak başarılı bir şekilde kaydedildiğini belirten bir mesaj eklenebilir.

        return redirect()->route('library.index');
    }

    public function borrow(Request $request, string $id)
    {
        $message = Book::findOrFail($id);
        $message->update([
            'available' => false
        ]);

        // İsteğe bağlı olarak başarılı bir şekilde güncellendiğini belirten bir mesaj eklenebilir.

        return redirect()->route('library.index');
    }

}
