@extends('admin.master')
@section('title')
Schedule
@stop
@section('content')

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>Schedule</h1>
          <br>
          <button type="button" class="btn btn-info btn-sm" style="margin-left:0%;" data-toggle="modal" data-target="#Banner">Add Schedule</button><br>
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
                    <th width="25%">Start Time</th>
                    <th width="25%">End Time</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr> 
                  @foreach($schedules as $schedule)
                    <tr>
                      <td>{{ $schedule->title }}</td>
                      <td>{{ $schedule->start_time }}</td>
                      <td>{{ $schedule->end_time }}</td>
                      <td>
                         @if($schedule->status == 'inactive')
                          <span class="badge bg-red">{{ucwords($schedule->status)}}</span>
                        @else
                          <span class="badge bg-green">{{ucwords($schedule->status)}}</span>
                        @endif  
                      </td>
                      <td>
                        @if($schedule->status == 'inactive')
                          <a href="/access/root/schedule/activate/{{$schedule->id}}" class="btn btn-sm btn-success">
                            Activate
                          </a>
                        @else
                          <a href="/access/root/schedule/deactivate/{{$schedule->id}}" class="btn btn-sm btn-danger">
                            Deactivate
                          </a>
                        @endif  
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
              <h4 class="modal-title">Add Schedule</h4>
            </div>
            <div class="modal-body">
              {!! Form::open(array('url'=>'/access/root/add/schedule' , 'data-toggle' => 'validator' , 'role' => 'form')) !!}
                  <div class="form-group">
                    <label for="exampleInputEmail1">Title</label><br>
                    <input type="text" required="" name="title" class="form-control">
                    <input type="hidden" name="event_id" value="{{$id}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Start Time</label><br>
                    <input type="time" class="form-control" name="start_time" required="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">End Time</label><br>
                    <input type="time" class="form-control" name="end_time" required="">
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