<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyWork extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function workImages()
    {
        return $this->hasMany(WorkImage::class, 'work_id');
    }
}
