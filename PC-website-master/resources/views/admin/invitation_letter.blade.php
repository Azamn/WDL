@extends('admin.master')

@section('title')
Invitation Letters
@stop

@section('content')
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>Invitation letters</h1>
          <br>
          <a href="{{ route('letter-add') }}" class="btn btn-sm btn-primary">Add letter</a>
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
                    <th>Name</th>
                    <th>Action</th>
                  </tr> 
                  @foreach($invitation_letters as $letter)
                    <tr>
                      <td>{{ $letter->id }}</td>
                      <td>{{ $letter->name }}</td>
                      <td>
                        <div class="btn-group">
                          <a href="{{ route('letter-edit', $letter->id) }}" class="btn btn-info btn-sm">
                            Edit
                          </a>
                          <a href="{{ route('letter-delete', $letter->id) }}" class="btn btn-sm btn-danger">
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