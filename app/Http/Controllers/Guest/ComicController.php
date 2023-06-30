<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        // dd($comics);
        return view('welcome', compact('comics'));
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
            'title'           => 'string',
            'description'        => 'string',
            'thumb'          => 'string',
            'price'       => 'string',
            'series'          => 'string',
            'sale_date'   => 'string',
            'type'   => 'string',
        ]);

        $data = $request->all();

        // salvare i dati nel database
        $newPasta = new Comic();
        $newPasta->title = $data['title'];
        $newPasta->description = $data['description'];
        $newPasta->thumb = $data['thumb'];
        $newPasta->price = $data['price'];
        $newPasta->series = $data['series'];
        $newPasta->sale_date = $data['sale_date'];
        $newPasta->type = $data['type'];
        $newPasta->save();

        // $newPasta = Pasta::create($data);

        // return 'scommentare se serve debuggare questo metodo';
        return redirect()->route('comics.show', ['comic' => $newPasta->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        //
    }
}
