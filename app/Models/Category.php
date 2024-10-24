<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // If your table name is different, specify it
    // protected $table = 'your_custom_table_name';

    // Specify fillable attributes
    protected $fillable = ['name'];

    // Timestamps are true by default
    // public $timestamps = true;
}
