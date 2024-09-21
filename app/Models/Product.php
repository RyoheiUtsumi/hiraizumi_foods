<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // 販売者とのリレーションを定義
    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }
}
