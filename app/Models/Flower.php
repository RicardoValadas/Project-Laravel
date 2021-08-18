<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flower extends Model

{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['name', 'price'];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
