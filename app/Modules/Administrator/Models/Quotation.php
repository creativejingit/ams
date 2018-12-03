<?php

namespace App\Modules\Administrator\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Quotation extends Authenticatable
{
    //
    protected $table = 'ams_quotation';
    protected $primaryKey = 'quotation_id';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        
        	'date', 'reference_no', 'to', 'client', 'address', 'contact_no', 'dollar_rate', 'created_by', 'updated_by', 'deleted_by', 'status', 'created_at', 'updated_at', 'deleted_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'reference_no', 'contact_no', 'dollar_rate'
    ];
}
