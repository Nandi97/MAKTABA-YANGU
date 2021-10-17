<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'Admin',
            'description' => 'Has control over the entire Maktaba Yangu system'
        ]);
        DB::table('roles')->insert([
            'name' => 'Librarian',
            'description' => 'Can create, edit and delete books and students'
        ]);
        DB::table('roles')->insert([
            'name' => 'Student',
            'description' => 'Can borrow and return books'
        ]);
    }
}