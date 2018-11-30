<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class SuperAdministrator extends Authenticatable
{
    //
    //
    protected $table = 'ams_super_administrator';
    protected $primaryKey = 'super_administrator_id';
    public $timestamps = true;
    protected $casts = [
        'theme_setting' => 'array'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'company', 'email','password','profile_pic', 'activation_password','activation_status','remember_token', 'created_by', 'updated_by', 'deleted_by', 'created_at', 'updated_at', 'deleted_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
