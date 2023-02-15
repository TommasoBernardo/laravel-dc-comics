@extends('layouts.app')

@section('title', 'DC-' . $comic->title)
@section('main-content')
    <main>
        <div class="container mt-5 ">
            <div class="row mt-3">
                <div class="col-9 text-center">
                    <h2 class="mb-3"> {{ $comic->title }}</h2>
                    <img src="{{ $comic->img_path }}" alt="{{ $comic->title }}" class="img-fluid">
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('comics.index') }}" class="btn btn-primary">Back</a>
                        <h6 class="mb-2 mt-2">{{ $comic->price }}&euro; - {{ $comic->sale_date }}</h6>
                        <h5>{{ $comic->series }} - {{ $comic->type }}</h5>
                    </div>

                </div>

                <div class="col-3">
                    <p>{{ $comic->description }}</p>
                </div>

            </div>
        </div>
    </main>

@endsection
