<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use hasFactory;

    public function produto()
    {
        return $this->belongsTo('App\Models\Produto');
    }

    public function venda()
    {
        return $this->belongsTo('App\Models\Venda');
    }
}
