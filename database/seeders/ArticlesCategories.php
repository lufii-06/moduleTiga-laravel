<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArticlesCategories extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('article_categories')->insert([
            ['article_id' => 1, 'category_id' => 1],
            ['article_id' => 2, 'category_id' => 1],
            ['article_id' => 3, 'category_id' => 2],
        ]);
    }
}