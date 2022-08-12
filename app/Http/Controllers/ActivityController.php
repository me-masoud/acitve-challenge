<?php

namespace App\Http\Controllers;

use App\Http\Resources\ActivityResource;
use App\Models\Activity;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function show(Activity $activity)
    {
        return (new ActivityResource($activity));
    }
}
