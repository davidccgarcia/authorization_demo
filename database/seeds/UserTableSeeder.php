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
        factory(App\User::class)->create([
            'name' => 'David García', 
            'email' => 'ccristhiangarcia@gmail.com', 
            'role' => 'admin',
            'password' => bcrypt('secret'),
        ]);

        factory(App\User::class)->times(9)->create();
    }
}
