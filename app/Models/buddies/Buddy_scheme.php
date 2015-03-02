<?php

namespace app\Models\buddies;

class Buddy_scheme extends Eloquent
{
    protected $table = "buddy_scheme";

    public function buddy() {
        return $this->belongsTo('app\Models\buddies\Buddies');
    }
}