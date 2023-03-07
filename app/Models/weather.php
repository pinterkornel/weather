<?php

namespace App\Models;

class weather
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'time',
        'name',
        'lat',
        'lon',
        'temperature',
        'pressure',
        'humidity',
        'min_temperature',
        'max_temperature',
    ];
}
