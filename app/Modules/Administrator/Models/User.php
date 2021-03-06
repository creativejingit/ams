<?php

namespace App\Modules\Administrator\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    //
    protected $table = 'ams_user';
    protected $primaryKey = 'user_id';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        	'organization_id', 'group_id','parent_id', 'name', 'email','password','theme_setting', 'activation_password','activation_status', 'remember_token', 'created_by', 'updated_by', 'deleted_by', 'created_at', 'updated_at', 'deleted_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'organization_id', 'group_id', 'parent_id', 'password', 'activation_password', 'remember_token'
    ];
}
