@php
    $page='Duyurular';
    $pageTitle = 'Duyuru Düzenleme';
    $pageLink='announcements.index';
@endphp
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('announcements.update', $announcement->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="title">Başlık</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ $announcement->title }}" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Açıklama</label>
                                <textarea class="form-control" id="description" name="description" rows="4" required>{{ $announcement->description }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="image">Resim</label>
                                <input type="file" class="form-control-file" id="image" name="image">
                            </div>
                            <button type="submit" class="btn btn-primary">Kaydet</button>
                            <a href="{{ route('announcements.index') }}" class="btn btn-secondary">Geri Dön</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
