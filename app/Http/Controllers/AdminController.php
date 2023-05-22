<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admins = Admin::all();
        return view('admins.index', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admins.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|unique:admins'
        ]);

        if ($request->filled('password')) {
            $validatedData['password'] = bcrypt($request->input('password'));
        }

        $admin = new Admin($validatedData);
        $admin->save();

        // İsteğe bağlı olarak başarılı bir şekilde kaydedildiğini belirten bir mesaj eklenebilir.

        return redirect()->route('admins.index');
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
        $admin = Admin::findOrFail($id);
        return view('admins.edit', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'email' => 'required|unique:admins,email,' . $id
        ]);

        if ($request->filled('password')) {
            $validatedData['password'] = bcrypt($request->input('password'));
        }

        $admin = Admin::findOrFail($id);
        $admin->update($validatedData);

        // İsteğe bağlı olarak başarılı bir şekilde kaydedildiğini belirten bir mesaj eklenebilir.

        return redirect()->route('admins.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $admin = Admin::findOrFail($id);
        $admin->delete();

        // İsteğe bağlı olarak başarılı bir şekilde silindiğini belirten bir mesaj eklenebilir.

        return redirect()->route('admins.index');
    }

    /**
     * Show the login form for admins.
     */
    public function showLoginForm()
    {
        return view('admins.admin-login');
    }

    /**
     * Process the login form for admins.
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $admin = Admin::where('email', $credentials['email'])->first();

        if (!$admin || !password_verify($credentials['password'], $admin->password)) {
            return back()->withErrors(['email' => 'Invalid credentials']);
        }

        session(['email' => $admin->email]);
        session(['password' => $admin->password]);

        // Başarılı giriş işlemi
        // İşlemleri buraya ekleyebilirsiniz

        return redirect()->route('home');
    }
}
