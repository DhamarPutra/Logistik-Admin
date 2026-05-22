<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'location', 'location_code', 'tracking_number'];

    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
