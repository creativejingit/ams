<?php

namespace App\Utils;
use Session;

class Helper {
    
    public static function dropzone( $name, $params = array(), $imagePath = '', $param_name = 'image', $single = false ,$btn_name='',$btn_class='')
    {   
        $id = '#' . $name;
        $imageField = '';
        $bgUrl = '';

        if( is_file($imagePath) ) {
            $bgUrl = 'background-image: url('.url($imagePath).');';
        }

        if( $single ) {
            if( $param_name == 'file' ) {
                
                $successCallbackJs = '
                var __a = $("<a />").addClass("file-link").attr({ href: response.file_url }).text(response.file_path);
                $("#dropzone_inp_'.$name.'").val(response.file_path);
                __a.insertAfter("#dropzone_inp_'.$name.'");
                ';
            
                
            } else {
                
            $successCallbackJs = '
                $("#'.$name.'").css({"background-image": "url(" + response.image_url + ")" });
                $("#dropzone_inp_'.$name.'").val(response.image_path);
                ';
            
            }

            $fieldName = isset($params['field_name']) ? $params['field_name'] : $name;
            
            $imageField = '<input type="hidden" class="form-control" readonly name="'.$fieldName.'" id="dropzone_inp_'.$name.'" value="'.$imagePath.'" /> <a href="#" class="dropzone_remove_'.$name.'">&times; Remove</a>';
        } else {
            if( $param_name == 'file' ) {
                
                $successCallbackJs = '
                var file_input = $("#dropzone_inp_'.$name.'");
                var myarray = [];
                if(file_input.val()){
                    splited = file_input.val().split(",");
                    var myarray = [];
                    myarray.push(splited);
                }
                myarray.push(response.image_path);
                $(".files_container ul").append("<li><img src=\""+baseUrl+response.image_path+"\" /><span><i id=\"remove_file\" class=\"fa fa-trash-o\" aria-hidden=\"true\"></i><a href=\""+baseUrl+response.image_path+"\" class=\"image-link grid-thumb\"><i id=\"view_file\" class=\"fa fa-eye\" aria-hidden=\"true\"></i></a></span></li>");
                file_input.val(myarray);
                ';
            
            } else {
            $successCallbackJs = '
                var file_input = $("#dropzone_inp_'.$name.'");
                var myarray = [];
                if(file_input.val()){
                    splited = file_input.val().split(",");
                    var myarray = [];
                    myarray.push(splited);
                }
                myarray.push(response.image_path);
                $("ul.files_container").append("<li><img src=\""+baseUrl+response.image_path+"\" /><span><i id=\"remove_file\" class=\"fa fa-trash-o\" aria-hidden=\"true\"></i><a href=\""+baseUrl+response.image_path+"\" class=\"image-link grid-thumb\"><i id=\"view_file\" class=\"fa fa-eye\" aria-hidden=\"true\"></i></a></span></li>");
                file_input.val(myarray);
                $(".files_container").closest(".row").removeClass("hidden");
                ';
            
            }
            $fieldName = isset($params['field_name']) ? $params['field_name'] : $name;
            
            $imageField = '<input type="hidden" class="form-control" readonly name="'.$fieldName.'" id="dropzone_inp_'.$name.'" value="'.$imagePath.'" />';
        }

        $btn_name = ($btn_name) ? $btn_name : "ATTACH FILE";
        $field = ($single) ? '<div class="dropzone-box" id="'.$name.'" style="'.$bgUrl.'">
                              <div class="dz-message" data-dz-message><span>Drag and Drop file(s) or Click to Upload</span></div>
                             </div>' : 
                             '<a href="JavaScript:void(0)" class="dz-clickable '.$btn_class.'" id="'.$name.'">
                                    <i class="fa fa-upload"></i>
                                                        '.$btn_name.'
                             </a>';
        return $field.$imageField.'<script>
                    $(document).ready(function(){
                        var baseUrl = "'.url("/").'/";
                        Dropzone.autoDiscover       = false;
                        var _params                 = '.json_encode($params).';
                        _params.paramName           = "'.$param_name.'";
                        _params.addedfile           = function() {};
                        _params.dictDefaultMessage  = function() {};
                        _params.error               = function(err) {};
                        _params.uploadprogress      = function(file, progress) {};
                        _params.success             = function (file, response) {
                                                        if( response.status ) {
                                                            '.$successCallbackJs.'
                                                        }
                                                    };
                        _params.sending             = function (file, xhr, formData) {
                                                        formData.append("_token" , "'.csrf_token().'");
                                                    };                           

                        var dropzone = new Dropzone("'.$id.'" , _params );
                        
                        $(".dropzone_remove_'.$name.'").click(function(e) {
                            e.preventDefault();
                            $("#'.$name.'").css({"background-image": "url(\"\")" });
                            $("#dropzone_inp_'.$name.'").val("");
                            $("a.image-link").attr("href","#");
                        });
                    });
                </script>';
    }
    public static function generateUniqueName( $ext )
    {
        return md5(time() . uniqid()) . '.' . $ext;
    }
}