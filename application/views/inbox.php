<!DOCTYPE html>
<html>
    
<!-- Mirrored from coderthemes.com/ubold_2.2/light/email-inbox.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Jan 2017 04:55:16 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="assets/images/favicon_1.ico">

        <title>Ubold - Responsive Admin Dashboard Template</title>
        
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

                                <h4 class="page-title">Inbox</h4>
                                <ol class="breadcrumb">
                                    <li><a href="#">Ubold</a></li>
                                    <li><a href="#">Mail</a></li>
                                    <li class="active">Inbox</li>
                                </ol>
                            </div>
                        </div>

                        <div class="row">
                        
                            <!-- Left sidebar -->
                            <div class="col-lg-3 col-md-4">
                                
                                <div class="p-20">
                                	<a href="<?=base_url();?>home/compose" class="btn btn-danger btn-rounded btn-custom btn-block waves-effect waves-light">Compose</a>
                                	
                                	<div class="list-group mail-list  m-t-20">
                                        <a href="<?=base_url();?>home" class="list-group-item b-0 active"><i class="fa fa-download m-r-10"></i>Inbox <b>(8)</b></a>
                                        <a href="#" class="list-group-item b-0"><i class="fa fa-star-o m-r-10"></i>Starred</a>
                                        <a href="<?=base_url();?>home/draft" class="list-group-item b-0"><i class="fa fa-file-text-o m-r-10"></i>Draft <b>(20)</b></a>
                                        <a href="<?=base_url();?>home" class="list-group-item b-0"><i class="fa fa-paper-plane-o m-r-10"></i>Sent Mail</a>
                                        <a href="<?=base_url();?>home/trash" class="list-group-item b-0"><i class="fa fa-trash-o m-r-10"></i>Trash <b>(354)</b></a>
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
                                                    <li><a href="javascript:void(0);">Action</a></li>
                                                    <li><a href="javascript:void(0);">Another action</a></li>
                                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="javascript:void(0);">Separated link</a></li>
                                                </ul>
                                            </div>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary waves-effect waves-light  dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-tag"></i>
                                                <b class="caret"></b>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="javascript:void(0);">Action</a></li>
                                                    <li><a href="javascript:void(0);">Another action</a></li>
                                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="javascript:void(0);">Separated link</a></li>
                                                </ul>
                                            </div>
                                            
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary waves-effect waves-light  dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                  More
                                                  <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu">
                                                  <li><a href="javascript:void(0);">Dropdown link</a></li>
                                                  <li><a href="javascript:void(0);">Dropdown link</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- End row -->
                                
                                <div class="panel panel-default m-t-20">
                                    <div class="panel-body p-0">
                                        <div class="table-responsive">
                                            <table class="table table-hover mails m-0">
                                                <tbody>
                                                    <tr class="unread">
                                                        <td class="mail-select">
                                                            <div class="checkbox checkbox-primary m-r-15">
                                                                <input id="checkbox1" type="checkbox">
                                                                <label for="checkbox1"></label>
                                                            </div>
                                                            
                                                            <i class="fa fa-star m-r-15 text-muted"></i>
                                                            
                                                            <i class="fa fa-circle m-l-5 text-warning"></i>
                                                        </td>
                                                        
                                                        <td>
                                                            <a href="email-read.html" class="email-name">Google Inc</a>
                                                        </td>
                                                        
                                                        <td class="hidden-xs">
                                                            <a href="email-read.html" class="email-msg">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a>
                                                        </td>
                                                        <td style="width: 20px;">
                                                            <i class="fa fa-paperclip"></i>
                                                        </td>
                                                        <td class="text-right">
                                                            07:23 AM
                                                        </td>
                                                    </tr>
                                                    
                                                    <tr class="unread">
                                                        <td class="mail-select">
                                                            <div class="checkbox checkbox-primary m-r-15">
                                                                <input id="checkbox2" type="checkbox">
                                                                <label for="checkbox2"></label>
                                                            </div>

                                                            <i class="fa fa-star m-r-15 text-muted"></i>

                                                            <i class="fa fa-circle m-l-5 text-pink"></i>
                                                        </td>

                                                        <td>
                                                            <a href="email-read.html" class="email-name">John Deo</a>
                                                        </td>

                                                        <td class="hidden-xs">
                                                            <a href="email-read.html" class="email-msg">Hi Bro, How are you?</a>
                                                        </td>
                                                        <td style="width: 20px;">
                                                            <i class="fa fa-paperclip"></i>
                                                        </td>
                                                        <td class="text-right">
                                                            07:23 AM
                                                        </td>
                                                    </tr>

                                                    <tr class="unread">
                                                        <td class="mail-select">
                                                            <div class="checkbox checkbox-primary m-r-15">
                                                                <input id="checkbox3" type="checkbox">
                                                                <label for="checkbox3"></label>
                                                            </div>

                                                            <i class="fa fa-star text-warning m-r-15"></i>

                                                            <i class="fa fa-circle m-l-5 text-success"></i>
                                                        </td>

                                                        <td>
                                                            <a href="email-read.html" class="email-name">Manager</a>
                                                        </td>

                                                        <td class="hidden-xs">
                                                            <a href="email-read.html" class="email-msg">Dolor sit amet, consectetuer adipiscing</a>
                                                        </td>
                                                        <td style="width: 20px;">
                                                            <i class="fa fa-paperclip"></i>
                                                        </td>
                                                        <td class="text-right">
                                                            03:00 AM
                                                        </td>
                                                    </tr>

                                                    <tr class="unread">
                                                        <td class="mail-select">
                                                            <div class="checkbox checkbox-primary m-r-15">
                                                                <input id="checkbox4" type="checkbox">
                                                                <label for="checkbox4"></label>
                                                            </div>

                                                            <i class="fa fa-star m-r-15 text-muted"></i>

                                                            <i class="fa fa-circle m-l-5 text-purple"></i>
                                                        </td>

                                                        <td>
                                                            <a href="email-read.html" class="email-name">Google Inc</a>
                                                        </td>

                                                        <td class="hidden-xs">
                                                            <a href="email-read.html" class="email-msg">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a>
                                                        </td>
                                                        <td style="width: 20px;">
                                                            <i class="fa fa-paperclip"></i>
                                                        </td>
                                                        <td class="text-right">
                                                            01:23 AM
                                                        </td>
                                                    </tr>

                                                    <tr class="unread">
                                                        <td class="mail-select">
                                                            <div class="checkbox checkbox-primary m-r-15">
                                                                <input id="checkbox5" type="checkbox">
                                                                <label for="checkbox5"></label>
                                                            </div>

                                                            <i class="fa fa-star m-r-15 text-muted"></i>

                                                            <i class="fa fa-circle m-l-5 text-info"></i>
                                                        </td>

                                                        <td>
                                                            <a href="email-read.html" class="email-name">John Deo</a>
                                                        </td>

                                                        <td class="hidden-xs">
                                                            <a href="email-read.html" class="email-msg">Hi Bro, How are you?</a>
                                                        </td>
                                                        <td style="width: 20px;">
                                                            <i class="fa fa-paperclip"></i>
                                                        </td>
                                                        <td class="text-right">
                                                            11 Oct
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="mail-select">
                                                            <div class="checkbox checkbox-primary m-r-15">
                                                                <input id="checkbox6" type="checkbox">
                                                                <label for="checkbox6"></label>
                                                            </div>

                                                            <i class="fa fa-star text-warning m-r-15"></i>

                                                            <i class="fa fa-circle m-l-5 text-white"></i>
                                                        </td>

                                                        <td>
                                                            <a href="email-read.html" class="email-name">Manager</a>
                                                        </td>

                                                        <td class="hidden-xs">
                                                            <a href="email-read.html" class="email-msg">Dolor sit amet, consectetuer adipiscing</a>
                                                        </td>
                                                        <td style="width: 20px;">
                                                            <i class="fa fa-paperclip"></i>
                                                        </td>
                                                        <td class="text-right">
                                                            11 Oct
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="mail-select">
                                                            <div class="checkbox checkbox-primary m-r-15">
                                                                <input id="checkbox7" type="checkbox">
                                                                <label for="checkbox7"></label>
                                                            </div>

                                                            <i class="fa fa-star m-r-15 text-muted"></i>

                                                            <i class="fa fa-circle m-l-5 text-white"></i>
                                                        </td>

                                                        <td>
                                                            <a href="email-read.html" class="email-name">Google Inc</a>
                                                        </td>

                                                        <td class="hidden-xs">
                                                            <a href="email-read.html" class="email-msg">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a>
                                                        </td>
                                                        <td style="width: 20px;">
                                                            <i class="fa fa-paperclip"></i>
                                                        </td>
                                                        <td class="text-right">
                                                            11 Oct
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="mail-select">
                                                            <div class="checkbox checkbox-primary m-r-15">
                                                                <input id="checkbox8" type="checkbox">
                                                                <label for="checkbox8"></label>
                                                            </div>

                                                            <i class="fa fa-star m-r-15 text-muted"></i>

                                                            <i class="fa fa-circle m-l-5 text-white"></i>
                                                        </td>

                                                        <td>
                                                            <a href="email-read.html" class="email-name">John Deo</a>
                                                        </td>

                                                        <td class="hidden-xs">
                                                            <a href="email-read.html" class="email-msg">Hi Bro, How are you?</a>
                                                        </td>
                                                        <td style="width: 20px;">
                                                            <i class="fa fa-paperclip"></i>
                                                        </td>
                                                        <td class="text-right">
                                                            10 Oct
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="mail-select">
                                                            <div class="checkbox checkbox-primary m-r-15">
                                                                <input id="checkbox9" type="checkbox">
                                                                <label for="checkbox9"></label>
                                                            </div>

                                                            <i class="fa fa-star text-warning m-r-15"></i>

                                                            <i class="fa fa-circle m-l-5 text-info"></i>
                                                        </td>

                                                        <td>
                                                            <a href="email-read.html" class="email-name">Manager</a>
                                                        </td>

                                                        <td class="hidden-xs">
                                                            <a href="email-read.html" class="email-msg">Dolor sit amet, consectetuer adipiscing</a>
                                                        </td>
                                                        <td style="width: 20px;">
                                                            <i class="fa fa-paperclip"></i>
                                                        </td>
                                                        <td class="text-right">
                                                            10 Oct
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="mail-select">
                                                            <div class="checkbox checkbox-primary m-r-15">
                                                                <input id="checkbox10" type="checkbox">
                                                                <label for="checkbox10"></label>
                                                            </div>

                                                            <i class="fa fa-star m-r-15 text-muted"></i>

                                                            <i class="fa fa-circle m-l-5 text-warning"></i>
                                                        </td>

                                                        <td>
                                                            <a href="email-read.html" class="email-name">Google Inc</a>
                                                        </td>

                                                        <td class="hidden-xs">
                                                            <a href="email-read.html" class="email-msg">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a>
                                                        </td>
                                                        <td style="width: 20px;">
                                                            <i class="fa fa-paperclip"></i>
                                                        </td>
                                                        <td class="text-right">
                                                            10 Oct
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="mail-select">
                                                            <div class="checkbox checkbox-primary m-r-15">
                                                                <input id="checkbox11" type="checkbox">
                                                                <label for="checkbox11"></label>
                                                            </div>

                                                            <i class="fa fa-star m-r-15 text-muted"></i>

                                                            <i class="fa fa-circle m-l-5 text-white"></i>
                                                        </td>

                                                        <td>
                                                            <a href="email-read.html" class="email-name">John Deo</a>
                                                        </td>

                                                        <td class="hidden-xs">
                                                            <a href="email-read.html" class="email-msg">Hi Bro, How are you?</a>
                                                        </td>
                                                        <td style="width: 20px;">
                                                            <i class="fa fa-paperclip"></i>
                                                        </td>
                                                        <td class="text-right">
                                                            9 Oct
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="mail-select">
                                                            <div class="checkbox checkbox-primary m-r-15">
                                                                <input id="checkbox12" type="checkbox">
                                                                <label for="checkbox12"></label>
                                                            </div>

                                                            <i class="fa fa-star text-warning m-r-15"></i>

                                                            <i class="fa fa-circle m-l-5 text-purple"></i>
                                                        </td>

                                                        <td>
                                                            <a href="email-read.html" class="email-name">Manager</a>
                                                        </td>

                                                        <td class="hidden-xs">
                                                            <a href="email-read.html" class="email-msg">Dolor sit amet, consectetuer adipiscing</a>
                                                        </td>
                                                        <td style="width: 20px;">
                                                            <i class="fa fa-paperclip"></i>
                                                        </td>
                                                        <td class="text-right">
                                                            9 Oct
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="mail-select">
                                                            <div class="checkbox checkbox-primary m-r-15">
                                                                <input id="checkbox13" type="checkbox">
                                                                <label for="checkbox13"></label>
                                                            </div>

                                                            <i class="fa fa-star m-r-15 text-muted"></i>

                                                            <i class="fa fa-circle m-l-5 text-pink"></i>
                                                        </td>

                                                        <td>
                                                            <a href="email-read.html" class="email-name">Google Inc</a>
                                                        </td>

                                                        <td class="hidden-xs">
                                                            <a href="email-read.html" class="email-msg">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a>
                                                        </td>
                                                        <td style="width: 20px;">
                                                            <i class="fa fa-paperclip"></i>
                                                        </td>
                                                        <td class="text-right">
                                                            9 Oct
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="mail-select">
                                                            <div class="checkbox checkbox-primary m-r-15">
                                                                <input id="checkbox14" type="checkbox">
                                                                <label for="checkbox14"></label>
                                                            </div>

                                                            <i class="fa fa-star m-r-15 text-muted"></i>

                                                            <i class="fa fa-circle m-l-5 text-info"></i>
                                                        </td>

                                                        <td>
                                                            <a href="email-read.html" class="email-name">John Deo</a>
                                                        </td>

                                                        <td class="hidden-xs">
                                                            <a href="email-read.html" class="email-msg">Hi Bro, How are you?</a>
                                                        </td>
                                                        <td style="width: 20px;">
                                                            <i class="fa fa-paperclip"></i>
                                                        </td>
                                                        <td class="text-right">
                                                            9 Oct
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="mail-select">
                                                            <div class="checkbox checkbox-primary m-r-15">
                                                                <input id="checkbox15" type="checkbox">
                                                                <label for="checkbox15"></label>
                                                            </div>

                                                            <i class="fa fa-star text-warning m-r-15"></i>

                                                            <i class="fa fa-circle m-l-5 text-white"></i>
                                                        </td>

                                                        <td>
                                                            <a href="email-read.html" class="email-name">Manager</a>
                                                        </td>

                                                        <td class="hidden-xs">
                                                            <a href="email-read.html" class="email-msg">Dolor sit amet, consectetuer adipiscing</a>
                                                        </td>
                                                        <td style="width: 20px;">
                                                            <i class="fa fa-paperclip"></i>
                                                        </td>
                                                        <td class="text-right">
                                                            7 Oct
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="mail-select">
                                                            <div class="checkbox checkbox-primary m-r-15">
                                                                <input id="checkbox16" type="checkbox">
                                                                <label for="checkbox16"></label>
                                                            </div>

                                                            <i class="fa fa-star m-r-15 text-muted"></i>

                                                            <i class="fa fa-circle m-l-5 text-white"></i>
                                                        </td>

                                                        <td>
                                                            <a href="email-read.html" class="email-name">Google Inc</a>
                                                        </td>

                                                        <td class="hidden-xs">
                                                            <a href="email-read.html" class="email-msg">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a>
                                                        </td>
                                                        <td style="width: 20px;">
                                                            <i class="fa fa-paperclip"></i>
                                                        </td>
                                                        <td class="text-right">
                                                            7 Oct
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="mail-select">
                                                            <div class="checkbox checkbox-primary m-r-15">
                                                                <input id="checkbox17" type="checkbox">
                                                                <label for="checkbox17"></label>
                                                            </div>

                                                            <i class="fa fa-star m-r-15 text-muted"></i>

                                                            <i class="fa fa-circle m-l-5 text-white"></i>
                                                        </td>

                                                        <td>
                                                            <a href="email-read.html" class="email-name">John Deo</a>
                                                        </td>

                                                        <td class="hidden-xs">
                                                            <a href="email-read.html" class="email-msg">Hi Bro, How are you?</a>
                                                        </td>
                                                        <td style="width: 20px;">
                                                            <i class="fa fa-paperclip"></i>
                                                        </td>
                                                        <td class="text-right">
                                                            7 Oct
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="mail-select">
                                                            <div class="checkbox checkbox-primary m-r-15">
                                                                <input id="checkbox18" type="checkbox">
                                                                <label for="checkbox18"></label>
                                                            </div>

                                                            <i class="fa fa-star text-warning m-r-15"></i>

                                                            <i class="fa fa-circle m-l-5 text-info"></i>
                                                        </td>

                                                        <td>
                                                            <a href="email-read.html" class="email-name">Manager</a>
                                                        </td>

                                                        <td class="hidden-xs">
                                                            <a href="email-read.html" class="email-msg">Dolor sit amet, consectetuer adipiscing</a>
                                                        </td>
                                                        <td style="width: 20px;">
                                                            <i class="fa fa-paperclip"></i>
                                                        </td>
                                                        <td class="text-right">
                                                            7 Oct
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="mail-select">
                                                            <div class="checkbox checkbox-primary m-r-15">
                                                                <input id="checkbox19" type="checkbox">
                                                                <label for="checkbox19"></label>
                                                            </div>

                                                            <i class="fa fa-star m-r-15 text-muted"></i>

                                                            <i class="fa fa-circle m-l-5 text-pink"></i>
                                                        </td>

                                                        <td>
                                                            <a href="email-read.html" class="email-name">Google Inc</a>
                                                        </td>

                                                        <td class="hidden-xs">
                                                            <a href="email-read.html" class="email-msg">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a>
                                                        </td>
                                                        <td style="width: 20px;">
                                                            <i class="fa fa-paperclip"></i>
                                                        </td>
                                                        <td class="text-right">
                                                            7 Oct
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="mail-select">
                                                            <div class="checkbox checkbox-primary m-r-15">
                                                                <input id="checkbox20" type="checkbox">
                                                                <label for="checkbox20"></label>
                                                            </div>

                                                            <i class="fa fa-star m-r-15 text-muted"></i>

                                                            <i class="fa fa-circle m-l-5 text-success"></i>
                                                        </td>

                                                        <td>
                                                            <a href="email-read.html" class="email-name">John Deo</a>
                                                        </td>

                                                        <td class="hidden-xs">
                                                            <a href="email-read.html" class="email-msg">Hi Bro, How are you?</a>
                                                        </td>
                                                        <td style="width: 20px;">
                                                            <i class="fa fa-paperclip"></i>
                                                        </td>
                                                        <td class="text-right">
                                                            7 Oct
                                                        </td>
                                                    </tr>


                                                
                                                </tbody>
                                            </table>
                                        </div>
                                    
                                    </div> <!-- panel body -->
                                </div> <!-- panel -->
                                
                                <div class="row">
                                    <div class="col-xs-7">
                                        Showing 1 - 20 of 289
                                    </div>
                                    <div class="col-xs-5">
                                        <div class="btn-group pull-right">
                                          <button type="button" class="btn btn-default waves-effect"><i class="fa fa-chevron-left"></i></button>
                                          <button type="button" class="btn btn-default waves-effect"><i class="fa fa-chevron-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                
                            </div> <!-- end Col-9 -->
                        
                        </div><!-- End row -->



                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class="footer">
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
        
	
	</body>

<!-- Mirrored from coderthemes.com/ubold_2.2/light/email-inbox.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Jan 2017 04:55:16 GMT -->
</html>