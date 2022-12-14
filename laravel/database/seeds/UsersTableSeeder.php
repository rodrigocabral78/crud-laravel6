<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->insert([
        //     'name' => 'Administrator',
        //     'email' => 'admin@mailtrap.io',
        //     'email_verified_at' => now(),
        //     'password' => 'password',
        //     'remember_token' => Str::random(10),
        // ]);

        User::create([
            'name' => 'Administrator',
            'email' => 'admin@mailtrap.io',
            'email_verified_at' => now(),
            'password' => 'password',
            'remember_token' => Str::random(10),
            'is_admin' => 1,
            'is_active' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        factory(User::class, 99)->create();
    }
}
