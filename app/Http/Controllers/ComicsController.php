<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;


class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|unique:comics|max:50|min:5',
            'price' => 'numeric|min:0|max:999',
            'series' => 'required|string',
            'type' => 'required|string',
            'sale_date' => 'date',
            'logo' => 'url'
        ]);

        $data = $request->all();
        $comic = new Comic();
        $comic->fill($data);
        $comic->save();

        return redirect()->route('comics.show', $comic);
    }

    /**
     * Display the specified resource.
     *
     * @param  Comic $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Comic $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {

        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Comic $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $request->validate([
            'title' => 'required|string|unique:comics|max:50|min:5',
            'price' => 'numeric|min:0|max:999',
            'series' => 'required|string',
            'type' => 'required|string',
            'sale_date' => 'date',
            'logo' => 'url'
        ], [
            'required' => 'Il campo :attribute è obbligatorio.',
            'title.min' => 'Titolo troppo corto',
            'title.max' => 'Titolo troppo lungo',
            'url' => 'Non hai inserito un immagine corretta',
            'date' => 'Inserisci una data valida.',
            'price.max' => 'Il massimo è 999',
            'price.min' => 'Non puoi inserire 0',
            'title.unique' => "$request->comic->title esiste già.",

        ]);

        $data = $request->all();
        $comic->update($data);

        return redirect()->route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Comic $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index')->with('message', "$comic->title eliminato con successo!")->with('type', 'success');
    }
}
