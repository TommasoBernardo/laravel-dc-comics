<form action="{{ route($route, $comic->id) }}" method="POST">
    @csrf

    <div class="mb-5">
        <label class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title">
    </div>

    <div class="mb-5">
        <label class="form-label">Series</label>
        <input type="text" class="form-control" id="series" name="series">
    </div>

    <div class="mb-5">
        <label>Sale Date</label>
        <input type="date" name="sale_date" id="sale_date" class="form-control">
    </div>

    <div class="mb-5">
        <label>Price</label>
        <input type="number" class="form-control" id="price" name="price">
    </div>

    <div class="mb-5">
        <label class="form-label">Type</label>
        <input type="text" class="form-control" id="type" name="type">
    </div>

    <div class="mb-5">
        <label class="form-label">Description</label>
        <input type="text" id="description" class="form-control" name="description">
    </div>

    <div class="mb-5">
        <label class="form-label">img-path </label>
        <input type="text" class="form-control" id="img_path" name="img_path">
    </div>

    <button class="btn btn-primary">push</button>
</form>