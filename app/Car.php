<?php

namespace App;
use App\Dealer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Laravel\Scout\Searchable;

class Car extends Model
{
    use Searchable;
    public function dealer()
    {
        return $this->belongsTo(Dealer::class);
    }

    public function scopeFilterByRequest($query, Request $request)
    {
        if ($request->input('year')) {
            $query->where('year', '=', $request->input('year'));
        }

        if ($request->input('make')) {
            $query->where('make', '=', $request->input('make'));
        }

        if ($request->input('model')) {
            $query->where('model', '=', $request->input('model'));
        }
        return $query;
    }

}
