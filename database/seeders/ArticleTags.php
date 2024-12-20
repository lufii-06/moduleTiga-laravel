<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArticleTags extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('article_tags')->insert([
            ['article_id' => 1, 'tag_id' => 1],
            ['article_id' => 1, 'tag_id' => 2],
            ['article_id' => 2, 'tag_id' => 2],
            ['article_id' => 3, 'tag_id' => 3],
        ]);
    }
}