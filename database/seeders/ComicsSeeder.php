<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ComicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $games = config('db.comics'); // < -- crea prima i dati nel file config/db.php

        foreach ($comics as $comic) {
            $newComic = new Comic();
            $newComic->title = $comic['title'];
            $newComic->description = $comic['description'];
            $newComic->thumb = $comic['thumb'];
            $newComic->price = $comic['price'];
            $newComic->type = $comic['type'];
            $newComic->series = $comic['series'];
            $newComic->artists = $comic['artists'];
            $newComic->writers = $comic['writers'];
            $newComic->sales_date = $comic['sales_date'];
            $newComic->save();
        }
    }
}
