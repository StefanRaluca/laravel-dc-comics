<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd(Comic::all());
        return view('comics.index', ['comics' => Comic::orderByRaw('id')->paginate(4)]);
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
    public function store(StoreComicRequest $request)
    {
        //$data = $request->all();
        /* 
                $comic = new Comic();
                $comic->title = $data['title'];
                $comic->price = $data['price'];
                $comic->thumb = $data['thumb'];
                $comic->series = $data['series'];
                $comic->type = $data['type'];
                $comic->description = $data['description'];
                $comic->save(); */

        $validate_date = $request->validated();

        Comic::create($validate_date);
        return to_route('comics.index');
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
    public function update(UpdateComicRequest $request, Comic $comic)
    {
        //dd($request->all());
        //$comic = $request->all();
        // $comic->update($request->all());


        $validate_date = $request->validated();

        $comic->update($validate_date);

        return to_route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return to_route('comics.index');
    }
}