<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mesaj Listesi</title>
    <style>
        /* CSS Styles */
        .container {
            margin-top: 30px;
        }

        h1 {
            margin-bottom: 20px;
        }

        .table th,
        .table td {
            vertical-align: middle;
        }

        .button-container {
            margin-top: 20px;
            text-align: center;
        }

        .action-button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        .action-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
@php
    $page = 'Mesajlar';
    $pageTitle = 'Mesaj Listesi';
    $pageLink = 'messages.index';
@endphp

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{ $page }}</h1>
                <table class="table">
                    <thead>
                    <tr>
                        <th>Gönderen</th>
                        <th>Alıcı</th>
                        <th>Başlık</th>
                        <th>İçerik</th>
                        <th>Okundu</th>
                        <th>İşlemler</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($messages as $message)
                        <tr>
                            <td>{{ $message->sender }}</td>
                            <td>{{ $message->receiver }}</td>
                            <td>{{ $message->title }}</td>
                            <td>{{ $message->message }}</td>
                            <td>{{ $message->read ? 'Evet' : 'Hayır' }}</td>
                            <td>
                                <form action="{{ route('messages.update', $message->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="btn btn-success">Okundu</button>
                                </form>
                                <form action="{{ route('messages.destroy', $message->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Emin misiniz?')">Sil</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="button-container">
                    <button class="action-button" onclick="window.location='{{ route('messages.create') }}'">Yeni Mesaj Gönder</button>
                </div>
            </div>
        </div>
    </div>
@endsection
</body>

</html>
