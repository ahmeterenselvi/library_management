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
    </style>
</head>
<body>
<div class="container">
    <h1>Öğrenci Düzenle</h1>

    <form method="POST" action="{{ route('students.update', $student->id) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">İsim:</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ $student->name }}" required>
        </div>

        <div class="form-group">
            <label for="author">Öğrenci Numarası:</label>
            <input type="text" class="form-control" name="student_number" id="student_number" value="{{ $student->student_number }}" required>
        </div>

        <div class="form-group">
            <label for="page_count">Email:</label>
            <input type="text" class="form-control" name="email" id="email" value="{{ $student->email }}" required>
        </div>

        <div class="form-group">
            <label for="publisher">Telefon Numarası:</label>
            <input type="text" class="form-control" name="phone" id="phone" value="{{ $student->phone }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Güncelle</button>
    </form>
</div>
</body>
</html>
