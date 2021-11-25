<?php

namespace Database\Seeders;

use App\Models\User;
use App\Traits\Generics;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use Generics;
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $admin = User::create([
            'user_id'=>$this->createUniqueID('users', 'user_id'),
            'email'=>"admin@gmail.com",
            'password'=>Hash::make('admin'),
        ]);
    }
}
