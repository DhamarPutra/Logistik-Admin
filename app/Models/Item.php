<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = ['seller_id', 'item_code', 'item_name', 'group'];

    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }
}
