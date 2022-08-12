<?php

namespace Database\Seeders;

use App\Models\Activity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $activities = [
            [
                'name' => 'solve problem',
                'description' => 'this means user has solved a problem'
            ],
            [
                'name' => 'sign out',
                'description' => 'this means user signed out from app'
            ],
            [
                'name' => 'sign in',
                'description' => 'this means user signed in to app'
            ],
            [
                'name' => 'ask question',
                'description' => 'this means user asked a question in forum'
            ],
        ];

        Activity::query()->insert($activities);
    }
}
