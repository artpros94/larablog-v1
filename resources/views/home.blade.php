@extends('layouts.layout')

@section('title', 'Larablog V1')

@section('content')

    <p class="h3 mb-3 mt-3">
        Количество постов
        <span>{{ count($posts) }}</span>
    </p>

    @foreach($posts as $post)
    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
            <h3 class="mb-0">{{ $post['title'] }}</h3>
            <p class="card-text mb-auto pt-3 pb-3">              
                @if(strlen($post['text']) > 200)

                    @php 
                        $text = '';
                        for($i = 0; $i < 50; $i++){
                            $text .= $post['text'][$i];
                        }
                        echo $text . '...';
                    @endphp

                @else
                    {{ $post['text'] }}
                @endif
            </p>
            <div class="row">
                <div class="col-10">
                    <div class="mb-1 text-muted">{{ $post['created_at'] }}</div>
                </div>
                <div class="col-2">
                    <a href="{{ route('showOnePost', ['id' => $post['id']]) }}" class="stretched-link">Читать далее...</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach

@endsection