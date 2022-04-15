<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Product;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        User::create([
            'fullname' => 'BayuDC',
            'username' => 'bayudc',
            'password' => bcrypt('bay12345'),
            'role' => 'manager'
        ]);
        User::create([
            'fullname' => 'Someone',
            'username' => 'someone',
            'password' => bcrypt('12345678')
        ]);

        Product::create([
            'name' => 'Chocolate Candy',
            'price' => 500,
            'stock' => 50
        ]);
        Product::create([
            'name' => 'Box of Tissues',
            'price' => 4000,
            'stock' => 10
        ]);
        Product::create([
            'name' => 'Drawing Book',
            'price' => 2500,
            'stock' => 12
        ]);
    }
}
