<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>@yield('title')</title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap  -->
    <link rel="stylesheet" type="text/css" href="/frontend/stylesheets/bootstrap.css" >

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="/frontend/stylesheets/shortcodes.css">
    <link rel="stylesheet" type="text/css" href="/frontend/stylesheets/style.css">


    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="/frontend/stylesheets/responsive.css">

    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="/frontend/stylesheets/colors/color1.css" id="colors">

    @section('css')
    @show

	<!-- Animation Style -->
    <!-- <link rel="stylesheet" type="text/css" href="stylesheets/animate.css"> -->

    <!-- Favicon and touch icons  -->
    <link href="/frontend/icon/apple-touch-icon-48-precomposed.png" rel="apple-touch-icon-precomposed" sizes="48x48">
    <link href="/frontend/icon/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon-precomposed" sizes="57x57">
    <link href="/frontend/icon/favicon.png" rel="shortcut icon">
    <meta name="keyword" content="@yield('keywords')">
    <meta name="description" content="@yield('description')">
    <!--[if lt IE 9]>
        <script src="javascript/html5shiv.js"></script>
        <script src="javascript/respond.min.js"></script>
    <![endif]-->
</head>
<body class="header-sticky">
    <div class="boxed">
        <div class="windows8">
            <div class="preload-inner">
                <div class="wBall" id="wBall_1">
                    <div class="wInnerBall"></div>
                </div>
                <div class="wBall" id="wBall_2">
                    <div class="wInnerBall"></div>
                </div>
                <div class="wBall" id="wBall_3">
                    <div class="wInnerBall"></div>
                </div>
                <div class="wBall" id="wBall_4">
                    <div class="wInnerBall"></div>
                </div>
                <div class="wBall" id="wBall_5">
                    <div class="wInnerBall"></div>
                </div>
            </div>
        </div>
    	<div class="header-inner-pages hidden-xs">
    		<div class="top">
    			<div class="container">
    				<div class="row">
    					<div class="col-md-12">
                            @if(Session::has('success'))
                            <div class="alert alert-success alert-success" id="flash">
                                {{ strtoupper(Session::get('success'))  }}
                            </div>
                            @elseif(Session::has('error'))
                                <div class="alert alert-danger alert-error" id="flash">
                                    {{ strtoupper (Session::get('error'))  }}
                                </div>
                            @endif
    						<div class="text-information">
    							<p>Welcome to Programmers Club</p>
    						</div>
                            <div class="right-bar">
        						<ul class="flat-information">
        							<li class="phone">
        								<a href="#" title="Phone number">+91-8286101918</a>
        							</li>
        							<li class="email">
        								<a href="mailto:connect@programmersclub.co.in" title="Email address"> connect@programmersclub.co.in</a>
        							</li>
                                </ul>
                                <ul class="flat-socials">
        							<li class="facebook">
        								<a href="https://www.facebook.com/aiktcprogrammersclub" target="_blank">
        									<i class="fa fa-facebook"></i>
        								</a>
        							</li>
        							<li class="twitter">
        								<a href="https://twitter.com/aiktcpc" target="_blank">
        									<i class="fa fa-twitter"></i>
        								</a>
        							</li>
        							<li class="youtube">
        								<a href="https://www.youtube.com/user/aiktcprogrammersclub" target="_blank">
        									<i class="fa fa-youtube-play"></i>
        								</a>
        							</li>
        						</ul>
                            </div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div><!-- /.header-inner-pages -->

    	<!-- Header -->
    	<header id="header" class="header clearfix">
        	<div class="container">
                <div class="header-wrap clearfix">
                    <div id="logo" class="logo">
                        <a href="/" rel="home">
                            <img src="/frontend/images/logo_web.png" alt="image">
                        </a>
                    </div><!-- /.logo -->
                    <div class="nav-wrap">
                        <div class="btn-menu">
                            <span></span>
                        </div><!-- //mobile menu button -->
                        <nav id="mainnav" class="mainnav">
                            <ul class="menu">
                                <li class="home">
                                    <a href="/">Home</a>
                                </li>
                                <li class="has-sub"><a href="#">Events</a>
                                    <ul class="submenu">
                                        @foreach($events as $event)
                                            <li>
                                                <a href="/event/{{$event->slug}}">
                                                    <span style="color: #fff;">{{ucwords($event->title)}}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul><!-- /.submenu -->
                                </li>
                                
                                <li><a href="blog.html">Blog</a>
                                <li><a href="/about">About</a>
                                </li>
                                    <!-- <ul class="submenu">
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-single.html">Blog single</a></li>
                                    </ul>    -->
                                </li>

                                <li><a href="/contact">Contact</a>
                                </li>
                            </ul><!-- /.menu -->
                        </nav><!-- /.mainnav -->
                    </div><!-- /.nav-wrap -->
                </div><!-- /.header-inner -->
            </div>
        </header><!-- /.header -->

        @yield('content')


        <!-- Footer -->
        <a class="go-top">
            <i class="fa fa-chevron-up"></i>
        </a>

        <!-- Bottom -->
        <div class="bottom">
            <div class="container">
                <ul class="flat-socials-v1">
                    <li class="facebook">
                                        <a href="https://www.facebook.com/aiktcprogrammersclub" target="_blank">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="twitter">
                                        <a href="https://twitter.com/aiktcpc" target="_blank">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="youtube">
                                        <a href="https://www.youtube.com/user/aiktcprogrammersclub" target="_blank">
                                            <i class="fa fa-youtube-play"></i>
                                        </a>
                                    </li>
                </ul>
                <div class="row">
                    <div class="container-bottom">
                        <div class="copyright">
                            <p>Copyright © 2018.&nbsp;<span><a href="#">Programmers Club</a></span>&nbsp;All Rights Reserved.</p>
                        </div>
                    </div><!-- /.container-bottom -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div>
    </div><!-- /. boxed -->


        <!-- Javascript -->
    <script type="text/javascript" src="/frontend/javascript/jquery.min.js"></script>
    <script type="text/javascript" src="/frontend/javascript/bootstrap.min.js"></script>
    <script type="text/javascript" src="/frontend/javascript/jquery.easing.js"></script>
    <script type="text/javascript" src="/frontend/javascript/owl.carousel.js"></script>
    <script type="text/javascript" src="/frontend/javascript/jquery-waypoints.js"></script>
    <script type="text/javascript" src="/frontend/javascript/jquery-countTo.js"></script>
    <script type="text/javascript" src="/frontend/javascript/parallax.js"></script>
    <script type="text/javascript" src="/frontend/javascript/jquery.cookie.js"></script>
    <script type="text/javascript" src="/frontend/javascript/jquery-validate.js"></script>
    <script type="text/javascript" src="/frontend/javascript/main.js"></script>

    <!-- Revolution Slider -->
    <script type="text/javascript" src="/frontend/javascript/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="/frontend/javascript/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="/frontend/javascript/slider.js"></script>
    <script type="text/javascript">
      $(document).ready( function() {
          $('#flash').delay(5000).fadeOut();
        });
    </script>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-74466222-3', 'auto');
      ga('send', 'pageview');
    </script>
</body>
</html>
