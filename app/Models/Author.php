<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $guarded = [];

    protected $dates = ['dob'];

    // obs: o teste já havia passado sem essa função
    // provavelmente porquê 00/00/0000 já é um formato padrão
    // no Carbon no Laravel 8 e talvez nem rpecise mais disso.
    // Mas vou seguir como pede o tutorial.
    public function setDobAttribute($dob)
    {
        $this->attributes['dob'] = Carbon::parse($dob);
    }
}
