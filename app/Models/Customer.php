<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Customer
 * @package App\Models
 * @version July 9, 2018, 5:14 am UTC
 *
 * @property string first_name
 * @property string last_name
 * @property date dob
 * @property bool gender
 * @property string phone_no
 * @property string email
 * @property string company
 */
class Customer extends Model
{
    use SoftDeletes;

    public $table = 'customers';
    

    protected $dates = ['deleted_at', 'dob'];


    public $fillable = [
        'first_name',
        'last_name',
        'dob',
        'gender',
        'phone_no',
        'email',
        'company'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'first_name' => 'string',
        'last_name' => 'string',
        'dob' => 'date',
        'phone_no' => 'string',
        'email' => 'string',
        'company' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'first_name' => 'required',
        'last_name' => 'required',
        'dob' => 'required',
        'gender' => 'required',
        'phone_no' => 'numeric',
        'email' => 'required|email',
        'company' => 'required'
    ];

    public function fullName()
    {
        return $this->first_name.' '.$this->last_name;
    }

    public function gender()
    {
        return (($this->gender == 1) ? 'Male' : 'Female');
    }
}
