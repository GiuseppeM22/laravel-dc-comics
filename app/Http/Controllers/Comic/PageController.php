<?php

namespace App\Http\Controllers\Comic;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fumetti = Comic::all();

        return view("fumetto.index", compact("fumetti") );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("fumetto.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           $data = $request->all();

           $newFumetto = new Comic();
           $newFumetto->title = $data["title"];
           $newFumetto->description = $data["description"];
           $newFumetto->thumb = $data["thumb"];
           $newFumetto->price = $data["price"];
           $newFumetto->series = $data["series"];
           $newFumetto->sale_date = $data["sale_date"];
           $newFumetto->type = $data["type"];
           $newFumetto->save();

           return redirect()->route('fumetto.index', $newFumetto->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $fumetto
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $fumetto)
    {
        return view("fumetto.show", compact("fumetto") );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
