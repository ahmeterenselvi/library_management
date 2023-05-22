<?php

namespace App\Http\Controllers;

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

}
