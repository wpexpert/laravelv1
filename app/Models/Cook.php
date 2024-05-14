<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cook extends Model
{
    use HasFactory;

    public function makedishes() {
        return $this->hasMany(Dish::class);
    }
}
