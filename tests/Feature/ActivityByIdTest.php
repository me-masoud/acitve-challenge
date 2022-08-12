<?php

namespace Tests\Feature;

use App\Models\Activity;
use Tests\TestCase;

class ActivityByIdTest extends TestCase
{
    protected $user;

    public function test_get_activity_by_id()
    {
        $activity = Activity::query()->first();
        $response = $this->getJson(route('activity.show' ,['activity' => $activity->id]));

        $response->assertOk();
        $response->assertJsonFragment([
            'name' => $activity->name,
            'description' => $activity->description
        ]);


    }
}
