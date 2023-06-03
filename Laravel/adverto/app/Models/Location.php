<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    // Define the table associated with the model
    protected $table = 'locations';

    // Define the fillable fields for mass assignment
    protected $fillable = ['name', 'province', 'country'];

    // Rest of the model code...
}