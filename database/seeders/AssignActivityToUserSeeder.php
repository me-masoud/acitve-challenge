<?php

namespace Database\Seeders;

use App\Models\Activity;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AssignActivityToUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::query()->inRandomOrder()->limit(8)->get();

        foreach ($users as $user){
            $activities = Activity::query()->inRandomOrder()->limit(random_int(0,4))->get();
            $user->activities()->saveMany($activities);
        }
    }
}
