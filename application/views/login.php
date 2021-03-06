<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    
<!-- Mirrored from coderthemes.com/ubold_2.2/light/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Jan 2017 04:55:07 GMT -->
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

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script>
        var _base_url = "<?=base_url();?>";
        </script>
        
    </head>
    <body>

        <div class="account-pages"></div>
        <div class="clearfix"></div>
        <div class="wrapper-page">
            <div class=" card-box">
                <div class="panel-heading">
                    <h3 class="text-center"> Sign In to <strong class="text-custom">UBold</strong></h3>
                </div>


                <div class="panel-body">
                    <form class="form-horizontal m-t-20" method="POST" id="login">
                    <?=@$error;?>

                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="email" required placeholder="Email address" name="email">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" required placeholder="Password" name="password">
                            </div>
                        </div>
<!-- 
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox-signup" type="checkbox">
                                    <label for="checkbox-signup">
                                        Remember me
                                    </label>
                                </div>

                            </div>
                        </div> -->

                        <div class="form-group text-center m-t-40">
                            <div class="col-xs-12">
                                <button class="btn btn-pink btn-block text-uppercase waves-effect waves-light"
                                        type="submit" name="login">Log In
                                </button>
                            </div>
                        </div>

                        <div class="form-group m-t-30 m-b-0">
                            <div class="col-sm-12">
                                <a href="page-recoverpw.html" class="text-dark"><i class="fa fa-lock m-r-5"></i> Forgot
                                    your password?</a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 text-center">
                    <p>Don't have an account? <a href="page-register.html" class="text-primary m-l-5"><b>Sign Up</b></a>
                    </p>

                </div>
            </div>
            
        </div>
        
        

        
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
        <script src="<?=base_url('public');?>/assets/js/custom.js"></script>
    
    </body>

<!-- Mirrored from coderthemes.com/ubold_2.2/light/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Jan 2017 04:55:07 GMT -->
</html>