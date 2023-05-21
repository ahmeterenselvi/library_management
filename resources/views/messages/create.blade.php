@php
    $page='Mesajlar';
    $pageTitle = 'Mesaj Gönder';
    $pageLink='messages.index';
@endphp

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Yeni Mesaj Oluştur</h1>
                <form action="{{ route('messages.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="recipient">Alıcı</label>
                        <input type="email" class="form-control" id="recipient" name="recipient" required>
                    </div>
                    <div class="form-group">
                        <label for="title">Başlık</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                    <div class="form-group">
                        <label for="content">Mesaj İçeriği</label>
                        <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Gönder</button>
                </form>
            </div>
        </div>
    </div>
@endsection
