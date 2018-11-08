<?php

namespace app\Modules\Admin\Utils\;
use Request;

class Grid 
{
    public static function render($query, $columns, $urls, $attributes = array(), $primaryId = 'id')
    {
        $request                        = Request::all();
        // unset($request['order_by']);
        $data['url_params']             = $request;
        // $data['url_params']['order'] = isset($request['order']) && $request['order'] == 'asc' ? 'desc' : 'asc';
        
        $filterColumns = [];
        $prefix = \DB::getTablePrefix();
        $fields = [];
        foreach( $columns as $key => $column ) {

            if(!in_array('id', $fields) && $query->first()){
                $fields[] = $query->first()->getTable().'.id';
            }
            
            $query->select( \DB::raw( implode(',', $fields) ));

            $data['data']       = $query->get();
            
            $data['columns']    = $columns; 

            $data['id']         = $primaryId;
            
            $data['gridUrl']        = self::makeUrl($urls, 'grid_url');
            $data['viewUrl']        = self::makeUrl($urls, 'view_url');
            $data['editUrl']        = self::makeUrl($urls, 'edit_url');
            $data['deleteUrl']      = self::makeUrl($urls, 'delete_url');
            $data['extras']         = isset($urls['extras']) ? $urls['extras'] : false;
            
            $data['ajaxMode'] = false;
            
            if( isset($attributes['ajax_mode']) && $attributes['ajax_mode'] ) {
                $data['ajaxMode'] = true;
            }
        }
        $view = \View::make('admin.common.grid', $data);

        return $view->render();
    }
    
    public static function requestedValue($index)
    { 
        if(Request::has($index) && Request::get($index)) {
            return Request::get($index);
        }
        return false;
    }
    
    public static function makeUrl($urls, $key)
    {
        if( !isset($urls[$key]) ) return false;
        return str_replace('.', '/', $urls[$key]);
        
    }
    
    public static function url($path = null, $qs = array(), $secure = null)
    {
        unset($qs['ids']);
        $url = app('url')->to($path, $secure);
        if (count($qs)){

            foreach($qs as $key => $value){
                if( is_array($value) ) continue;
                $qs[$key] = sprintf('%s=%s',$key, urlencode($value));
            }
            $url = sprintf('%s?%s', $url, implode('&', $qs));
        }
        return $url;
    }
}