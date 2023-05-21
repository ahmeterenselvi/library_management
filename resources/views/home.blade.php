@php
    $page = 'Ana Sayfa';
    $pageTitle = 'Ana Sayfa';
    $pageLink = 'home';
@endphp

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card bg-primary text-white mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Kitaplar</h5>
                                <p class="card-text">Kütüphanedeki kitapların listesini görüntüleyin ve yönetin.</p>
                                <a href="{{ route('books.index') }}" class="btn btn-light">Kitap Listesi</a>
                                <a href="{{ route('books.create') }}" class="btn btn-light">Kitap Ekle</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card bg-success text-white mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Öğrenciler</h5>
                                <p class="card-text">Kayıtlı öğrencilerin listesini görüntüleyin ve yönetin.</p>
                                <a href="{{ route('students.index') }}" class="btn btn-light">Öğrenci Listesi</a>
                                <a href="{{ route('students.create') }}" class="btn btn-light">Öğrenci Ekle</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card bg-info text-white mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Yöneticiler</h5>
                                <p class="card-text">Sistemdeki yöneticilerin listesini görüntüleyin ve yönetin.</p>
                                <a href="{{ route('admins.index') }}" class="btn btn-light">Yönetici Listesi</a>
                                <a href="{{ route('admins.create') }}" class="btn btn-light">Yönetici Ekle</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card bg-warning text-white mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Duyurular</h5>
                                <p class="card-text">Güncel duyuruları görüntüleyin ve yeni duyuru ekleyin.</p>
                                <a href="{{ route('announcements.index') }}" class="btn btn-light">Duyuru Listesi</a>
                                <a href="{{ route('announcements.create') }}" class="btn btn-light">Duyuru Ekle</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card bg-secondary text-white mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Mesajlar</h5>
                                <p class="card-text">Öğrencilerden gelen mesajları görüntüleyin ve yanıtlayın.</p>
                                <a href="{{ route('messages.index') }}" class="btn btn-light">Mesaj Listesi</a>
                                <a href="{{ route('messages.create') }}" class="btn btn-light">Mesaj Yaz</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
