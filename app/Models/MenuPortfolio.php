<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuPortfolio extends Model
{
    protected $fillable = ['path', 'name'];

    public function images()
    {
        return $this->hasMany(ImagePortfolio::class, 'id_menu');
    }
}
