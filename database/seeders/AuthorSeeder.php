<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('authors')->insert([
            ['name' => 'John Doe', 'email' => 'johndoe@email.com'],
            ['name' => 'Jane Smith', 'email' => 'janesmith@email.com'],
        ]);
    }
}
