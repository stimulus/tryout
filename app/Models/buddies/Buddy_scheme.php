<?php

namespace app\Models\buddies;
use Illuminate\Database\Eloquent\Model;
class Buddy_scheme extends Model
{
    protected $table = "buddy_scheme";

    public function buddy() {
        return $this->belongsTo('app\Models\buddies\Buddies');
    }
}