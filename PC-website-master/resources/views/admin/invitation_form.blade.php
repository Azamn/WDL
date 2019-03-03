@extends('admin.master')
@section('title')
Add Invitation
@stop
@section('content')

      <div class="content-wrapper">
        <section class="content-header">
          <h1>Add Invitation</h1>
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
              
              @if(isset($invitation))
                  {!! Form::model($invitation, ['route' => ['invitation-update', $invitation->id], 'method' => 'patch', 'files'=>true, 'data-toggle' => 'validator' , 'role' => 'form']) !!}
              @else
                  {!! Form::open(['route' => 'invitation-add', 'files'=>true, 'data-toggle' => 'validator' , 'role' => 'form']) !!}
              @endif


                <div class="box-body">
                  <div class="row"> 
                    <div class="col-lg-12">  
                      <div class="form-group">
                        <label for="title">Name</label>
                        {!! Form::text('name',old('name'),array('class'=>'form-control', 'placeholder'=> 'Enter name', 'id'=>'name', 'required'=>true)) !!}
                      </div>
                    </div>
                  </div>
                  <div class="row"> 
                    <div class="col-lg-12">  
                      <div class="form-group">
                        <label for="title">Slug</label>
                        {!! Form::text('slug',old('slug'),array('class'=>'form-control', 'placeholder'=> 'Enter slug', 'id'=>'slug', 'required'=>true)) !!}

                      </div>
                    </div>
                  </div>
                  <div class="row"> 
                    <div class="col-lg-12">  
                      <div class="form-group">
                        <label for="title">Invitation Letter ID</label>
                        {!! Form::text('invitation_letter_id',old('invitation_letter_id'),array('class'=>'form-control', 'placeholder'=> 'Enter invitation_letter_id', 'id'=>'invitation_letter_id', 'required'=>true)) !!}

                      </div>
                    </div>
                  </div>

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