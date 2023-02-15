@extends('layouts.app')

@section('title', 'DC-' . $comic->title)
@section('main-content')
    <main>
        <div class="container mt-5 ">
            <div class="row mt-3">
                <div class="col-6 text-center">
                    <img src="{{ $comic->img_path }}" alt="{{ $comic->title }}" class="img-fluid">
                    <h6 class="mb-2 mt-2">{{ $comic->price }}&euro; - {{ $comic->sale_date }}</h6>
                    <a href="{{ route('comics.index') }}" class="btn btn-primary">Back</a>
                </div>
                <div class="col-6">
                    <h2 class="mb-3"> {{ $comic->title }}</h2>
                    <h5>{{ $comic->series }} - {{ $comic->type }}</h5>
                    <p>{{ $comic->description }}</p>
                </div>

            </div>
        </div>
    </main>

@endsection
