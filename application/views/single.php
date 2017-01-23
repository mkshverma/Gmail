<!DOCTYPE html>
<html>
    
<!-- Mirrored from coderthemes.com/ubold_2.2/light/email-read.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Jan 2017 04:55:16 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="assets/images/favicon_1.ico">

        <title>Ubold - Responsive Admin Dashboard Template</title>
        
        <!--Morris Chart CSS -->
		<link rel="stylesheet" href="<?=base_url('public');?>/assets/plugins/summernote/summernote.css">

        <link href="<?=base_url('public');?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url('public');?>/assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url('public');?>/assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url('public');?>/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url('public');?>/assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url('public');?>/assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <style type="text/css">
        .content-page{margin-left:10px;}
        .content-page>.content{margin-top:10px;}
        </style>
        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        
    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="btn-group pull-right m-t-15">
                                    <button type="button" class="btn btn-default dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Settings <span class="m-l-5"><i class="fa fa-cog"></i></span></button>
                                    <ul class="dropdown-menu drop-menu-right" role="menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a></li>
                                    </ul>
                                </div>

                                <h4 class="page-title">Email read</h4>
                                <ol class="breadcrumb">
                                    <li><a href="#">Ubold</a></li>
                                    <li><a href="#">Mail</a></li>
                                    <li class="active">Read mail</li>
                                </ol>
                            </div>
                        </div>

                        <div class="row">
                        
                            <!-- Left sidebar -->
                            <div class="col-lg-3 col-md-4">
                                
                                <div class="p-20">
                                	<a href="email-compose.html" class="btn btn-danger btn-rounded btn-custom btn-block waves-effect waves-light">Compose</a>
                                	
                                	<div class="list-group mail-list  m-t-20">
                                        <a href="email-inbox.html" class="list-group-item b-0 active"><i class="fa fa-download m-r-10"></i>Inbox <b>(8)</b></a>
                                        <a href="#" class="list-group-item b-0"><i class="fa fa-star-o m-r-10"></i>Starred</a>
                                        <a href="#" class="list-group-item b-0"><i class="fa fa-file-text-o m-r-10"></i>Draft <b>(20)</b></a>
                                        <a href="#" class="list-group-item b-0"><i class="fa fa-paper-plane-o m-r-10"></i>Sent Mail</a>
                                        <a href="#" class="list-group-item b-0"><i class="fa fa-trash-o m-r-10"></i>Trash <b>(354)</b></a>
                                    </div>
                                    
                                    
                                    <h3 class="panel-title m-t-40">Labels</h3>
                                    
                                    <div class="list-group b-0 mail-list">
                                        <a href="#" class="list-group-item b-0"><span class="fa fa-circle text-info m-r-10"></span>Web App</a>
                                        <a href="#" class="list-group-item b-0"><span class="fa fa-circle text-warning m-r-10"></span>Project 1</a>
                                        <a href="#" class="list-group-item b-0"><span class="fa fa-circle text-purple m-r-10"></span>Project 2</a>
                                        <a href="#" class="list-group-item b-0"><span class="fa fa-circle text-pink m-r-10"></span>Friends</a>
                                        <a href="#" class="list-group-item b-0"><span class="fa fa-circle text-success m-r-10"></span>Family</a>
                                    </div>
                                        
                                </div>
                                
                            </div>
                            <!-- End Left sidebar -->
                        
                            <!-- Right Sidebar -->
                            <div class="col-lg-9 col-md-8">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="btn-toolbar m-t-20" role="toolbar">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary waves-effect waves-light "><i class="fa fa-inbox"></i></button>
                                                <button type="button" class="btn btn-primary waves-effect waves-light "><i class="fa fa-exclamation-circle"></i></button>
                                                <button type="button" class="btn btn-primary waves-effect waves-light "><i class="fa fa-trash-o"></i></button>
                                            </div>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-folder"></i>
                                                <b class="caret"></b>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="#fakelink">Action</a></li>
                                                    <li><a href="#fakelink">Another action</a></li>
                                                    <li><a href="#fakelink">Something else here</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#fakelink">Separated link</a></li>
                                                </ul>
                                            </div>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary waves-effect waves-light  dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-tag"></i>
                                                <b class="caret"></b>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="#fakelink">Action</a></li>
                                                    <li><a href="#fakelink">Another action</a></li>
                                                    <li><a href="#fakelink">Something else here</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#fakelink">Separated link</a></li>
                                                </ul>
                                            </div>
                                            
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary waves-effect waves-light  dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                  More
                                                  <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu">
                                                  <li><a href="#fakelink">Dropdown link</a></li>
                                                  <li><a href="#fakelink">Dropdown link</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- End row -->
                                
                                
                                <div class="row">
                                	<div class="col-sm-12">
                                		<div class="card-box m-t-20">
                                			<h4 class="m-t-0"><b>Hi Bro, How are you?</b></h4>
                                			
                                			<hr/>
                                			
                                			<div class="media m-b-30 ">
	                                            <a href="#" class="pull-left">
	                                                <img alt="" src="assets/images/users/avatar-2.jpg" class="media-object thumb-sm img-circle">
	                                            </a>
	                                            <div class="media-body">
	                                                <span class="media-meta pull-right">07:23 AM</span>
	                                                <h4 class="text-primary m-0">Jonathan Smith</h4>
	                                                <small class="text-muted">From: jonathan@domain.com</small>
	                                            </div>
	                                        </div> <!-- media -->
	
	                                        <p><b>Hi Bro...</b></p>
	                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
	                                        <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
	                                        <p>Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar,</p>
	
	                                        <hr/>
	
	                                        <h4> <i class="fa fa-paperclip m-r-10 m-b-10"></i> Attachments <span>(3)</span> </h4>
	
	                                        <div class="row">
	                                        	<div class="col-sm-2 col-xs-4">
		                                            <a href="#"> <img src="assets/images/small/img1.jpg" alt="attachment" class="img-thumbnail img-responsive"> </a>
		                                        </div>
		                                        <div class="col-sm-2 col-xs-4">
		                                            <a href="#"> <img src="assets/images/small/img2.jpg" alt="attachment" class="img-thumbnail img-responsive"> </a>
		                                        </div>
		                                        <div class="col-sm-2 col-xs-4">
		                                            <a href="#"> <img src="assets/images/small/img3.jpg" alt="attachment" class="img-thumbnail img-responsive"> </a>
		                                        </div>
	                                        </div>
                                		</div>

                                	</div>
                                </div>
                                
                                
                                <div class="row">
									<div class="col-sm-12">
										<div class="media m-b-0">
                                            <a href="#" class="pull-left">
                                                <img alt="" src="assets/images/users/avatar-9.jpg" class="media-object thumb-sm img-circle">
                                            </a>
                                            <div class="media-body">
                                            	<div class="card-box">
                                            		<div class="summernote">
	                                                	<h6>This is an Air-mode editable area.</h6>
														<ul>
															<li>
																Select a text to reveal the toolbar.
															</li>
															<li>
																Edit rich document on-the-fly, so elastic!
															</li>
														</ul>
														<p>
															End of air-mode area
														</p>

	                                                </div>
                                            	</div>
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <button type="button" class="btn btn-primary waves-effect waves-light w-md m-b-30">Send</button>
                                        </div>
									</div>
								</div>
		
		                        <!-- End row -->

                                
                                
                            </div> <!-- end Col-9 -->
                        
                        </div><!-- End row -->



                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class="footer text-right">
                    © 2017. All rights reserved.
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            <div class="side-bar right-bar nicescroll">
                <h4 class="text-center">Chat</h4>
                <div class="contact-list nicescroll">
                    <ul class="list-group contacts-list">
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-1.jpg" alt="">
                                </div>
                                <span class="name">Chadengle</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-2.jpg" alt="">
                                </div>
                                <span class="name">Tomaslau</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-3.jpg" alt="">
                                </div>
                                <span class="name">Stillnotdavid</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-4.jpg" alt="">
                                </div>
                                <span class="name">Kurafire</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-5.jpg" alt="">
                                </div>
                                <span class="name">Shahedk</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-6.jpg" alt="">
                                </div>
                                <span class="name">Adhamdannaway</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-7.jpg" alt="">
                                </div>
                                <span class="name">Ok</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-8.jpg" alt="">
                                </div>
                                <span class="name">Arashasghari</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-9.jpg" alt="">
                                </div>
                                <span class="name">Joshaustin</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-10.jpg" alt="">
                                </div>
                                <span class="name">Sortino</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                    </ul>  
                </div>
            </div>
            <!-- /Right-bar -->


	    </div>
        <!-- END wrapper -->
	
	    <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="<?=base_url('public');?>/assets/js/jquery.min.js"></script>
        <script src="<?=base_url('public');?>/assets/js/bootstrap.min.js"></script>
        <script src="<?=base_url('public');?>/assets/js/detect.js"></script>
        <script src="<?=base_url('public');?>/assets/js/fastclick.js"></script>
        <script src="<?=base_url('public');?>/assets/js/jquery.slimscroll.js"></script>
        <script src="<?=base_url('public');?>/assets/js/jquery.blockUI.js"></script>
        <script src="<?=base_url('public');?>/assets/js/waves.js"></script>
        <script src="<?=base_url('public');?>/assets/js/wow.min.js"></script>
        <script src="<?=base_url('public');?>/assets/js/jquery.nicescroll.js"></script>
        <script src="<?=base_url('public');?>/assets/js/jquery.scrollTo.min.js"></script>


        <script src="<?=base_url('public');?>/assets/js/jquery.core.js"></script>
        <script src="<?=base_url('public');?>/assets/js/jquery.app.js"></script>
        
        <!--form validation init-->
        <script src="<?=base_url('public');?>/assets/plugins/summernote/summernote.min.js"></script>

        <script>

            jQuery(document).ready(function(){

                $('.summernote').summernote({
                    airMode: true 
                });
            });
        </script>

	
	</body>

<!-- Mirrored from coderthemes.com/ubold_2.2/light/email-read.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Jan 2017 04:55:16 GMT -->
</html>