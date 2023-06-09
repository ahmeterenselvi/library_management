<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'page_count' => 'required|integer',
            'publisher' => 'required',
            'image' => 'required'
        ]);

        $validatedData['available'] = true;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $validatedData['image'] = $imageName;
        }

        $book = new Book($validatedData);
        $book->save();

        // İsteğe bağlı olarak başarılı bir şekilde kaydedildiğini belirten bir mesaj eklenebilir.

        return redirect()->route('books.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book = Book::findOrFail($id);
        return view('books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book = Book::findOrFail($id);
        return view('books.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'page_count' => 'required|integer',
            'publisher' => 'required',
            'available' => 'required',
            'image' => 'required'
        ]);

        $book = Book::findOrFail($id);

        if ($request->hasFile('image')) {
            $image = $request->file('image');

            if ($image->isValid()) {
                // Eski resmi sil
                if ($book->image) {
                    $imagePath = public_path('images') . '/' . $book->image;
                    if (file_exists($imagePath)) {
                        unlink($imagePath);
                    }
                }

                // Yeni resmi yükle
                $imageName = time() . '.' . $image->extension();
                $image->move(public_path('images'), $imageName);
                $validatedData['image'] = $imageName;
            } else {
                // Yükleme hatası
                return redirect()->back()->withErrors(['image' => 'Dosya yükleme hatası']);
            }
        }

        $book->update($validatedData);

        // İsteğe bağlı olarak başarılı bir şekilde güncellendiğini belirten bir mesaj eklenebilir.

        return redirect()->route('books.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $book = Book::findOrFail($id);
        $book->delete();

        // İsteğe bağlı olarak başarılı bir şekilde silindiğini belirten bir mesaj eklenebilir.

        return redirect()->route('books.index');
    }
}
