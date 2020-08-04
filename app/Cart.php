<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{

    protected $fillable=['sld','product_id','picture','product_title','qty','unit_price','total_price'];
}
