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

    /**
     * Show the login form for students.
     */
    public function showLoginForm()
    {
        return view('students.student-login');
    }

    /**
     * Process the login form for students.
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::guard('student')->attempt($credentials)) {
            return redirect()->route('home');
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    /**
     * Show the registration form for students.
     */
    public function showRegistrationForm()
    {
        return view('students.register');
    }

    /**
     * Process the registration form for students.
     */
    public function register(Request $request)
    {
        // Validate and store the student's registration data
        // You can use the Student model to create a new student record in the database

        // After successful registration, you can redirect the student to the login page or any other desired page

        $validatedData = $request->validate([
            'name' => 'required',
            'student_number' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'password'=>'required'
        ]);

        $student = new Student($validatedData);
        $student->save();

        // İsteğe bağlı olarak başarılı bir şekilde kaydedildiğini belirten bir mesaj eklenebilir.

        return redirect()->route('student.login')->with('success', 'Registration successful. Please login.');
    }
}
