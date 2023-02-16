@extends('home')

@section('main-content')
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-12">
                @include('partials.formEdit', [
                    'route' => 'comics.update',
                    'method' => 'PUT',
                    'comic' => $comic,
                ])
            </div>
        </div>
    </div>
@endsection
