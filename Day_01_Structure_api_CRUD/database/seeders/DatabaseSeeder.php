<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::factory()->create();

        // 100 chunks of 1000 posts each = 100,000 posts
        for ($i = 0; $i < 100; $i++) {
            Post::factory(1000)->create([
                'user_id' => $user->id
            ]);
        }
    }
}
