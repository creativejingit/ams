<?php

namespace App\Modules\Administrator\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Client extends Authenticatable
{
    //
    protected $table = 'ams_client';
    protected $primaryKey = 'client_id';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        	'client_name', 'currency','credit_term', 'sales_tax_rate', 'point_of_contact','contact_no_of_poc','address', 'email','ntn', 'sales_tax_no', 'created_by', 'updated_by', 'deleted_by', 'status', 'created_at', 'updated_at', 'deleted_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'ntn', 'contact_no_of_poc', 'point_of_contact'
    ];
}
