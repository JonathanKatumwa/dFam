<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class clients
 * @package App\Models
 * @version July 7, 2020, 9:51 pm UTC
 *
 * @property string $first_Name
 * @property string $last_Name
 * @property string $dob
 * @property integer $age
 * @property string $email
 * @property string $phone_No
 * @property string $address
 * @property string $current_address
 * @property string $nationality
 * @property string $passport_No
 * @property boolean $status
 * @property string $date_Registered
 * @property string $image
 * @property integer $role
 */
class clients extends Model
{
    use SoftDeletes;

    public $table = 'clients';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];
    protected $primarykey = 'id';



    public $fillable = [
        'first_Name',
        'last_Name',
        'dob',
        'age',
        'email',
        'phone_No',
        'address',
        'current_address',
        'nationality',
        'passport_No',
        'status',
        'date_Registered',
        'image',
        'role'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'first_Name' => 'string',
        'last_Name' => 'string',
        'dob' => 'date',
        'age' => 'integer',
        'email' => 'string',
        'phone_No' => 'string',
        'address' => 'string',
        'current_address' => 'string',
        'nationality' => 'string',
        'passport_No' => 'string',
        'status' => 'boolean',
        'date_Registered' => 'date',
        'image' => 'string',
        'role' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'first_Name' => 'required',
        'last_Name' => 'required',
        'dob' => 'required',
        'age' => 'required',
        'email' => 'required',
        'phone_No' => 'required',
        'address' => 'required',
        'current_address' => 'required',
        'nationality' => 'required',
        'passport_No' => 'required',
        'status' => 'required',
        'date_Registered' => 'required',
        'role' => 'required'
    ];

    
}
