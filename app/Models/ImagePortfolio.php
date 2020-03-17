<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImagePortfolio extends Model
{
    protected $fillable = ['path', 'id_menu'];

    public function menu()
    {
        return $this->belongsTo(MenuPortfolio::class, 'id_menu');
    }
}
