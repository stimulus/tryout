<?php

namespace app\Models\buddies;

class Buddies extends Eloquent
{
    protected $table = "buddies";

    public function scheme(){
        return $this->hasMany("app\Models\buddies\Buddy_scheme", "buddy_id", "id");
    }
}