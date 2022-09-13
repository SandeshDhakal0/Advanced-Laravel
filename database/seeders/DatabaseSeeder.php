<?php

namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use Database\Seeders\UserFactory;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // $this->call(UserFactory::class);
        // User::factory()->count(3)->create();
        // factory(App\Team::class, 10)->create();
        // factory(App\User::class, 25)->create();
        // factory(App\Ticket::class, 500)->create();
        // factory(App\Point::class, 2000)->create();
        // $users = User::factory()->count(3)->create();
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
        ]);

    }
}