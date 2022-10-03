<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fotogallery extends Model
{
    use HasFactory;
    
    protected $table = 'fotogalleries';
    protected $fillable = ['judul','foto'];
}
