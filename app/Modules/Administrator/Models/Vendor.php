<?php

namespace App\Modules\Administrator\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Vendor extends Authenticatable
{
    //
    protected $table = 'ams_vendor';
    protected $primaryKey = 'vendor_id';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        
        	'vendor_name', 'currency','credit_term', 'sales_tax_rate', 'point_of_contact','wht_rate','address', 'email','ntn', 'sales_tax_no', 'created_by', 'updated_by', 'deleted_by', 'status', 'created_at', 'updated_at', 'deleted_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'ntn', 'wht_rate', 'point_of_contact'
    ];
}
