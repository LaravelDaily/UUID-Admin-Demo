<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['name' => 'Admin', 'email' => 'admin@admin.com', 'password' => '$2y$10$6RV3vRDyqO6Y.VQ0GS5hh.HLapHxJmOWoRuGCqZpP3IIAaRVeep.a', 'role_id' => 1, 'remember_token' => '',],

        ];

        foreach ($items as $item) {
            \App\User::create($item);
        }
    }
}
