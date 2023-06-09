@php
    $page='Öğrenci';
    $pageTitle = 'Öğrenci Düzenleme';
    $pageLink='students.index';
@endphp

@extends('layouts.app')
    <!DOCTYPE html>
<html>
<head>
    <title>Öğrenci Düzenle</title>
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

        .password-toggle {
            background-color: #fff;
            border: none;
            cursor: pointer;
        }

    </style>
</head>
<body>
@section('content')
    <div class="container">
        <form method="POST" action="{{ route('students.update', $student->id) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">İsim:</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ $student->name }}" required>
            </div>

            <div class="form-group">
                <label for="author">Öğrenci Numarası:</label>
                <input type="text" class="form-control" name="student_number" id="student_number"
                       value="{{ $student->student_number }}" required>
            </div>

            <div class="form-group">
                <label for="page_count">Email:</label>
                <input type="text" class="form-control" name="email" id="email" value="{{ $student->email }}" required>
            </div>

            <div class="form-group">
                <label for="publisher">Telefon Numarası:</label>
                <input type="text" class="form-control" name="phone" id="phone" value="{{ $student->phone }}" required>
            </div>

            <div class="form-group">
                <label for="password">Şifre:</label>
                <div class="input-group">
                    <input type="password" class="form-control" name="password" id="password" value="{{ $student->password }}" required>
                    <div class="input-group-append">
            <span class="input-group-text password-toggle" style="cursor: pointer;">
                <i class="fas fa-eye"></i>
            </span>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Güncelle</button>
        </form>

        <a href="{{ route('students.index') }}" class="btn btn-secondary mt-3">Geri Dön</a>
    </div>
@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('.password-toggle').click(function () {
            var passwordInput = $('#password');
            var passwordFieldType = passwordInput.attr('type');

            if (passwordFieldType === 'password') {
                passwordInput.attr('type', 'text');
            } else {
                passwordInput.attr('type', 'password');
            }
        });
    });
</script>

</body>
</html>
