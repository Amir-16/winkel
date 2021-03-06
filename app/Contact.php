<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable=['name','email','subject','comment','status','soft_delete','is_draft','date'];
}
