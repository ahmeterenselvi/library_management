@php
    $page='Mesaj';
    $pageTitle = 'Mesaj Gönderme';
    $pageLink='messages.index';
@endphp

@extends('layouts.app')
    <!DOCTYPE html>
<html>
<head>
    <title>Mesaj Gönder</title>
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
        form input[type="email"],
        form input[type="password"] {
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
        <form method="POST" action="{{ route('messages.store') }}">
            @csrf
            <div class="form-group">
                <label for="receiver">Alıcı:</label>
                <input type="text" class="form-control" name="receiver" id="receiver" required>
            </div>

            <div class="form-group">
                <label for="title">Başlık:</label>
                <input type="text" class="form-control" name="title" id="title" required>
            </div>

            <div class="form-group">
                <label for="message">İçerik:</label>
                <input type="text" class="form-control" name="message" id="message" required>
            </div>

            <div class="form-group">
                <label for="sender">Gönderen:</label>
                <input type="text" class="form-control" name="sender" id="sender" required>
            </div>

            <button type="submit" class="btn btn-primary">Gönder</button>
        </form>

        <a href="{{ route('messages.index') }}" class="btn btn-secondary mt-3">Geri Dön</a>
    </div>
@endsection
</body>
</html>
