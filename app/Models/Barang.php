<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'barang';
    protected $guarded = [];
    public function grupBarang()
    {
        return $this->belongsTo(GrupBarang::class, 'grup_barang_id');
    }
}
