<?php

namespace App\Modules\Administrator\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class ForeignExchangeRate extends Authenticatable
{
    //
    protected $table = 'ams_foreign_exchange_rate';
    protected $primaryKey = 'foreign_exchange_rate_id';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        
        	'date', 'usd_conversion_rate', 'created_by', 'updated_by', 'deleted_by', 'status', 'created_at', 'updated_at', 'deleted_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'usd_conversion_rate'
    ];
}
