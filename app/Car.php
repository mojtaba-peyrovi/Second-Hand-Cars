<?php

namespace App;
use App\Dealer;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public function dealer()
    {
        return $this->belongsTo(Dealer::class);
    }

}
