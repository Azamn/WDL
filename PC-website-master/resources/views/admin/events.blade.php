@extends('admin.master')
@section('title')
Events
@stop
@section('content')

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>Events</h1>
          <br>
          <a href="/access/root/add/event" class="btn btn-success btn-sm" style="margin-left:0%;">Add Event</a><br>
           @if(Session::has('success'))
            <div class="alert alert-success alert-success" style="margin-top: 10px; margin-bottom: 0px;">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                {{ strtoupper(Session::get('success'))  }}
            </div>
          @elseif(Session::has('error'))   
                <div style="margin-top: 10px;margin-bottom: 0px;" class="alert alert-danger alert-error">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    {{ strtoupper (Session::get('error'))  }}
                </div>   
          @endif
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody>
                  <tr>
                    <th>Title</th>
                    <th>Abount Event</th>
                    <th>Event Theme</th>
                    <th>Key Points</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr> 
                  @foreach($events as $event)
                    <tr>
                      <td>{{$event->title}} - {{$event->tagline}}</td>
                      <td>{{$event->about_event}}</td>
                      <td>{{$event->event_theme}}</td>
                      <td>{{$event->key_points}}</td>
                      <td>
                        @if($event->status == 'inactive')
                          <a href="/access/root/event/activate/{{$event->id}}" class="btn btn-sm btn-success">
                            Activate
                          </a>
                        @else
                          <a href="/access/root/event/deactivate/{{$event->id}}" class="btn btn-sm btn-danger">
                            Deactivate
                          </a>
                        @endif
                      </td>
                      <td>
                          <a href="/access/root/event/schedule/{{$event->id}}" class="btn btn-sm btn-info">
                            Schedule
                          </a> 
                      </td>
                      <td>    
                          <a href="/access/root/event/problem-defination/{{$event->id}}" class="btn btn-sm btn-warning">
                            Problem Defination
                          </a> 
                      </td>
                      <td>    
                          <a href="/access/root/event/participants/{{$event->id}}" class="btn btn-sm btn-info">
                            View Participants
                          </a> 
                      </td>
                    </tr>
                  @endforeach 
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->


      <div id="Banner" class="modal fade" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Add Tutorial</h4>
            </div>
            <div class="modal-body">
              {!! Form::open(array('url'=>'/access/root/add/tutorial' , 'data-toggle' => 'validator' , 'role' => 'form')) !!}
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tutorial Image (777x504 pixels)</label><br>
                    <a href="#" id="gallery_upload_widget_opener">Upload Image</a>
                    <div id="hiddengalleryImage"></div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Title</label><br>
                    <input type="text" required="" name="title" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Description</label><br>
                    <textarea class="form-control" required="" name="description"></textarea>
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Link</label><br>
                    <input type="text" required="" name="link" class="form-control">
                  </div>
            </div>
            <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            {!! Form::close() !!}
          </div>
        </div>
      </div>

    <script src="/admin/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <script src="/admin/dist/js/cloudinarywidget.js"></script>
    <script src="/admin/dist/js/main.js"></script>

@stop     