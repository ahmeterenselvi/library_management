<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'student_number' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);

        if ($request->filled('password')) {
            $validatedData['password'] = bcrypt($request->input('password'));
        }

        $student = new Student($validatedData);
        $student->save();

        // İsteğe bağlı olarak başarılı bir şekilde kaydedildiğini belirten bir mesaj eklenebilir.

        return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::findOrFail($id);
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'student_number' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);

        if ($request->filled('password')) {
            $validatedData['password'] = bcrypt($request->input('password'));
        }

        $student = Student::findOrFail($id);
        $student->update($validatedData);

        // İsteğe bağlı olarak başarılı bir şekilde kaydedildiğini belirten bir mesaj eklenebilir.

        return redirect()->route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        // İsteğe bağlı olarak başarılı bir şekilde silindiğini belirten bir mesaj eklenebilir.

        return redirect()->route('students.index');
    }
}
