<?php

namespace CRUDLaravel54;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //CRUDLaravel5.4
        protected $fillable = [
            'name', 'short', 'body',
        ];
    // 
}
