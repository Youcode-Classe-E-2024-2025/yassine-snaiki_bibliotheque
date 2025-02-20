<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('books')->insert([
            [
                'title' => 'The Great Gatsby',
                'author' => 'F. Scott Fitzgerald',
                'description' => 'A novel about the American dream, wealth, and love set in the 1920s.',
            ],
            [
                'title' => '1984',
                'author' => 'George Orwell',
                'description' => 'A dystopian novel depicting a totalitarian regime that suppresses free thought.',
            ],
            [
                'title' => 'To Kill a Mockingbird',
                'author' => 'Harper Lee',
                'description' => 'A classic novel addressing racial injustice and moral growth in the Deep South.',
            ],
            [
                'title' => 'Moby-Dick',
                'description' => 'A thrilling adventure about the pursuit of a great white whale.',
                'author' => 'Herman Melville',
            ],
            [
                'title' => 'Pride and Prejudice',
                'description' => 'A romantic novel about manners and marriage.',
                'author' => 'Jane Austen',
            ],
            [
                'title' => 'The Catcher in the Rye',
                'description' => 'A story about teenage alienation and rebellion.',
                'author' => 'J.D. Salinger',
            ],
            [
                'title' => 'The Hobbit',
                'description' => 'A fantasy adventure of Bilbo Baggins and the dragon Smaug.',
                'author' => 'J.R.R. Tolkien',
            ],
            [
                'title' => 'War and Peace',
                'description' => 'A historical novel about Russia during the Napoleonic Wars.',
                'author' => 'Leo Tolstoy',
            ],
            [
                'title' => 'Crime and Punishment',
                'description' => 'A psychological thriller about guilt and redemption.',
                'author' => 'Fyodor Dostoevsky',
            ],
            [
                'title' => 'Brave New World',
                'description' => 'A futuristic novel exploring a dystopian utopia.',
                'author' => 'Aldous Huxley',
            ],
        ]);
    }
}
