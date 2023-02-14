@extends('layouts.app')


@section('main-content')
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">title</label>
                            <input type="text" class="form-control" name="title">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">description</label>
                            <textarea name="description"></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">img_path</label>
                            <input type="text" class="form-control" name="img_path">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">price</label>
                            <input type="text" class="form-control" name="price">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">series</label>
                            <input type="text" class="form-control" name="series">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">sale_date</label>
                            <input type="text" class="form-control" name="sale_date">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">type</label>
                            <input type="text" class="form-control" name="type">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection