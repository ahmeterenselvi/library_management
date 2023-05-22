@php
    $page='Duyurular';
    $pageTitle = 'Duyuru Düzenleme';
    $pageLink='announcements.index';
@endphp@php
    $page='Kitap';
    $pageTitle = 'Kitap Düzenleme';
    $pageLink='books.index';
@endphp

@extends('layouts.app')
    <!DOCTYPE html>
<html>
<head>
    <title>Kitap Düzenle</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            color: #333;
        }

        form label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        form input[type="text"],
        form input[type="number"],
        form select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 15px;
        }

        form button {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        form button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
@section('content')
    <div class="container">

        <form method="POST" action="{{ route('announcements.update',  $announcement->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Başlık:</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ $announcement->title }}" required>
            </div>

            <div class="form-group">
                <label for="author">Açıklama:</label>
                <input type="text" class="form-control" name="description" id="description" value="{{ $announcement->description }}" required>
            </div>

            <div class="form-group">
                <label for="image">Resim</label>
                <input type="file" class="form-control-file" id="image" name="image" required>
            </div>

            <button type="submit" class="btn btn-primary">Güncelle</button>
        </form>

        <a href="{{ route('announcements.index') }}" class="btn btn-secondary mt-3">Geri Dön</a>
    </div>
@endsection
</body>
</html>
