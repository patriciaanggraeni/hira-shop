<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusPesanan extends Model {

    use HasFactory;

    protected $guarded = ['order_status_code', 'status'];

    public function order_details() {
        return $this->belongsTo(DetailPesanan::class);
    }
}
