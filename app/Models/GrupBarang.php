<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrupBarang extends Model
{
    use HasFactory;
    protected $table = 'grup_barang';
    protected $guarded = [];
    public function barangs()
    {
        return $this->hasMany(Barang::class, 'grup_barang_id');
    }
}
