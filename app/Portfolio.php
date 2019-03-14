<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $table = 'portfolio';

    public function portfolio_images()
    {
        return $this->hasMany(PortfolioImage::class);
    }

    public function portfolio_category()
    {
        return $this->belongsTo(PortfolioCategory::class);
    }
}
