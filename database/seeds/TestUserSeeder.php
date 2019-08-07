<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class TestUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => 'teste@lessclick.api.net',
            'password' => Hash::make('password'),
            'token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2NTE4NTg2MiwibmJmIjoxNTY1MTg1ODYyLCJqdGkiOiJhdGUwWUVIVUlMd05UOXljIiwic3ViIjoxLCJwcnYiOiI4N2UwYWYxZWY5ZmQxNTgxMmZkZWM5NzE1M2ExNGUwYjA0NzU0NmFhIn0.cNwBy9jHubKjVEa13HUMf0ceCoTK8MUjgW1KI7Wa96o',
        ]);
    }
}
