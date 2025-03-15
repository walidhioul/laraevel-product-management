<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product'; // Ensure this matches your migration table name

    protected $fillable = ['name', 'description']; // Fields that can be mass assigned
}
