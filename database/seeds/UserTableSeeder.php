<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<5;$i++){
            DB::table('users')->insert([
                'name' => str_random(10),
                'email' => str_random(10).'@'.str_random(4).'.com',
                'password' => bcrypt('secret'),
                'created_at' => date("y-m-d h:i:s",time()),
                'updated_at' => date("y-m-d h:i:s",time()),
            ]);
        }
    }
}
