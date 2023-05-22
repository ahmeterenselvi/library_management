@php
    $page='Duyurular';
    $pageTitle = 'Duyuru Listesi';
    $pageLink='announcements.index';
@endphp

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mb-4">
            <div class="col-md-12">
                <a href="{{ route('announcements.create') }}" class="btn btn-primary">Duyuru Ekle</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card-deck">
                    @foreach($announcements as $announcement)
                        <div class="card">
                            @if($announcement->image)
                                <img src="{{ asset('images/'.$announcement->image) }}" class="card-img-top" alt="Duyuru Resmi" height="500" width="500">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title"><b>{{ $announcement->title }}</b></h5>
                                <p class="card-text">{{ $announcement->description }}</p>
                                <p class="card-text"><small class="text-muted">{{ $announcement->date }}</small></p>
                                <div class="btn-group" role="group" aria-label="Duyuru İşlemleri">
                                    <a href="{{ route('announcements.edit', $announcement->id) }}" class="btn btn-primary">Düzenle</a>
                                    <form action="{{ route('announcements.destroy', $announcement->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Duyuruyu silmek istediğinize emin misiniz?')">Sil</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
