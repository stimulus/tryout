<?php

namespace app\Models\buddies;
use Illuminate\Database\Eloquent\Model;

class Buddies extends Model
{
    protected $table = "buddies";

    public function scheme(){
        return $this->hasMany("app\Models\buddies\Buddy_scheme", "buddy_id", "id");
    }
}