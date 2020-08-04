<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=['brand_id','lebel_id','title','picture','short_description','description','total_sales','product_type','is_new','cost','mrp','special_price',
    'soft_delete', 'is_draft','is_active'];
}
