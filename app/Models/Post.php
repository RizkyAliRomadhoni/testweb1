<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $guarded = [
        'id'
    ];

    public $timestamps = false;

    public function author() {
        return $this->belongsTo(Account::class, 'author_id');
    }
}
