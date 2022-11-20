<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DetailPemain;

class Pemain extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'pemain';
    
    public function detail_pemain()
    {
        return $this->hasMany(DetailPemain::class, 'pemain_id');
    }
    
}

