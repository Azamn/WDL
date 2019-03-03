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
          @elseif(Session::has('error'))   
                <div style="margin-top: 10px;margin-bottom: 0px;" class="alert alert-danger alert-error">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    {{ strtoupper (Session::get('error'))  }}
                </div>   
          @endif
        </section>
        <section class="content">
          <div class="box box-primary">
            <div class="box-header with-border"></div>
              {!! Form::open(array('url'=>'/access/root/post/event' , 'data-toggle' => 'validator' , 'role' => 'form')) !!}
                <div class="box-body">
                  <div class="row"> 
                    <div class="col-lg-6">  
                      <div class="form-group">
                        <label for="exampleInputEmail1">TITLE</label>
                        <input type="text" class="form-control" name="title" id="exampleInputEmail1" required="" placeholder="Algorithm 3.0">
                      </div>
                    </div>
                      <div class="col-lg-6">  
                      <div class="form-group">
                        <label for="exampleInputEmail1">TAGLINE</label>
                        <input type="text" class="form-control" name="tagline" placeholder="AN INTERCOLLEGIATE COMPETITION" id="exampleInputEmail1" required="">
                      </div>
                    </div>
                    <div class="col-lg-6">  
                      <div class="form-group">
                        <label for="exampleInputEmail1">Banner Image (1702x630 pixels)</label><br>
                        <a href="#" id="gallery_upload_widget_opener">Upload Image</a>
                        <div id="hiddengalleryImage"></div>
                      </div>
                    </div>
                     <div class="col-lg-6">  
                      <div class="form-group">
                        <label for="exampleInputEmail1">About Event</label>
                        <textarea placeholder="About Event" name="about_event" class="form-control" required=""></textarea>
                      </div>
                    </div>
                     <div class="col-lg-6">  
                      <div class="form-group">
                        <label for="exampleInputEmail1">Event Theme</label>
                        <textarea placeholder="Event Theme" name="event_theme" class="form-control" required=""></textarea>
                      </div>
                    </div>
                     <div class="col-lg-6">  
                      <div class="form-group">
                        <label for="exampleInputEmail1">Key Points (Comma Seprated)</label>
                        <input type="text" name="key_points" required="" class="form-control" id="exampleInputEmail1" placeholder="intercollege event,social problems solution using digital platforms,...">
                      </div>
                    </div>
                    <div class="col-lg-6">  
                      <div class="form-group">
                        <label for="exampleInputEmail1">Duration</label>
                        <input type="text" name="duration" required="" class="form-control" id="exampleInputEmail1" placeholder="1 Day">
                      </div>
                    </div>
                     <div class="col-lg-6">  
                      <div class="form-group">
                        <label for="exampleInputEmail1">Date</label>
                        <input type="date" name="date" required="" class="form-control" id="exampleInputEmail1" placeholder="abc@xyz.com">
                      </div>
                    </div>
                    <div class="col-lg-6">  
                      <div class="form-group">
                        <label for="exampleInputEmail1">Time (Start Time)</label>
                        <input type="time" name="time" required="" class="form-control" id="exampleInputEmail1" placeholder="9:00 AM TO 9:00 PM">
                      </div>
                    </div>
                    <div class="col-lg-6">  
                      <div class="form-group">
                        <label for="exampleInputEmail1">Location</label>
                        <input type="text" name="location" required="" class="form-control" id="exampleInputEmail1" placeholder="Kalsekar Technical Campus,Panvel">
                      </div>
                    </div>
                    <div class="col-lg-6">  
                      <div class="form-group">
                        <label for="exampleInputEmail1">Participation</label>
                         <select name="participation" required="" class="form-control">
                          <option value="">--SELECT PARTICIPATION--</option>   
                          <option value="single">SINGLE</option>
                          <option value="group">GROUP</option>
                        </select>  
                      </div>
                    </div>
                    <div class="col-lg-6">  
                      <div class="form-group">
                        <label for="exampleInputEmail1">Number Of Students (If Participation is group)</label>
                        <input type="number" name="number_of_students" class="form-control" id="exampleInputEmail1" placeholder="3">
                      </div>
                    </div>
                    <div class="col-lg-6">  
                      <div class="form-group">
                        <label for="exampleInputEmail1">Eligible Departments (Comma Seprated)</label>
                        <input type="text" name="eligible_departments" class="form-control" required="" id="exampleInputEmail1" placeholder="CO,IT,BSCIT,MCA,CS">
                      </div>
                    </div>
                    <div class="col-lg-6">  
                      <div class="form-group">
                        <label for="exampleInputEmail1">Fees</label>
                        <input type="number" name="fees" class="form-control" id="exampleInputEmail1" required="">
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