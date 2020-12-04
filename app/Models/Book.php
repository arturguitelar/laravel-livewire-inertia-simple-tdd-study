<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    // use HasFactory;
    protected $guarded = [];

    public function path()
    {
        return '/books/' . $this->id . '-' . Str::slug($this->title);
    }

    public function setAuthorIdAttribute($author)
    {
        // implementando dessa forma para melhor leitura
        $author_id = Author::firstOrCreate([
            'name' => $author,
        ])->id;
        $this->attributes['author_id'] = $author_id;
    }
}
