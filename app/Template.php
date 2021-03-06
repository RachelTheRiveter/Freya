<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    protected $guarded = [];

    public function path()
    {
        return "/templates/{$this->id}";
    }

    public function owner()
    {
        return $this->belongsTo(User::class);
    }
}
