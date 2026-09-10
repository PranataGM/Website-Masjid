<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use HasFactory, SoftDeletes;

    // PASTIKAN KATA 'image' ADA DI DALAM KURUNG SIKU INI:
    protected $fillable = ['title', 'slug', 'image', 'content', 'is_published'];
}