<?php

namespace App\Models;

use App\Models\Mail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];

    protected $guarded = ['id'];

    public function mail()
    {
        return $this->hasMany(Mail::class, 'category_id', 'id');
    }
}
