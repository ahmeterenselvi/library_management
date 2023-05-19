<!DOCTYPE html>
<html lang="tr">
<head>
    <title>Öğrenci Listesi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
body {
    font-family: Arial, sans-serif;
        }
        h1 {
    color: #333;
    text-align: center;
        }
        table {
    width: 100%;
    border-collapse: collapse;
        }
        th, td {
    padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ccc;
        }
        th {
    background-color: #f5f5f5;
        }
        tr:hover {
    background-color: #f9f9f9;
        }
        .available-yes {
    color: green;
    font-weight: bold;
        }
        .available-no {
    color: red;
    font-weight: bold;
        }
        .button-container {
}
        .button-container2 {
    margin-top: 20px;
            text-align: center;
        }
        .button-container .action-button {
    background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-right: 10px;
        }
        .button-container .action-button:last-child {
    margin-right: 0;
        }
        .action-button:hover {
    background-color: #45a049;
        }
        .button-container form {
    display: inline-block;
}
    </style>
</head>
<body>
<h1>Öğrenci Listesi</h1>

<table class="table">
    <thead>
    <tr>
        <th>İsim</th>
        <th>Öğrenci Numarası</th>
        <th>Email</th>
        <th>Telefon Numarası</th>
        <th>İşlemler</th>
    </tr>
    </thead>
    <tbody>
@foreach ($students as $student)
    <tr>
        <td>{{ $student->name }}</td>
        <td>{{ $student->student_number }}</td>
        <td>{{ $student->email }}</td>
        <td>{{ $student->phone }}</td>
        <td>
            <div class="button-container">
                <form action="{{ route('students.edit', $student->id) }}" method="get">
                    @csrf
                    <button class="action-button" type="submit">Güncelle</button>
                </form>
                <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="action-button" type="submit" style="background-color:#d9534f">Sil</button>
                </form>
            </div>
        </td>
    </tr>
    @endforeach
    </tbody>
    </table>

    <div class="button-container button-container2">
        <button class="action-button" onclick="window.location='{{ route('students.create') }}'">Yeni Öğrenci Ekle</button>
    </div>

    </body>
    </html>
