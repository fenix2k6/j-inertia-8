<?php

namespace Database\Seeders;

use \App\Models\User;
use \App\Models\Note;
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
        User::factory(10)->create([
            'email' => 'i@admin.com',
            'password' => bcrypt('123456')

        ]);

        Note::factory(30)->create();
    }
}
