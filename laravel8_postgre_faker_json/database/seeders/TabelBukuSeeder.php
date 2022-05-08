<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TabelBukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

            \DB::table('buku')->truncate();

            for ($i=0; $i < 100; $i++) { 
                DB::table('buku')->insert([
                    'judul' => $faker->sentence(3),
                    'penulis' => $faker->name,
                    'stok' => $faker->numberBetween(1, 10),
                    'buku_terjemahan' => $faker->randomElement([true, false]),
                    'deskripsi' => $faker->text(100),
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            }
    }
}
