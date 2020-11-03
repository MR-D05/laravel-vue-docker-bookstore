<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('products')->insert(
            [
                [
                    'name' => 'Book 1',
                    'description' => 'A mystery book.',
                    'price' => rand(1000000, 100000000),
                    'category_id' => 1,
                    'photo' => 'images/books/mystery.jpg',
                ],
                [
                    'name' => 'Book 2',
                    'description' => 'A fiction book.',
                    'price' => rand(1000000, 100000000),
                    'category_id' => 2,
                    'photo' => 'images/books/fiction.jpg',
                ],
                [
                    'name' => 'Book 3',
                    'description' => 'A non-fiction book.',
                    'price' => rand(1000000, 100000000),
                    'category_id' => 3,
                    'photo' => 'images/books/non-fiction.jpg',
                ],
                [
                    'name' => 'Book 4',
                    'description' => 'A horror book.',
                    'price' => rand(1000000, 100000000),
                    'category_id' => 4,
                    'photo' => 'images/books/horror.jpg',
                ],
                [
                    'name' => 'Book 5',
                    'description' => 'A romance book.',
                    'price' => rand(1000000, 100000000),
                    'category_id' => 5,
                    'photo' => 'images/books/romance.jpg',
                ],
                [
                    'name' => 'Book 6',
                    'description' => 'A memoir.',
                    'price' => rand(1000000, 100000000),
                    'category_id' => 6,
                    'photo' => 'images/books/memoir.jpg',
                ],
                [
                    'name' => 'Book 7',
                    'description' => 'Another mystery book.',
                    'price' => rand(1000000, 100000000),
                    'category_id' => 1,
                    'photo' => 'images/books/mystery.jpg',
                ],
            ]
        );
    }
}
