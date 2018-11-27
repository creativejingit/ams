<?php

namespace App\Modules\Administrator\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class CompanyCreationForm extends Authenticatable
{
    //
    protected $table = 'ams_company';
    protected $primaryKey = 'company_id';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        	'company_name', 'date_of_formation','nature_of_business', 'ntn', 'sstn','point_of_contact','address','email','website', 'phone_no', 'logo', 'created_by', 'updated_by', 'deleted_by', 'status', 'created_at', 'updated_at', 'deleted_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'ntn', 'phone_no',
    ];
}
