<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = new User();
		
		$user -> name = 'kevin admin';
		$user -> email = 'kevinadmin@gmail.com';
		$user -> password = bcrypt('123456');

		$user -> save();

		Post::factory(10)->create();
    }
}
