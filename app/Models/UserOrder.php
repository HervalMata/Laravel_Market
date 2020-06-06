<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserOrder extends Model
{
    protected $fillable = ['reference', 'pagseguro_statu', 'pagseguro_code', 'items'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
