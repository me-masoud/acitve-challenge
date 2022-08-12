<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email'
    ];
    protected $hidden = ['pivot'];
    public $timestamps = false;

    public function activities()
    {
        return $this->belongsToMany(Activity::class ,'user_activity');
    }
}
