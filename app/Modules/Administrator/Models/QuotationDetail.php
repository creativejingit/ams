<?php

namespace App\Modules\Administrator\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

	
class QuotationDetail extends Authenticatable
{
    //
	use SoftDeletes;
	
    protected $table = 'ams_quotation_detail';
    protected $primaryKey = 'quotation_detail_id';
    public $timestamps = true;

	protected $softDelete = true;

    protected $dates = ['deleted_at'];
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        
        	'quotation_id', 'title', 'description',  'quantity','total_cost','created_by', 'updated_by', 'deleted_by', 'status', 'created_at', 'updated_at', 'deleted_at'
    ];

   
}
