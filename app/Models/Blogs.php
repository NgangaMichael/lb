<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    protected $table = 'blogs';
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'body', 'author'];
    use HasFactory;
}