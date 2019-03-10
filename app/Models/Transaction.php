<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Transaction
 * @package App\Models
 * @version March 6, 2019, 10:14 am UTC
 *
 * @property integer user_id
 * @property integer qrcode_owner_id
 * @property integer qrcode_id
 * @property string payment_method
 * @property string message
 * @property float amount
 * @property string status
 */
class Transaction extends Model
{
    use SoftDeletes;

    public $table = 'transactions';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'user_id',
        'qrcode_owner_id',
        'qrcode_id',
        'payment_method',
        'message',
        'amount',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'qrcode_owner_id' => 'integer',
        'qrcode_id' => 'integer',
        'payment_method' => 'string',
        'message' => 'string',
        'amount' => 'float',
        'status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * Get the post that owns the comment.
     */
    public function qrcode()
    {
        return $this->belongsTo('App\Models\Qrcode');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    // Special function to find the qrcode_owner_id in the 'users' table
    public function qrcode_owner()
    {
        return $this->belongsTo('App\Models\User', 'qrcode_owner_id');
    }
    
}
