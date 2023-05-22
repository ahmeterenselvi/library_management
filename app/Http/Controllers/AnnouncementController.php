<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $announcements = Announcement::all();
        return view('announcements.index', compact('announcements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('announcements.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required'
        ]);

        $validatedData['date'] = date('Y-m-d');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $validatedData['image'] = $imageName;
        }

        $announcement = new Announcement($validatedData);
        $announcement->save();

        // İsteğe bağlı olarak başarılı bir şekilde kaydedildiğini belirten bir mesaj eklenebilir.

        return redirect()->route('announcements.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $announcement = Announcement::findOrFail($id);
        return view('announcements.show', compact('announcement'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $announcement = Announcement::findOrFail($id);
        return view('announcements.edit', compact('announcement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required'
        ]);

        $validatedData['date'] = date('Y-m-d');

        $announcement = Announcement::findOrFail($id);

        if ($request->hasFile('image')) {
            $image = $request->file('image');

            if ($image->isValid()) {
                // Eski resmi sil
                if ($announcement->image) {
                    $imagePath = public_path('images') . '/' . $announcement->image;
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

        $announcement->update($validatedData);

        // İsteğe bağlı olarak başarılı bir şekilde güncellendiğini belirten bir mesaj eklenebilir.

        return redirect()->route('announcements.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $announcement = Announcement::findOrFail($id);
        $announcement->delete();

        // İsteğe bağlı olarak başarılı bir şekilde silindiğini belirten bir mesaj eklenebilir.

        return redirect()->route('announcements.index');
    }
}
