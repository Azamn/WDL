@extends('admin.master')

@section('title')
Invitations
@stop

@section('content')
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>Invitations</h1>
          <br>
          <a href="{{ route('invitation-add') }}" class="btn btn-sm btn-primary">Add invitation</a>
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
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Short Link</th>
                    <th>QR Code</th>
                    <th>Letter Type</th>
                    <th>Action</th>
                  </tr> 
                  @foreach($invitations as $invitation)
                    <tr>
                      <td>{{ $invitation->name }}</td>
                      <td>{{ $invitation->slug }}</td>
                      <td>
                        <a href="{{ $invitation->short_link }}" target="_blank">{{ $invitation->short_link }}</a>
                      </td>
                      <td>
                        <img src="https://chart.googleapis.com/chart?cht=qr&chl={{ $invitation->short_link }}&chs=150x150" alt="Qr Code">

                      </td>
                      <td>{{ $invitation->invitation_letter_id }}</td>
                      <td>
                        <div class="btn-group">
                          <a href="{{ route('invitation-edit', $invitation->id) }}" class="btn btn-sm btn-warning">
                            Edit
                          </a>

                          <a href="{{ route('invitation-delete', $invitation->id) }}" class="btn btn-sm btn-danger">
                            Delete
                          </a>
                        </div>
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

    <script src="/admin/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <script src="/admin/dist/js/cloudinarywidget.js"></script>
    <script src="/admin/dist/js/main.js"></script>
@stop     