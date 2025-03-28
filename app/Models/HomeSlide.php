<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeSlide extends Model
{
    use HasFactory;
    protected $table = 'home_slides'; // Specify table name

    protected $fillable = ['image', 'textbox']; // Mass assignable fields
}
