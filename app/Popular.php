<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Popular extends Model
{
    protected $fillable=['name','link','is_active','soft_delete','is_draft'];
}
