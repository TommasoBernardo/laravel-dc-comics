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
        //
        $formData = $request->all();

        $request->validate(
            [
                'title' => 'required|min:7|max:100',
                'description' => 'required|min:12',
                'thumb' => 'required|url|min:14',
                'price' => 'required|numeric',
                'series' => 'required|min:4|max:70',
                'sale_date' => 'required',
                'type' => 'required|min:4|max:50',
            ],
            [
                'title.required' => 'Inserisci un titolo',
                'title.min' => 'Il titolo inserito è troppo corto, inserirne un altro',
                'title.max' => 'titolo troppo lungo, inserirne un altro',
                'description.required' => 'inserisci una descrizione accurata',
                'description.min' => 'ci di spiace, i caratteri inseriti nella descrizione non soddisfano il valore minimo,aggiungi altro alla descrizione',
                'img_path.required' => 'metti una immagine a tuo piacimento',
                'img_path.url' => 'url non corretto, riprova!',
                'price.required' => 'inserisci un prezzo!!!',
                'price.numeric' => 'inserisci solo dei numeri e non lettere',
                'series.required' => 'inserisci la serie',
                'series.min' => 'la serie risulta troppo corta, adeguala!',
                'series.max' => 'serie troppo lunga, adeguala!',
                'sale_date.required' => 'inserisci la dat di uscita',
                'type.required' => 'inserisci il tipo di fumetto',
                'type.min' => 'il tipo inserito è troppo corto',
                'type.max' => 'il tipo inserito è troppo lungo',
            ]
        );

        $form = $request->all();
        $comic = Comic::findOrFail($id);

        $comic->update($form);

        return redirect()->route('comics.show', $comic->id);
    }

    public function destroy(Comic $comic)
    {
        //
        $comic->delete();

        return redirect()->route('comics.index');
    }
}
