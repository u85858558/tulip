<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Laravel\Lumen\Auth\Authorizable;

class User extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable, HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'created_at',
        'updated_at',
        'telegram_id_user',
        'key_api'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = [
        'quantity'
    ];

    /**
     * Get user count.
     */
    public function quantity()
    {
        return $this->belongsTo(UserRequestQuantity::class, 'user_id','id');
    }

    public function show()
    {
        $test = DB::select('select * from user');

        dd($test);
    }
}
