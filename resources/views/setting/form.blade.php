@extends('Admin::layouts.default')

@section('content')
    {!! Form::open(['class'=>'form-horizontal']) !!}
    
      <div class="row">
                        
                        <div class="col-md-12" >
                              <img  style="float:right" width="200px" height="50px" src=" <?php echo url(Setting::option('site_logo0')); ?>" />
                        </div>
                    </div>
                    
                    
    <div class="panel-heading">
        <h3 class="panel-title">
            <strong>{{ $heading  }}</strong>
        </h3>
    </div>
    <div class="panel-body">
        <div class="form-group">
            {!! Form::label('site_title', 'Site Title',["class"=>"col-md-3 col-xs-12 control-label"]) !!}
            <div class="col-md-6 col-xs-12">
                <div class="input-group">
                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                    {!! Form::text('settings[site_title]', Setting::option('site_title'), ['class' => 'form-control', 'placeholder' => 'Enter Site Title'] ) !!}
                </div>
                <p class="form-error"></p>
            </div>
        </div>
		<!--
        <div class="form-group">
            {!! Form::label('call_plugin', 'Call Plugin',["class"=>"col-md-3 col-xs-12 control-label"]) !!}
            <div class="col-md-6 col-xs-12">
                <div class="input-group">
                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                
                    {!! Form::select('settings[call_plugin]', [
                                                '1' => 'WebRTC',
                                                '2' => 'Zoom',
                                                '3' => 'Trivilio',
                                                '4' => 'Skype'
                                              ], array(0=>Setting::option('call_plugin')), ['class' => 'form-control select', 'placeholder' => 'Select Call plugin']) !!}
                
                            </div>
                <p class="form-error"></p>
            </div>
        </div>
		
        <div class="form-group">
            {!! Form::label('payment_method', 'Payment Method',["class"=>"col-md-3 col-xs-12 control-label"]) !!}
            <div class="col-md-6 col-xs-12">
                <div class="input-group">
                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                
                    {!! Form::select('settings[payment_method]', [
                                                '1' => 'Free',
                                                '2' => 'Monthly',
                                                '3' => 'Yearly',
                                              ], array(0=>Setting::option('payment_method')), ['class' => 'form-control select', 'placeholder' => 'Select Call plugin']) !!}
                
                            </div>
                <p class="form-error"></p>
            </div>
        </div>
        -->
        
        <div class="form-group">
            {!! Form::label('site_logo0', 'Site Logo Main Logo',["class"=>"col-md-3 col-xs-12 control-label"]) !!}
            <div class="col-md-6 col-xs-12">
                <div class="input-group">
                {!! Helper::dropZone('site_logo0', [
                    'field_name' => 'settings[site_logo0]',
                    'acceptedFiles' => 'image/*',
                    'url' => url('admin/upload/image')
                ],Setting::option('site_logo0'),'image',true) !!}
                </div>
            </div>
        </div>
        
        
        <div class="form-group">
            {!! Form::label('site_logo', 'Site Logo Adminstrator',["class"=>"col-md-3 col-xs-12 control-label"]) !!}
            <div class="col-md-6 col-xs-12">
                <div class="input-group">
                {!! Helper::dropZone('site_logo', [
                    'field_name' => 'settings[site_logo]',
                    'acceptedFiles' => 'image/*',
                    'url' => url('admin/upload/image')
                ],Setting::option('site_logo'),'image',true) !!}
                </div>
            </div>
        </div>
        
        <div class="form-group">
            {!! Form::label('site_logo1', 'Site Logo Painting',["class"=>"col-md-3 col-xs-12 control-label"]) !!}
            <div class="col-md-6 col-xs-12">
                <div class="input-group">
                {!! Helper::dropZone('site_logo1', [
                    'field_name' => 'settings[site_logo1]',
                    'acceptedFiles' => 'image/*',
                    'url' => url('admin/upload/image')
                ],Setting::option('site_logo1'),'image',true) !!}
                </div>
            </div>
        </div>
        
        <div class="form-group">
            {!! Form::label('site_logo2', 'Site Logo Photographic',["class"=>"col-md-3 col-xs-12 control-label"]) !!}
            <div class="col-md-6 col-xs-12">
                <div class="input-group">
                {!! Helper::dropZone('site_logo2', [
                    'field_name' => 'settings[site_logo2]',
                    'acceptedFiles' => 'image/*',
                    'url' => url('admin/upload/image')
                ],Setting::option('site_logo2'),'image',true) !!}
                </div>
            </div>
        </div>
        
        <div class="form-group">
            {!! Form::label('site_logo3', 'Site Logo Paint Protection',["class"=>"col-md-3 col-xs-12 control-label"]) !!}
            <div class="col-md-6 col-xs-12">
                <div class="input-group">
                {!! Helper::dropZone('site_logo3', [
                    'field_name' => 'settings[site_logo3]',
                    'acceptedFiles' => 'image/*',
                    'url' => url('admin/upload/image')
                ],Setting::option('site_logo3'),'image',true) !!}
                </div>
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('admin_title', 'Admin Title',["class"=>"col-md-3 col-xs-12 control-label"]) !!}
            <div class="col-md-6 col-xs-12">
                <div class="input-group">
                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                    {!! Form::text('settings[admin_title]', Setting::option('admin_title'), ['class' => 'form-control', 'placeholder' => 'Enter Admin Title'] ) !!}
                </div>
                <p class="form-error"></p>
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('footer_copyright_text', 'Footer Copy Right Text',["class"=>"col-md-3 col-xs-12 control-label"]) !!}
            <div class="col-md-6 col-xs-12">
                <div class="input-group">
                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                    {!! Form::text('settings[footer_copyright_text]', Setting::option('footer_copyright_text'), ['class' => 'form-control', 'placeholder' => 'Footer Copy Right Text'] ) !!}
                </div>
                <p class="form-error"></p>
            </div>
        </div>
    </div>
    <div class="panel-footer">
        <a href="{{url('/admin')}}" class="btn btn-default">Cancel</a>
        <button type="submit" class="btn btn-primary pull-right">Submit</button>
    </div>
    {!! Form::close() !!}
@endsection