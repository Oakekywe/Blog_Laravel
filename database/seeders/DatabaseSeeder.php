<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create(['name' => 'admin', 'email' => 'admin@gmail.com', 'is_admin' => 1, 'password' => 'qwer1234']);
        $mgmg = User::factory()->create(['name' => 'mgmg', 'username' => 'mgmg']);
        $aungaung = User::factory()->create(['name' => 'aungaung', 'username' => 'aungaung']);

        $frontend = Category::factory()->create(['name' => "frontend", 'slug' => 'frontend']);
        $backend = Category::factory()->create(['name' => "backend", 'slug' => 'backend']);

        Blog::factory(4)->create(["category_id" => $frontend->id, 'user_id' => $mgmg->id]);
        Blog::factory(4)->create(["category_id" => $backend->id, 'user_id' => $aungaung->id]);
    }
}
