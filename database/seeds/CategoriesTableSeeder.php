<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();

        DB::table('categories')->insert(
            [
                [
                    'name' => 'Mystery',
                    'description' => Str::words(50),
                ],
                [
                    'name' => 'Fiction',
                    'description' => Str::words(50),
                ],
                [
                    'name' => 'Non-fiction',
                    'description' => Str::words(50),
                ],
                [
                    'name' => 'Horror',
                    'description' => Str::words(50),
                ],
                [
                    'name' => 'Romance',
                    'description' => Str::words(50),
                ],
                [
                    'name' => 'Memoir',
                    'description' => Str::words(50),
                ],
            ]
        );
    }
}
