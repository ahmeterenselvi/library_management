@php
    $page='Öğrenci';
    $pageTitle = 'Öğrenci Ekleme';
    $pageLink='students.index';
@endphp

@extends('layouts.app')
    <!DOCTYPE html>
<html>
<head>
    <title>Yeni Öğrenci Ekle</title>
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
        form input[type="number"] {
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
        <form method="POST" action="{{ route('students.store') }}">
            @csrf

            <div class="form-group">
                <label for="name">İsim:</label>
                <input type="text" class="form-control" name="name" id="name" required>
            </div>

            <div class="form-group">
                <label for="student_number">Öğrenci Numarası:</label>
                <input type="text" class="form-control" name="student_number" id="student_number" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" name="email" id="email" required>
            </div>

            <div class="form-group">
                <label for="phone">Telefon Numarası:</label>
                <input type="text" class="form-control" name="phone" id="phone" required>
            </div>

            <div class="form-group">
                <label for="password">Şifre:</label>
                <input type="text" class="form-control" name="password" id="password" required>
            </div>

            <button type="submit" class="btn btn-primary">Kaydet</button>
        </form>

        <a href="{{ route('students.index') }}" class="btn btn-secondary mt-3">Geri Dön</a>
    </div>
@endsection

</body>
</html>
