<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fumetti = config('comics');

        foreach ($fumetti as $fumetto) {

           $newFumetto = new Comic();
           $newFumetto->title = $fumetto["title"];
           $newFumetto->description = $fumetto["description"];
           $newFumetto->thumb = $fumetto["thumb"];
           $newFumetto->price = $fumetto["price"];
           $newFumetto->series = $fumetto["series"];
           $newFumetto->sale_date = $fumetto["sale_date"];
           $newFumetto->type = $fumetto["type"];
           $newFumetto->artists = implode(", ", $fumetto["artists"]);
           $newFumetto->writers = implode(", ", $fumetto["writers"]);

           $newFumetto->save();
        }
    }
}
