<?php

namespace App\Modules\Administrator\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class QuotationDetail extends Authenticatable
{
    //
    protected $table = 'ams_quotation_detail';
    protected $primaryKey = 'quotation_detail_id';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        
        	'quotation_id', 'items', 'description', 'quantity','created_by', 'updated_by', 'deleted_by', 'status', 'created_at', 'updated_at', 'deleted_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'quotation_id', 'items', 'quantity'
    ];
}
