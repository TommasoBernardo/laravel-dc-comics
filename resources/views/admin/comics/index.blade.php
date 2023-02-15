@extends('layouts.app')

@section('main-content')
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 mt-3">
                    <a href="{{ route('comics.create') }}" class="btn btn-primary btn-sm">new-comic</a>
                </div>
                <table class="table table-dark table-hover mt-4 border border-primary border border-5 ">
                    <thead>
                        <tr>
                            <th role="col">ID</th>
                            <th role="col">Title</th>
                            <th role="col">Price</th>
                            <th role="col">Sale Date</th>
                            <th role="col">Type</th>
                            <th role="col">Operation</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($comics as $comic)
                            <tr>
                                <th scope="row">{{ $comic->id }}</th>
                                <td>{{ $comic->title }}</td>
                                <td>{{ $comic->price }}&euro;</td>
                                <td>{{ $comic->sale_date }}</td>
                                <td>{{ $comic->type }}</td>
                                <td>
                                    <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary btn-sm">see
                                        more</a>
                                    <a class="btn btn-sm btn-outline-warning"
                                        href="{{ route('comics.edit', $comic->id) }}">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
@endsection
