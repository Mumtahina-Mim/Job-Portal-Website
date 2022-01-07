<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    protected $guarded =[];

    public function clicks()
    {
        return $this->hasMany( related: Clik::class);
    }

    public function user()
    {
      return $this->belongsTo( related: User::class);   
    }

    public function tags()
    {
      return $this->belongsTo( related: Tag::class);   
    }
}
