<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\hasMany;

class Seller extends Model
{
    use HasFactory;

    // 商品とのリレーションを定義
    public function products(): hasMany
    {
        return $this->hasMany(Product::class);
    }
}
