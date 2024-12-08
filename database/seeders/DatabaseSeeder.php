<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\TagSeader;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\ArticleTags;
use Database\Seeders\AuthorSeeder;
use Database\Seeders\ArticleSeeder;
use Database\Seeders\CategoriesSeeder;
use Database\Seeders\ArticlesCategories;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            AuthorSeeder::class,
            CategoriesSeeder::class,
            ArticleSeeder::class,
            TagSeader::class,
            ArticleTags::class,
            ArticlesCategories::class,
        ]);
    }
}