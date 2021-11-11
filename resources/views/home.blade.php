@extends('layouts.layout')

@section('title', 'Larablog V1')

@section('content')

<div class="px-4 pt-1 my-1 text-center border-bottom">
    <h1 class="display-4 fw-bold">Centered screenshot</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
    </div>
  </div>

    <p class="h3 mb-3 mt-3">
        Количество постов
        <span>33</span>
    </p>

<div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
    <div class="col p-4 d-flex flex-column position-static">
        <h3 class="mb-0">POST 1</h3>
        <p class="card-text mb-auto pt-3 pb-3">This is a wider card with supporting text below as a natural lead-in to additional contThis is a wider card with supporting text below as a natural lead-in to additional content.ent.This is a wider card with supporting text below as a natural lead-in to additional content.This is a wThis is a wider card with supporting text below as a natural lead-in to additional content.ider card with supporting text below as a natural lead-in to additional content.This is a wider card with supporting text below as a natural lead-in to additional content.</p>
        <div class="row">
            <div class="col-10">
                <div class="mb-1 text-muted">12.12.2021</div>
            </div>
            <div class="col-2">
                <a href="{{ route('showOnePost', ['id' => 1]) }}" class="stretched-link">Читать далее...</a>
            </div>
        </div>
    </div>
</div>
<div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
    <div class="col p-4 d-flex flex-column position-static">
        <h3 class="mb-0">POST 2</h3>
        <p class="card-text mb-auto pt-3 pb-3">This is a wider card with supporting text below as a natural lead-in to additional contThis is a wider card with supporting text below as a natural lead-in to additional content.ent.This is a wider card with supporting text below as a natural lead-in to additional content.This is a wThis is a wider card with supporting text below as a natural lead-in to additional content.ider card with supporting text below as a natural lead-in to additional content.This is a wider card with supporting text below as a natural lead-in to additional content.</p>
        <div class="row">
            <div class="col-10">
                <div class="mb-1 text-muted">12.12.2021</div>
            </div>
            <div class="col-2">
                <a href="#" class="stretched-link">Читать далее...</a>
            </div>
        </div>
    </div>
</div>
<div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
    <div class="col p-4 d-flex flex-column position-static">
        <h3 class="mb-0">POST 3</h3>
        <p class="card-text mb-auto pt-3 pb-3">This is a wider card with supporting text below as a natural lead-in to additional contThis is a wider card with supporting text below as a natural lead-in to additional content.ent.This is a wider card with supporting text below as a natural lead-in to additional content.This is a wThis is a wider card with supporting text below as a natural lead-in to additional content.ider card with supporting text below as a natural lead-in to additional content.This is a wider card with supporting text below as a natural lead-in to additional content.</p>
        <div class="row">
            <div class="col-10">
                <div class="mb-1 text-muted">12.12.2021</div>
            </div>
            <div class="col-2">
                <a href="#" class="stretched-link">Читать далее...</a>
            </div>
        </div>
    </div>
</div>
<div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
    <div class="col p-4 d-flex flex-column position-static">
        <h3 class="mb-0">POST 4</h3>
        <p class="card-text mb-auto pt-3 pb-3">This is a wider card with supporting text below as a natural lead-in to additional contThis is a wider card with supporting text below as a natural lead-in to additional content.ent.This is a wider card with supporting text below as a natural lead-in to additional content.This is a wThis is a wider card with supporting text below as a natural lead-in to additional content.ider card with supporting text below as a natural lead-in to additional content.This is a wider card with supporting text below as a natural lead-in to additional content.</p>
        <div class="row">
            <div class="col-10">
                <div class="mb-1 text-muted">12.12.2021</div>
            </div>
            <div class="col-2">
                <a href="#" class="stretched-link">Читать далее...</a>
            </div>
        </div>
    </div>
</div>
<div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
    <div class="col p-4 d-flex flex-column position-static">
        <h3 class="mb-0">POST 5</h3>
        <p class="card-text mb-auto pt-3 pb-3">This is a wider card with supporting text below as a natural lead-in to additional contThis is a wider card with supporting text below as a natural lead-in to additional content.ent.This is a wider card with supporting text below as a natural lead-in to additional content.This is a wThis is a wider card with supporting text below as a natural lead-in to additional content.ider card with supporting text below as a natural lead-in to additional content.This is a wider card with supporting text below as a natural lead-in to additional content.</p>
        <div class="row">
            <div class="col-10">
                <div class="mb-1 text-muted">12.12.2021</div>
            </div>
            <div class="col-2">
                <a href="#" class="stretched-link">Читать далее...</a>
            </div>
        </div>
    </div>
</div>

@endsection