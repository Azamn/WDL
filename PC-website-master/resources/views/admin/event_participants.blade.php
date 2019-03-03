@extends('admin.master')
@section('title')
{{$event->title}} Participants
@stop
@section('content')

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>{{$event->title}} Participants</h1>
          <br>
          <a style="display: inline-block;" href="/access/root/export/participants/{{$event->id}}" class="btn btn-warning btn-sm" style="margin-left:0%;">Export CSV</a>
          <a href="/access/root/add/event/participants" class="btn btn-success btn-sm" style="margin-left:0%;">Add Participant</a><br>
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
                    <th>ID</th>
                    <th>Team Name</th>
                    <th>Email</th>
                    <th>Name</th>
                    <th>Mobile</th>
                    <th>College</th>
                    <th>Department</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr> 
                  @foreach($participants as $participant)
                    <tr>
                      <td>{{$participant->id}}</td>
                      <td>{{$participant->team}}</td>
                      <td>{{$participant->email1}}<br>{{$participant->email2}}<br>{{$participant->email3}}</td>
                      <td>{{$participant->name1}}<br>{{$participant->name2}}<br>{{$participant->name3}}</td>
                      <td>{{$participant->mobile1}}<br>{{$participant->mobile2}}<br>{{$participant->mobile3}}</td>
                      <td>{{$participant->college}}</td>
                      <td>{{$participant->department}}</td>
                      <td>
                        @if($participant->status == 'unpaid')
                          <span class="badge bg-orange">{{ucwords($participant->status)}}</span>
                        @elseif($participant->status == 'paid')
                          <span class="badge bg-green">{{ucwords($participant->status)}}</span>
                        @else
                          <span class="badge bg-red">{{ucwords($participant->status)}}</span>
                        @endif
                      </td>
                      <td>
                        @if($participant->status == 'unpaid')
                          <a href="/access/root/participant/paid/{{$participant->id}}" class="btn btn-sm btn-success">
                            Mark as Paid
                          </a>
                        @else($participant->status == 'paid')
                          <a href="/access/root/participant/unpaid/{{$participant->id}}" class="btn btn-sm btn-danger">
                            Mark as Unpaid
                          </a>
                        @endif
                        <a href="/access/root/participant/deletepartcipant/{{$participant->id}}" class="btn btn-sm btn-danger">
                            Delete
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