<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Admin;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Announcement;

class LibraryController extends Controller
{
    public function profileIndex()
    {
        return view('library.profile-index');
    }

    public function profileUpdate(Request $request)
    {
        $studentId = session('student.id');

        $student = Student::find($studentId);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $validatedData['image'] = $imageName;

            $student->update([
                'image' => $imageName
            ]);
        }

        $student->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email
            ]);

        session(['student'=> $student]);

        return redirect()->route('library.index');
    }


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
            'message' => 'required'
        ]);

        $message = new Message($validatedData);
        
        $admin = Admin::first();
        $message['receiver_admin_id'] = $admin['id'];
        $message['receiver'] = $admin['email'];

        $student = session('student');
        $message['sender'] = $student['email'];
        $message['sender_student_id'] = $student['id'];

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
