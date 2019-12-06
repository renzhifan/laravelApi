<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<11;$i++){
            User::insert([
                'name'=>'test'.$i,
                'password'=>bcrypt('password'),
            ]);
        }
    }
}
