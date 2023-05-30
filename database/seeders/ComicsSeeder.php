<?php

namespace Database\Seeders;

use config\db;
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
            $newGame = new Game();
            $newGame->name = $game['name'];
            $newGame->image = $game['image'];
            $newGame->description = $game['description'];
            $newGame->price = $game['price'];
            $newGame->release_date = $game['release_date'];
            $newGame->platform = $game['platform'];
            $newGame->has_demo = $game['has_demo'];
            $newGame->save();
    }
}
