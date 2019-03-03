@extends('admin.master')
@section('title')
Add Event
@stop
@section('content')

      <div class="content-wrapper">
        <section class="content-header">
          <h1>Add Event</h1>
           @if(Session::has('success'))
            <div class="alert alert-success alert-success" style="margin-top: 10px;margin-bottom: 0px;">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                {{ strtoupper(Session::get('success'))  }}
            </div>
          @endif

          @if(Session::has('error'))   
                <div style="margin-top: 10px;margin-bottom: 0px;" class="alert alert-danger alert-error">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    {{ strtoupper (Session::get('error'))  }}
                </div>   
          @endif

          @if (count($errors) > 0)
            <div class="alert alert-danger alert-dismissible" style="margin-top:20px; margin-bottom: 0px;">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-ban"></i> Error!</h4>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
                  </div>

        @endif


        </section>
        <section class="content">
          <div class="box box-primary">
            <div class="box-header with-border"></div>
              
              @if(isset($workshop))
                  {!! Form::model($workshop, ['route' => ['workshop-update', $workshop->id], 'method' => 'patch', 'files'=>true, 'data-toggle' => 'validator' , 'role' => 'form']) !!}
              @else
                  {!! Form::open(['route' => 'workshop-add', 'files'=>true, 'data-toggle' => 'validator' , 'role' => 'form']) !!}
              @endif


                <div class="box-body">
                  <div class="row"> 
                    <div class="col-lg-6">  
                      <div class="form-group">
                        <label for="title">Title</label>
                        {!! Form::text('title',old('title'),array('class'=>'form-control', 'placeholder'=> 'Enter Title', 'id'=>'title', 'required'=>true)) !!}

                      </div>
                    </div>
                      <div class="col-lg-6">  
                      <div class="form-group">
                        <label for="about">About</label>
                        {!! Form::textarea('about_worjshop',old('about_worjshop'),array('class'=>'form-control', 'id'=>'about', 'placeholder'=> 'About Workshop', 'required'=>true)) !!}

                      </div>
                    </div>
                    <div class="col-lg-6">  
                      <div class="form-group">
                        <label for="duration">Duration (in days)</label>
                        {!! Form::number('duration',old('duration'),array('class'=>'form-control', 'placeholder'=> 'Enter Duration in days', 'id'=>'duration', 'required'=>true)) !!}

                      </div>
                    </div>
                     <div class="col-lg-6">  
                      <div class="form-group">
                        <label for="date">Date</label>
                        {!! Form::date('date', old('date'), ['class'  => 'form-control', 'required'=>true]) !!}
 

                      </div>
                    </div>
                    <div class="col-lg-6">  
                      <div class="form-group">
                        <label for="start_time">Start Time</label>
                        {!! Form::time('start_time',old('start_time'),array('class'=>'form-control', 'id'=>'start_time', 'required'=>true)) !!} 
                        <p class="help-block">In 24 Hr Format</p>

                      </div>
                    </div>
                    <div class="col-lg-6">  
                      <div class="form-group">
                        <label for="exampleInputEmail1">End Time</label>
                        {!! Form::time('end_time',old('end_time'),array('class'=>'form-control', 'id'=>'end_time', 'required'=>true)) !!} 
                        <p class="help-block">In 24 Hr Format</p>
                      </div>
                    </div>
                    <div class="col-lg-6">  
                      <div class="form-group">
                        <label for="fee">Fees</label>
                        {!! Form::number('fee',old('fee'),array('class'=>'form-control', 'id'=>'fee', 'placeholder'=>'Enter Fee in Rupee', 'required'=>true)) !!}
                        <p class="help-block">Enter 0 If it's free</p>
                      </div>
                    </div>
                    <div class="col-lg-6">  
                      <div class="form-group">
                        <label for="exampleInputEmail1">Banner Image (370x370 pixels)</label><br>
                        @if(isset($workshop))
                          {!! Form::file('banner_image',array('class'=>'form-control')) !!}
                        @else
                          {!! Form::file('banner_image',array('class'=>'form-control', 'required'=>true)) !!}
                        @endif
                        <p class="help-block">
                          Previous Image will be overriden if you upload new one
                        </p>
                      </div>
                    </div>
                    @if(isset($workshop))
                    <div class="col-lg-6">
                      <img src="{{ asset('frontend/images/workshop/'.$workshop->banner_image) }}" class="img-responsive">
                      <small>Select New banner image to replace this image</small>
                    </div>
                    @endif

                </div>
                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              {!! Form::close() !!}
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

    <script src="/admin/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <script src="/admin/dist/js/cloudinarywidget.js"></script>
    <script src="/admin/dist/js/main.js"></script>

@stop     