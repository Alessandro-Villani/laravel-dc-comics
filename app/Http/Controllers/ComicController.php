<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|string|unique:comics',
            'description' => 'nullable|string',
            'thumb' => 'nullable|url',
            'price' => 'required|numeric|min:0|max:9999',
            'series' => 'required|string',
            'sale_date' => 'required|date',
            'type' => 'required|string',
            'artists' => 'required|string',
            'writers' => 'required|string'
        ], [
            'title.required' => 'Il campo titolo è obbligatorio',
            'title.unique' => 'Il titolo è già stato inserito',
            'thumb.url' => 'È necessario inserire un URL valido',
            'price.required' => 'Il campo prezzo è obbligatorio',
            'price.numeric' => 'Il prezzo deve essere un valore numerico',
            'price.min' => 'Il prezzo minimo deve essere :min',
            'price.max' => 'Il prezzo massimo deve essere :max',
            'series.required' => 'Il campo Serie è obbligatorio',
            'sale_date.required' => 'Il campo Data di pubblicazione è obbligatorio',
            'sale_date.date' => 'È necessario inserire una data valida',
            'type.required' => 'Il campo Tipo è obbligatorio',
            'artists.required' => 'Il campo Artisti è obbligatorio',
            'writers.required' => 'Il campo writers è obbligatorio'
        ]);

        $data = $request->all();

        $new_comic = new Comic();
        $new_comic->fill($data);
        $new_comic->save();

        return to_route('comics.show', $new_comic->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $request->validate([
            'title' => ['required', 'string', Rule::unique('comics')->ignore($comic->id)],
            'description' => 'nullable|string',
            'thumb' => 'nullable|url',
            'price' => 'required|numeric|min:0|max:9999',
            'series' => 'required|string',
            'sale_date' => 'required|date',
            'type' => 'required|string',
            'artists' => 'required|string',
            'writers' => 'required|string'
        ], [
            'title.required' => 'Il campo titolo è obbligatorio',
            'title.unique' => 'Il titolo è già stato inserito',
            'thumb.url' => 'È necessario inserire un URL valido',
            'price.required' => 'Il campo prezzo è obbligatorio',
            'price.numeric' => 'Il prezzo deve essere un valore numerico',
            'price.min' => 'Il prezzo minimo deve essere :min',
            'price.max' => 'Il prezzo massimo deve essere :max',
            'series.required' => 'Il campo Serie è obbligatorio',
            'sale_date.required' => 'Il campo Data di pubblicazione è obbligatorio',
            'sale_date.date' => 'È necessario inserire una data valida',
            'type.required' => 'Il campo Tipo è obbligatorio',
            'artists.required' => 'Il campo Artisti è obbligatorio',
            'writers.required' => 'Il campo writers è obbligatorio'
        ]);

        $data = $request->all();
        $comic->fill($data);
        $comic->save();

        return to_route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return to_route('comics');
    }
}
