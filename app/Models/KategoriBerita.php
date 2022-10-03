<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Berita;

class KategoriBerita extends Model
{
    use HasFactory;
    protected $table = 'kategoris';
    protected $guarded = [];
    protected $hidden =[

    ];

    public function posts()
    {
        return $this->hasMany(Berita::class);
    }
}
