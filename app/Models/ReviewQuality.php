<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ReviewQuality extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'assessment',
        'user_id',
        'review_id'
    ];
}
