<?php

namespace app\Modules\Admin\Models;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $table    = 'orders';
    
    protected $fillable = [
        'u_id',
        'customer_name', 
        'phone_number',
        'invoice_number',
		'order_detail',
		'invoice_photo',
        'created_at',
        'updated_at'
    ];

}
