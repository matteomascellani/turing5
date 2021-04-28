<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        date_default_timezone_set("Europe/Rome");

        DB::table("movies")->insert([
            "titolo" => "Saw - L'enigmista",
            "descrizione" => "Due uomini si svegliano incatenati in una stanza e trovano un corpo senza vita al centro di quello spazio. Una voce sconosciuta li li schiera, senza via di scampo, l'uno contro l'altro.",
            "regia" => "James Wan",
            "anno" => 2004,
            "durata" => date("H:i:s", strtotime("01:43:00")),
            "genere" => "Horror/Thriller",
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s")
        ]);

        DB::table("movies")->insert([
            "titolo" => "Matrix",
            "descrizione" => "Esistono due realtà: una è l'esistenza che conduciamo ogni giorno, l'altra è nascosta. Neo vuole scoprire la verità su Matrix, mondo virtuale elaborato al computer creato per tenere sotto controllo le persone. Morpheus potrebbe aiutarlo.",
            "regia" => "Lana Wachowski, Lilly Wachowski",
            "anno" => 1999,
            "durata" => date("H:i:s", strtotime("02:16:00")),
            "genere" => "Sci-fi/Azione",
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s")
        ]);

        DB::table("movies")->insert([
            "titolo" => "La cosa",
            "descrizione" => "La Cosa, una sostanza vivente che le radiazioni atomiche hanno dissepolto dopo millenni di silenzio sotto i ghiacci eterni dell'Antartide, aggredisce un gruppo di scienziati la cui base è dislocata in Alaska.",
            "regia" => "John Carpenter",
            "anno" => 1982,
            "durata" => date("H:i:s", strtotime("01:49:00")),
            "genere" => "Horror/Sci-fi",
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s")
        ]);

        DB::table("movies")->insert([
            "titolo" => "Il colore venuto dallo spazio",
            "descrizione" => "Quando un meteorite cade nel cortile della loro fattoria, Nathan Gardner e la sua famiglia combattono un alieno mutante che controlla le loro menti e i loro corpi, trasformando la loro vita tranquilla in un incubo.",
            "regia" => "Richard Stanley",
            "anno" => 2019,
            "durata" => date("H:i:s", strtotime("01:51:00")),
            "genere" => "Horror/Sci-fi",
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s")
        ]);

        DB::table("movies")->insert([
            "titolo" => "The Mist",
            "descrizione" => "Una violenta tempesta si abbatte su una cittadina del Maine. A causa di questo fenomeno alcuni cittadini sono intrappolati in un supermercato, ma ben presto scoprono la presenza di misteriose creature trasportate da una fitta nebbia.",
            "regia" => "Frank Darabont",
            "anno" => 2007,
            "durata" => date("H:i:s", strtotime("02:06:00")),
            "genere" => "Horror/Thriller",
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s")
        ]);
    }
}
