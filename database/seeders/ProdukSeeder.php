<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 20) as $index) {
            DB::table('produk')->insert([
                'nama_produk' => $faker->words(2, true),
                'kategori' => $faker->numberBetween(1, 3),
                'harga_produk1' => $faker->numberBetween(50000, 150000),
                'harga_produk2' => $faker->numberBetween(50000, 150000),
                'harga_produk3' => $faker->numberBetween(50000, 150000),
                'harga_produk4' => $faker->numberBetween(50000, 150000),
                'harga_produk5' => $faker->numberBetween(50000, 150000),
                'foto_produk1' => $faker->imageUrl(640, 480, 'products', true, 'Faker'),
                'foto_produk2' => $faker->optional()->imageUrl(640, 480, 'products', true, 'Faker'),
                'foto_produk3' => $faker->optional()->imageUrl(640, 480, 'products', true, 'Faker'),
                'foto_produk4' => $faker->optional()->imageUrl(640, 480, 'products', true, 'Faker'),
                'deskripsi' => '<p><strong>' . $faker->sentence(3) . '</strong>&nbsp;' . $faker->paragraph . '</p>',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
