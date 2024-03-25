<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $books = [
            [
                'title' => 'To Kill a Mockingbird',
                'author' => 'Harper Lee',
                'total_page' => 336,
                'publication_year' => 1960,
                'isbn' => '978-0061120084',
                'category_id' => 3,
                'description' => 'A classic novel that explores themes of racial injustice and moral growth.',
                'cover' => 'tokillamockingbird.jpg'
            ],
            [
                'title' => '1984',
                'author' => 'George Orwell',
                'total_page' => 328,
                'publication_year' => 1949,
                'isbn' => '978-0451524935',
                'category_id' => 3,
                'description' => 'A dystopian novel depicting a totalitarian society and the consequences of thought control.',
                'cover' => '1984.jpg'
            ]
        ];

        DB::table('books')->insert($books);
    }

}
