<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    protected $table = "apartments";
    protected $fillable = [
        "name",
        "address",
        "price",
        "public_information",
        "detail_information",
        "image"
    ];
}
