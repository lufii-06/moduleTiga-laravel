<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('articles')->insert([
            [
                'title' => 'Laravel for Beginners',
                'content' => 'A beginner\'s guide to Laravel',
                'author_id' => 1,
            ],
            [
                'title' => 'PHP for Advanced Users',
                'content' => 'Advanced PHP programming',
                'author_id' => 2,
            ],
            [
                'title' => 'Introduction to MVC',
                'content' => 'Basic MVC concepts in PHP',
                'author_id' => 1,
            ],
        ]);
    }
}