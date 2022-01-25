<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessGallery extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function gallery()
    {
        return $this->belongsTo(Business::class,'business_id','id');
    }
}
