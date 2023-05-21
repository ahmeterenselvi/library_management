@php
    $page='Mesajlar';
    $pageTitle = 'Mesaj Listesi';
    $pageLink='messages.index';
@endphp

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Mesajlar</h1>
                <table class="table">
                    <thead>
                    <tr>
                        <th>Gönderen</th>
                        <th>Başlık</th>
                        <th>Tarih</th>
                        <th>Okundu</th>
                        <th>İşlemler</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($messages as $message)
                        <tr>
                            <td>{{ $message->sender }}</td>
                            <td>{{ $message->title }}</td>
                            <td>{{ $message->created_at }}</td>
                            <td>{{ $message->is_read ? 'Evet' : 'Hayır' }}</td>
                            <td>
                                <a href="{{ route('messages.show', $message->id) }}" class="btn btn-primary">Görüntüle</a>
                                <a href="{{ route('messages.edit', $message->id) }}" class="btn btn-secondary">Düzenle</a>
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
            </div>
        </div>
    </div>
@endsection
