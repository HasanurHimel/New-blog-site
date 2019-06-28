<!--
Author: Himel
License: Creative Commons Attribution 3.0 Unported
-->
<!DOCTYPE HTML>
<html>
<head>
    <title>Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('/') }}dashboard/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="{{ asset('/') }}dashboard/css/style.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="{{ asset('/') }}dashboard/css/morris.css" type="text/css"/>
    <!-- Graph CSS -->
    <link href="{{ asset('/') }}dashboard/css/font-awesome.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="{{ asset('/') }}dashboard/js/jquery-2.1.4.min.js"></script>




    <!-- tables -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}dashboard/css/table-style.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}dashboard/css/basictable.css" />
    <script type="text/javascript" src="{{ asset('/') }}dashboard/js/jquery.basictable.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#table').basictable();

            $('#table-breakpoint').basictable({
                breakpoint: 768
            });

            $('#table-swap-axis').basictable({
                swapAxis: true
            });

            $('#table-force-off').basictable({
                forceResponsive: false
            });

            $('#table-no-resize').basictable({
                noResize: true
            });

            $('#table-two-axis').basictable();

            $('#table-max-height').basictable({
                tableWrapper: true
            });
        });
    </script>
    <!-- //tables -->









    <!-- //jQuery -->
    <link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!-- lined-icons -->
    <link rel="stylesheet" href="{{ asset('/') }}dashboard/css/icon-font.min.css" type='text/css' />
    <!-- //lined-icons -->

                          {{--ckeditor--}}
    <script src="{{ asset('/') }}ckeditor/ckeditor.js"></script>
    <script src="{{ asset('/') }}ckeditor/samples/js/sample.js"></script>
    <link rel="stylesheet" href="{{ asset('/') }}ckeditor/samples/css/samples.css">
    <link rel="stylesheet" href="{{ asset('/') }}ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css">
                              {{--ckeditor--}}

</head>
<body>
<div class="page-container">
    <!--/content-inner-->
    <div class="left-content">
        <div class="mother-grid-inner">
            <!--header start here-->
            <div class="header-main">
                <div class="logo-w3-agile">
                    <h1><a href="index.html">Pooled</a></h1>
                </div>
                <div class="w3layouts-left">

                    <!--search-box-->
                    <div class="w3-search-box">
                        <form action="#" method="post">
                            <input type="text" placeholder="Search..." required="">
                            <input type="submit" value="">
                        </form>
                    </div><!--//end-search-box-->
                    <div class="clearfix"> </div>
                </div>
                <div class="w3layouts-right">
                    <div class="profile_details_left"><!--notifications of menu start -->
                        <ul class="nofitications-dropdown">
                            <li class="dropdown head-dpdn">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge">3</span></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="notification_header">
                                            <h3>You have  new messages</h3>
                                        </div>
                                    </li>

                                    {{--@php( $i=1 )--}}

                                    {{--@foreach($public_contacts as $public_contact)--}}
                                    {{--<li class="odd"><a href="#">--}}
                                            {{--<div class="user_img"><img src="{{ asset('/') }}dashboard/images/in10.jpg" alt=""></div>--}}
                                            {{--<div class="notification_desc">--}}
                                                {{--<p>{{ $public_contact->name }}</p>--}}
                                                {{--<p><span>{{ $public_contact->updated_at }}</span></p>--}}
                                            {{--</div>--}}
                                            {{--<div class="clearfix"></div>--}}
                                        {{--</a></li>--}}
                           {{----}}
                                    {{--@endforeach--}}

                                        <div class="notification_bottom">
                                            <a href="#">See all messages</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown head-dpdn">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">3</span></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="notification_header">
                                            <h3>You have 3 new notification</h3>
                                        </div>
                                    </li>
                                    <li><a href="#">
                                            <div class="user_img"><img src="{{ asset('/') }}dashboard/images/in8.jpg" alt=""></div>
                                            <div class="notification_desc">
                                                <p>Lorem ipsum dolor</p>
                                                <p><span>1 hour ago</span></p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </a></li>
                                    <li class="odd"><a href="#">
                                            <div class="user_img"><img src="{{ asset('/') }}dashboard/images/in6.jpg" alt=""></div>
                                            <div class="notification_desc">
                                                <p>Lorem ipsum dolor</p>
                                                <p><span>1 hour ago</span></p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </a></li>
                                    <li><a href="#">
                                            <div class="user_img"><img src="{{ asset('/') }}dashboard/images/in7.jpg" alt=""></div>
                                            <div class="notification_desc">
                                                <p>Lorem ipsum dolor</p>
                                                <p><span>1 hour ago</span></p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </a></li>
                                    <li>
                                        <div class="notification_bottom">
                                            <a href="#">See all notifications</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown head-dpdn">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue1">9</span></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="notification_header">
                                            <h3>You have 8 pending task</h3>
                                        </div>
                                    </li>
                                    <li><a href="#">
                                            <div class="task-info">
                                                <span class="task-desc">Database update</span><span class="percentage">40%</span>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="progress progress-striped active">
                                                <div class="bar yellow" style="width:40%;"></div>
                                            </div>
                                        </a></li>
                                    <li><a href="#">
                                            <div class="task-info">
                                                <span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="progress progress-striped active">
                                                <div class="bar green" style="width:90%;"></div>
                                            </div>
                                        </a></li>
                                    <li><a href="#">
                                            <div class="task-info">
                                                <span class="task-desc">Mobile App</span><span class="percentage">33%</span>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="progress progress-striped active">
                                                <div class="bar red" style="width: 33%;"></div>
                                            </div>
                                        </a></li>
                                    <li><a href="#">
                                            <div class="task-info">
                                                <span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="progress progress-striped active">
                                                <div class="bar  blue" style="width: 80%;"></div>
                                            </div>
                                        </a></li>
                                    <li>
                                        <div class="notification_bottom">
                                            <a href="#">See all pending tasks</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <div class="clearfix"> </div>
                        </ul>
                        <div class="clearfix"> </div>
                    </div>
                    <!--notification menu end -->

                    <div class="clearfix"> </div>
                </div>

                <div class="profile_details w3l">
                    <ul>
                        <li class="dropdown profile_details_drop">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <div class="profile_img">
                                    {{--<span class="prfil-img"><img src="images/in4.jpg" alt=""> </span>--}}
                                    <div class="user-name">
                                        <p>{{ Auth::user()->name }}</p>
                                        <span>Administrator</span>
                                    </div>
                                    <i class="fa fa-angle-down"></i>
                                    <i class="fa fa-angle-up"></i>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                            <ul class="dropdown-menu drp-mnu">
                                <li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li>
                                <li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li>
                                <li> <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> Logout</a> </li>                            </ul>

                            {!! Form::open(['route'=>'logout', 'id'=>'logout-form', 'method'=>'POST', 'style'=>'display: none']) !!}
                            {!! Form::close() !!}
                        </li>
                    </ul>
                </div>










                <div class="clearfix"> </div>
            </div>
            <!--heder end here-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a> <i class="fa fa-angle-right"></i></li>
            </ol>
            <!--four-grids here-->



        @yield('content')




            <!--//w3-agileits-pane-->
            <!-- script-for sticky-nav -->
            <script>
                $(document).ready(function() {
                    var navoffeset=$(".header-main").offset().top;
                    $(window).scroll(function(){
                        var scrollpos=$(window).scrollTop();
                        if(scrollpos >=navoffeset){
                            $(".header-main").addClass("fixed");
                        }else{
                            $(".header-main").removeClass("fixed");
                        }
                    });

                });
            </script>
            <!-- /script-for sticky-nav -->
            <!--inner block start here-->
            <div  class="inner-block">

            </div>
            <!--inner block end here-->
            <!--copy rights start here-->
            <div  class="copyrights">
                <p>© 2018 admin dashboard. | Design by  <a href="http://w3layouts.com/" target="_blank">HImel</a> </p>
            </div>
            <!--COPY rights end here-->
        </div>
    </div>
    <!--//content-inner-->
    <!--/sidebar-menu-->
    <div class="sidebar-menu">
        <header class="logo1">
            <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a>
        </header>
        <div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
        <div class="menu">
            <ul id="menu" >



                <li id="menu-academico" ><a href="#"><i class="fa fa-cogs" aria-hidden="true"></i><span>Header Section</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
                    <ul id="menu-academico-sub" >
                        <li id="menu-academico-avaliacoes" ><a href="{{ route('create-header') }}">Create Header</a></li>
                        <li id="menu-academico-avaliacoes" ><a href="{{ route('manage-header') }}">Manage Header</a></li>
                    </ul>
                </li>


                <li id="menu-academico" ><a href="#"><i class="fa fa-cogs" aria-hidden="true"></i><span>Category</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
                    <ul id="menu-academico-sub" >
                        <li id="menu-academico-avaliacoes" ><a href="{{ route('create-category') }}">Create Category</a></li>
                        <li id="menu-academico-avaliacoes" ><a href="{{ route('manage-category') }}">Manage Category</a></li>
                    </ul>
                </li>

                <li id="menu-academico" ><a href="#"><i class="fa fa-cogs" aria-hidden="true"></i><span>Blog</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
                    <ul id="menu-academico-sub" >
                        <li id="menu-academico-avaliacoes" ><a href="{{ route('create-blog') }}">Create Blog</a></li>
                        <li id="menu-academico-avaliacoes" ><a href="{{ route('manage-blog') }}">Manage Blog</a></li>
                    </ul>
                </li>
                <li id="menu-academico" ><a href="#"><i class="fa fa-cogs" aria-hidden="true"></i><span>Carousel</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
                    <ul id="menu-academico-sub" >
                        <li id="menu-academico-avaliacoes" ><a href="{{ route('create-carousel') }}">Create Carousel</a></li>
                        <li id="menu-academico-avaliacoes" ><a href="{{ route('manage-carousel') }}">Manage Carousel</a></li>
                    </ul>
                </li>
                <li id="menu-academico" ><a href="#"><i class="fa fa-cogs" aria-hidden="true"></i><span>Tutorial</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
                    <ul id="menu-academico-sub" >
                        <li id="menu-academico-avaliacoes" ><a href="{{ route('create-tutorial') }}">Create Tutorial</a></li>
                        <li id="menu-academico-avaliacoes" ><a href="{{ route('manage-tutorial') }}">Manage Carousel</a></li>
                    </ul>
                </li>
                <li id="menu-academico" ><a href="#"><i class="fa fa-cogs" aria-hidden="true"></i><span>General knowledge</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
                    <ul id="menu-academico-sub" >
                        <li id="menu-academico-avaliacoes" ><a href="{{ route('gk-category-create') }}">Gk Category</a></li>
                        <li id="menu-academico-avaliacoes" ><a href="{{ route('gk-category-manage') }}">Gk Category Manage</a></li>
                        <li id="menu-academico-avaliacoes" ><a href="{{ route('create-gk') }}">Create Gk</a></li>
                        <li id="menu-academico-avaliacoes" ><a href="{{ route('manage-gk') }}">Manage Gk</a></li>
                    </ul>
                </li>

               



            </ul>
        </div>
    </div>
    <div class="clearfix"></div>
</div>



<script>
    var toggle = true;

    $(".sidebar-icon").click(function() {
        if (toggle)
        {
            $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
            $("#menu span").css({"position":"absolute"});
        }
        else
        {
            $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
            setTimeout(function() {
                $("#menu span").css({"position":"relative"});
            }, 400);
        }

        toggle = !toggle;
    });
</script>
<script>
    CKEDITOR.replace( 'summary-ckeditor', {
        filebrowserBrowseUrl : "{{ URL::asset('/ckeditor/kcfinder/browse.php?opener=ckeditor&type=files') }}",
        filebrowserImageBrowseUrl : "{{ URL::asset('/ckeditor/kcfinder/browse.php?opener=ckeditor&type=images') }}",
        filebrowserFlashBrowseUrl : "{{ URL::asset('/ckeditor/kcfinder/browse.php?opener=ckeditor&type=flash') }}",
        filebrowserUploadUrl : "{{ URL::asset('/ckeditor/kcfinder/upload.php?opener=ckeditor&type=files') }}",
        filebrowserImageUploadUrl : "{{ URL::asset('/ckeditor/kcfinder/upload.php?opener=ckeditor&type=images') }}",
        filebrowserFlashUploadUrl : "{{ URL::asset('/ckeditor/kcfinder/upload.php?opener=ckeditor&type=flash') }}",
    });
</script>
<!--js -->
<script src="{{ asset('/') }}dashboard/js/jquery.nicescroll.js"></script>
<script src="{{ asset('/') }}dashboard/js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('/') }}dashboard/js/bootstrap.min.js"></script>
<!-- /Bootstrap Core JavaScript -->
<!-- morris JavaScript -->
<script src="{{ asset('/') }}dashboard/js/raphael-min.js"></script>
<script src="{{ asset('/') }}dashboard/js/morris.js"></script>
<script>
    $(document).ready(function() {
        //BOX BUTTON SHOW AND CLOSE
        jQuery('.small-graph-box').hover(function() {
            jQuery(this).find('.box-button').fadeIn('fast');
        }, function() {
            jQuery(this).find('.box-button').fadeOut('fast');
        });
        jQuery('.small-graph-box .box-close').click(function() {
            jQuery(this).closest('.small-graph-box').fadeOut(200);
            return false;
        });

        //CHARTS
        function gd(year, day, month) {
            return new Date(year, month - 1, day).getTime();
        }

        graphArea2 = Morris.Area({
            element: 'hero-area',
            padding: 10,
            behaveLikeLine: true,
            gridEnabled: false,
            gridLineColor: '#dddddd',
            axes: true,
            resize: true,
            smooth:true,
            pointSize: 0,
            lineWidth: 0,
            fillOpacity:0.85,
            data: [
                {period: '2014 Q1', iphone: 2668, ipad: null, itouch: 2649},
                {period: '2014 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
                {period: '2014 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
                {period: '2014 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
                {period: '2015 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
                {period: '2015 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
                {period: '2015 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
                {period: '2015 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
                {period: '2016 Q1', iphone: 10697, ipad: 4470, itouch: 2038},
                {period: '2016 Q2', iphone: 8442, ipad: 5723, itouch: 1801}
            ],
            lineColors:['#ff4a43','#a2d200','#22beef'],
            xkey: 'period',
            redraw: true,
            ykeys: ['iphone', 'ipad', 'itouch'],
            labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
            pointSize: 2,
            hideHover: 'auto',
            resize: true
        });


    });
</script>
</body>
</html>