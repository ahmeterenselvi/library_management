@php
    $page='Kitap';
    $pageTitle = 'Kitap Listesi';
    $pageLink='books.index';
@endphp

@extends('layouts.app')
    <!DOCTYPE html>
<html lang="tr">
<head>
    <title>Kitap Listesi</title>
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
@section('content')
    <tr>
        <td colspan="6">
            <input type="text" id="search" placeholder="Başlık ile arama yapın">
        </td>
    </tr>

    <table class="table">
        <thead>
        <tr>
            <th>Başlık</th>
            <th>Yazar</th>
            <th>Sayfa Sayısı</th>
            <th>Yayınevi</th>
            <th>Resim</th>
            <th>Durum</th>
            <th>İşlemler</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($books as $book)
            <tr>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->page_count }}</td>
                <td>{{ $book->publisher }}</td>
                <td>
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('images/' . $book->image) }}" alt="{{ $book->title }}"
                             class="img-thumbnail mr-2" style="max-width: 50px; height: auto;">
                    </div>
                </td>
                <td class="{{ $book->available ? 'available-yes' : 'available-no' }}">
                    {{ $book->available ? 'Ödünç Almaya Uygun' : 'Ödünç Almaya Uygun Değil' }}
                </td>
                <td>
                    <div class="button-container">
                        <form action="{{ route('books.edit', $book->id) }}" method="get">
                            @csrf
                            <button class="action-button" type="submit">Güncelle</button>
                        </form>
                        <form action="{{ route('books.destroy', $book->id) }}" method="POST">
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
        <button class="action-button" onclick="window.location='{{ route('books.create') }}'">Yeni Kitap Ekle</button>
    </div>
@endsection
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var input = document.getElementById("search");
        input.addEventListener("keyup", function (event) {
            var filter = event.target.value.toUpperCase();
            var table = document.getElementsByClassName("table")[0];
            var rows = table.getElementsByTagName("tr");
            for (var i = 0; i < rows.length; i++) {
                var titleCell = rows[i].getElementsByTagName("td")[0];
                if (titleCell) {
                    var titleValue = titleCell.textContent || titleCell.innerText;
                    if (titleValue.toUpperCase().indexOf(filter) > -1) {
                        rows[i].style.display = "";
                    } else {
                        rows[i].style.display = "none";
                    }
                }
            }
        });
    });
</script>

</body>
</html>
