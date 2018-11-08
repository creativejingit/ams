<?php

namespace app\Modules\Admin\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table    = 'settings';
    
    protected $fillable = ['name', 'value'];

    public $timestamps = false;

    
    public static function option( $name )
    {
        $attribute = self::where(['name' => $name])->select('value')->first();
        
        if( $attribute ) {
            return $attribute->value;
        }
    }
    
    public static function updateOption($name, $value)
    {    
        $setting = self::where(['name' => $name])->first();
        if($setting) {
            $setting->value = $value;
        } else {
            $setting        = new self;
            $setting->name  = $name;
            $setting->value = $value;
        }
        $setting->save();
    }
    
}
