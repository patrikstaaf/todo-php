<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model // Unguarded through the AppServiceProver
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}