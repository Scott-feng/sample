<?php

use Illuminate\Database\Seeder;

class FollowersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user=User::all();
        $user=$users->first();
        $user_id=$user->id;

        $followers=$users->slice(1);
        $followers_ids=$followers->pluck('id')->toArray();

        
    }
}
