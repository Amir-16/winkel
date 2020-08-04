<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable=['name','email','password','phone','soft_delete','is_draft'];
}
