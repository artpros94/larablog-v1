@extends('layouts.layout')

@section('title')
    Пост 
@endsection


@section('content')

<div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
    <div class="col p-4 d-flex flex-column position-static">
        <h3 class="mb-4 h1">{{ $post['title'] }}</h3>
        <p class="h3">Тема поста: {{ $post['category'] }} </p>
        <p class="card-text mb-auto pt-3 pb-3">
            {{ $post['text'] }}
        </p>
        <div class="row">
            <div class="col-8">
                <div class="mb-1 text-muted">{{ $post['create_at'] }}</div>
            </div>
            <div class="col-4">
                <a href="#" class="btn btn-warning me-3">Редактировать</a>
                <a href="#" class="btn btn-danger">Удалить</a>
            </div>
        </div>
    </div>
</div>

@endsection