<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Idcard extends Model
{
    protected $fillable=[
        'name','idnumber','email','phone','designation','blood','image','signature'

    ];
}
