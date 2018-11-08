<?php
namespace App\Modules\Admin\Controllers;

use App\Http\Controllers\Controller;
use Validator;
use Request;

class UploadController extends Controller
{
    public function image()
    {   
        if( Request::hasFile('image') || Request::hasFile('upload') ) {
            $path = Request::has('path') ? Request::get('path') : 'uploads';
            
            if( !is_dir($path) ) {
                mkdir($path, 0644, true);    
            }
            
            $fileParam = 'image';
            
            if(  Request::hasFile('upload') ) {
                $fileParam = 'upload';
            }

			
            $validator = Validator::make(Request::all(), [
                            $fileParam => 'required'//|mimes:jpeg,bmp,png,gif'
                        ]);
            
            if ($validator->fails()) {
                $data['data']   = $validator;
                $data['status'] = 0;
            } else {
                
                $ext        = Request::file($fileParam)->getClientOriginalExtension();
                $fileName   = $this->generateUniqueName($ext);
                Request::file($fileParam)->move($path, $fileName);
                
                $data['status']     = 1;
                $data['image_url']  = url($path . '/' . $fileName);
                $data['image_path'] = $path . '/' . $fileName;
            }
        } else {
            $data['data']   = ['error' => 'Please select a file to upload'];
            $data['status'] = 0;
        }
		
		if( $fileParam == 'upload' ) {
			return view('extra.ckeditor', $data);
		} else {
			return response()->json($data);
		}
		
    }
    
    public function file()
    {
        
        if( Request::hasFile('file') ) {
            $path = Request::has('path') ? Request::get('path') : 'uploads';
            
            if( !is_dir($path) ) {
                mkdir($path, 0644, true);    
            }
            
            $ext        = Request::file('file')->getClientOriginalExtension();
            
            if (!in_array( $ext, ['pdf', 'doc', 'docx', 'png', 'jpg', 'jpeg'] )) {
                $data['data']   = 'Unable to upload this file type. Allowed file types are: pdf|jpeg|jpg|doc|docx';
                $data['status'] = 0;
            } else {
                
                $ext        = Request::file('file')->getClientOriginalExtension();
                $fileName   = $this->generateUniqueName($ext);
                Request::file('file')->move($path, $fileName);
                
                $data['status']     = 1;
                $data['file_url']  = url($path . '/' . $fileName);
                $data['file_path'] = $path . '/' . $fileName;
            }
        } else {
            $data['data']   = ['error' => 'Please select a file to upload'];
            $data['status'] = 0;
        }
        return response()->json($data);
    }
    
    protected function generateUniqueName( $ext )
    {
        return \Helper::generateUniqueName( $ext );
    }
    
}