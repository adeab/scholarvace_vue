<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    //
    protected $fillable = [
        'user_id', 'type_id',
    ];
}
