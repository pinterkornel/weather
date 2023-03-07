<?php

namespace App\Models;

class City
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'city_name',
        'lat',
        'lon',
    ];

}
