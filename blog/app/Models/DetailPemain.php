<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pemain;

class DetailPemain extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'detail_pemain';

    public function pemain()
    {
        return $this->belongsTo(Pemain::class, 'pemain_id');
    }
}
