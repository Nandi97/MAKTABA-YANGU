<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Borrower;
use App\Models\Role;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([RoleSeeder::class]);
        // Role::factory(3)->create();
        User::factory(12)->create();
        Book::factory(10)->create();
        Borrower::factory(12)->create();
    }
}