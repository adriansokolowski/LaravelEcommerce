<?php

namespace Database\Seeders;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        Category::insert([
            ['name' => 'Laptopy', 'slug' => 'laptopy', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Komputery', 'slug' => 'komputery', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Telefony komórkowe', 'slug' => 'telefony-komorkowe', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Tablety', 'slug' => 'tablety', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Telewizory', 'slug' => 'telewizory', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Kamerki inernetowe', 'slug' => 'kamerki-inernetowe', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Urządzenia', 'slug' => 'urzadzenia', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
