<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    // name,detailをホワイトリスト化
    protected $fillable = [
        'name', 'detail'
    ];
}
