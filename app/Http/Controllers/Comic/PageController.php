<?php

namespace App\Http\Controllers\Comic;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

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

            $request->validate([
                "title" => "required|min:5|max:10",
                "thumb" => "required|min:5",
                "price" => "required|min:4|max:6",
                "series" => "required|min:3|max:100",
                "sale_date" => "required",
                "type" => "required"

            ]);

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
    public function edit(Comic $fumetto)
    {
        return view("fumetto.edit", compact("fumetto") );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $fumetto)
    {
            
            $data = $request->all();

            $fumetto->title = $data["title"];
            $fumetto->description = $data["description"];
            $fumetto->thumb = $data["thumb"];
            $fumetto->price = $data["price"];
            $fumetto->series = $data["series"];
            $fumetto->sale_date = $data["sale_date"];
            $fumetto->type = $data["type"];
            $fumetto->update();

        return view("fumetto.show", compact("fumetto") );


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $fumetto)
    {
        $fumetto->delete();
        return redirect()->route('fumetto.index');
    }
}
