<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Guest\Comic;
use Illuminate\Http\Request;

class ComicsController extends Controller
{
    public function index()
    {
        $comics = Comic::all();
        return view('admin.comics.index', compact('comics'));
    }

    public function show($id)
    {
        $comic = Comic::findOrFail($id);
        return view('admin.comics.show', compact('comic'));
    }


    public function create()
    {
        return view('admin.comics.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $newComic = new Comic();
        $newComic->title = $data['title'];
        $newComic->description = $data['description'];
        $newComic->img_path = $data['thumb'];
        $newComic->price = $data['price'];
        $newComic->series = $data['series'];
        $newComic->sale_date = $data['sale_date'];
        $newComic->type = $data['type'];
        $newComic->save();

        return redirect()->route('comics.show', $newComic->id);
    }

    public function edit(Comic $comic)
    {
        return view('admin.comics.edit', compact('comic'));
    }

    public function update(Request $request, $id)
    {
        $form = $request->all();
        $comic = Comic::findOrFail($id);

        $comic->update($form);

        return redirect()->route('comics.show', $comic->id);
    }
}
