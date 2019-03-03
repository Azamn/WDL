
@extends('frontend.master')
@section('title')
Contact - Programmers Club Department of Computer Engineering - Kalsekar Technical Campus, Panvel
@stop
@section('keywords')
programmersclub, programmers club, programmersclub.co.in,armash fankar,aiktc.org,kalsekar technical campus,computer engineering,programmers,coding,laravel,php,event,college event,panel,engineering,college events,coding,hackers,code,mongodb
@stop
@section('description')
In Programmers Club, we truly believe in the power of illustration and transformation; thus, engaging and inspiring young programmers to come together on a single platform where they can interact with each other and share their innovative ideas.At Programmers Club, our mission is to make students take advantage of the resources provided and help them build their skills by providing them A clear understanding to define their goals.
@stop
@section('content')
<div class="page-title parallax parallax4"> 
    	<div class="overlay"></div>            
        <div class="container">
            <div class="row">
                <div class="col-md-12">                    
                    <div class="page-title-heading">
                        <h2 class="title">CONTACT US</h2>
                    </div><!-- /.page-title-heading -->
                    <div class="breadcrumbs">                 
                    </div><!-- /.breadcrumbs --> 
                </div><!-- /.col-md-12 -->  
            </div><!-- /.row -->  
        </div><!-- /.container -->                      
    </div><!-- /page-title parallax -->
	
      <section class="flat-row contact-page pad-top-134">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="contact-content">
                            <div class="contact-address">
                                <div class="style1">                                    
                                   <img src="/frontend/images/icon/c1.png" alt="image">
                                </div> 
                                <div class="details">
                                    <h5>Our Location</h5>
                                    <p>Department of Computer Engineering</p>
                                    <p>Plot No. 2 &amp; 3, Sector - 16, Near Thana Naka, Khandagao, New Panvel, <br>Navi Mumbai, Maharashtra 410206</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-content">
                            <div class="contact-address">
                                <div class="style1">
                                    <img src="/frontend/images/icon/c2.png" alt="image">
                                </div>
                                <div class="details">
                                    <h5>Contact us Anytime</h5>
                                    <p>Azam: <a href="tel:8286101918">8286101918</a></p>
                                    <p>Moin: <a href="tel:7738545542">7738545542</a></p>
                                    <p>Haris: <a href="tel:7977024868">7977024868</a></p>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-content">
                            <div class="contact-address">
                                <div class="style1">
                                    <img src="/frontend/images/icon/c3.png" alt="image">
                                </div>
                                <div class="details">
                                    <h5>Write Some Words</h5>
                                    <p></p>
                                    <p><a href="mailto:connect@programmersclub.co.in">connect@programmersclub.co.in</a></p>
                                    <br><br><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.row -->

                <div class="row">
                    <div class="flat-spacer d74px"></div>
                </div>

                <div id="respond" class="comment-respond contact style2">
                    <h1 class="title comment-title">Leave a Message</h1>
                    {!! Form::open(array('url'=>'/contact-us','id' => '','class' => 'flat-contact-form style2 bg-dark height-small' , 'data-toggle' => 'validator' , 'role' => 'form')) !!}
                        <div class="field clearfix">      
                            <div class="wrap-type-input">                    
                                <div class="input-wrap name">
                                    <input type="text" value="" tabindex="1" placeholder="Name" name="name" id="name" required>
                                </div>
                                <div class="input-wrap email">
                                    <input type="email" value="" tabindex="2" placeholder="Email" name="email" id="email" required>
                                </div>
                                <div class="input-wrap last Subject">
                                    <input type="text" value="" placeholder="Subject (Optinal)" name="subject" id="subject" >
                                </div>  
                            </div>
                            <div class="textarea-wrap">
                                <textarea class="type-input" tabindex="3" placeholder="Message" name="message" id="message-contact" required></textarea>
                            </div>
                        </div>
                        <div class="submit-wrap">
                            <button type="submit" class="flat-button bg-orange">Send Your Message</button>
                        </div>
                    {!! Form::close() !!}<!-- /.comment-form -->                     
                </div><!-- /#respond -->
                <br>
                <!-- Map -->
                <section class="row-map">
                    <div class="container-fluid">
                        <div class="row">
                           <!-- <script>
                            function myMap() {
                            var mapProp= {
                            center:new google.maps.LatLng(51.508742,-0.120850),
                            zoom:5,
                            };
                            var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
                            }
                            </script>

                            <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script> -->
                            
                        </div>
                    </div><!-- /.container -->
                </section>
            </div><!-- /.container -->   
        </section>
@stop