<?php

namespace App\Modules\Admin\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Payment extends Authenticatable
{
	protected $table = 'payment';
	 
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type',
		'amount',
		'status',
        'discount',
        'status',
        'created_at'
    ];

}
