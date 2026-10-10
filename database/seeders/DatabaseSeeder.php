<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Comment;
use App\Models\Genre;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Create the admin account.
        $admin = User::updateOrCreate(
            ['email' => 'admin@admin.com'],
            [
                'name' => 'Site Admin',
                'password' => Hash::make('password'),
                'role' => 'admin',
            ]
        );

        // 2. Create regular users.
        $users = User::factory(4)->create();

        // Include the admin among the users who can own books or write comments.
        $users->push($admin);

        // 3. Create the genres.
        $genreNames = [
            'Fantasy',
            'Mystery',
            'Romance',
            'Science Fiction',
            'Thriller',
            'Historical Fiction',
        ];

        $genres = collect();

        foreach ($genreNames as $name) {
            $genres->push(
                Genre::firstOrCreate(['name' => $name])
            );
        }

        // 4. Create two books for each genre.
        $books = collect();

        foreach ($genres as $genre) {
            foreach (range(1, 2) as $_) {
                $books->push(
                    Book::factory()->create([
                        'genre_id' => $genre->id,
                        'user_id' => $users->random()->id,
                    ])
                );
            }
        }

        // 5. Create two comments for each book.
        foreach ($books as $book) {
            Comment::factory(2)->create([
                'book_id' => $book->id,
                'user_id' => $users->random()->id,
            ]);
        }
    }
}
