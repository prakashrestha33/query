<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class reply_models extends Model
{
    protected $fillable = [
        'comment',
    ];


    protected $hidden = [
        'query_id', 'created_by',
    ];


   }

