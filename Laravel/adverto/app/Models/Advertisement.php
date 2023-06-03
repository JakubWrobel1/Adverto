<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    protected $table = 'ads';
    use HasFactory;

    public function location()
    {
        return $this->belongsTo(Location::class, 'location_id');
    }
}
