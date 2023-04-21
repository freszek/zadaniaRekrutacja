<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    protected $table = 'sites';

    public static function findSimilarSites($requested_site, $price_weight, $traffic_weight, $quality_weight)
    {
        // tutaj umieść implementację metody dla zadania 1
    }

    public static function findCheapSites()
    {
        return Site::where('price', '<', 200)
            ->where(function ($query) {
                $query->where('traffic', '>', 1000)
                    ->orWhere('quality', '>', 7);
            })
            ->get();
    }
}
