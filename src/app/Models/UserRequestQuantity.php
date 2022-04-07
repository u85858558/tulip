<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserRequestQuantity extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'created_at',
        'updated_at',
        'user_id',
        'quantity',
    ];

}
