<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\User as Authenticate;
/**
 * Class User
 * @package App\Models
 * @version June 24, 2022, 4:49 am UTC
 *
 */
class User extends Authenticate
{
    use SoftDeletes, HasFactory;

    protected $connection = 'mysql';

    public $table = 'users';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'email',
        'password'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function password(): Attribute
    {
        return Attribute::make(
            get: fn($val) => $val,
            set: fn($val) => $val
        );
    }
}
