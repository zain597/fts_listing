<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function businessCategory()
    {
        return $this->belongsToMany(Business::class);
    }
}
