@extends('admin.master')
@section('title')
Contact Us
@stop
@section('content')

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>Contact Us</h1>
          <br>
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
                    <th>Email</th>
                    <th width="25%">Subject</th>
                    <th width="25%">Message</th>
                  </tr> 
                  @foreach($contacts as $contact)
                    <tr>
                      <td>{{ $contact->name }}</td>
                      <td>{{ $contact->email }}</td>
                      <td>{{ $contact->subject }}</td>
                      <td>{{ $contact->message }}</td>
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
@stop     