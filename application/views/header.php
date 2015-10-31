<!DOCTYPE html>
<html dir="ltr" lang="en-US">
    <head>
    
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<!-- Stylesheets============================================ -->
	<link rel="stylesheet" href="<?php echo site_url();?>application/assests/css/extra.css" type="text/css" />
	<!--<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />-->
	<link rel="stylesheet" href="<?php echo site_url();?>application/assests/style.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo site_url();?>application/assests/css/dark.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo site_url();?>application/assests/css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo site_url();?>application/assests/css/animate.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo site_url();?>application/assests/css/magnific-popup.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo site_url();?>application/assests/css/responsive.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo site_url();?>application/assests/css/bootstrap.css" type="text/css" />
	<link href="<?php echo site_url(); ?>application/assests/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<!--Checkbox Look Like Button-->
	<link href="<?php echo site_url(); ?>application/assests/button.css" rel="stylesheet" />
	<!-- End Checkbox Look Like Button-->
	<script src="<?php echo site_url();?>application/assests/js/jquery.min.js"></script>
	<!--====================DATE PICKER==========================-->
	<link href="<?php echo base_url(); ?>application/assests/plugins/bootstrap-datetimepicker2/css/bootstrap-datetimepicker.css" rel="stylesheet" />
	<script src="<?php echo base_url(); ?>application/assests/plugins/bootstrap-datetimepicker2/js/moment-with-locales.js"></script>
	<script src="<?php echo base_url(); ?>application/assests/plugins/bootstrap-datetimepicker2/js/bootstrap-datetimepicker.min.js"></script>
	<!--=====================DATE PICKER===========================-->
	
	
	<script src="<?php echo base_url(); ?>application/assests/checkbox.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
	
	<style type="text/css">
	    #bootstrapSelectForm .selectContainer .form-control-feedback
	    {
	    right: -15px;
	    }
	    .padding{
		padding-right:5px;
	    }
	</style>
	<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->
	
	<!-- External JavaScripts============================================ -->
	<script type="text/javascript" src="<?php echo site_url();?>application/assests/js/plugins.js"></script>
	<script>
	$(function() {
	    $('.selectpicker').on('change', function(){
		var selected = $(this).find("option:selected").val();
		alert(selected);
	    });
	    
	});
	</script>
	<!-- Document Title============================================ -->
	<title>Wash Box</title>
	
    </head>
    
    <body class="stretched">
    
    <!-- Document Wrapper ============================================ -->
    <div id="wrapper" class="clearfix"  ng-app="Order">
    
    <!-- Header    ============================================= -->
    <header id="header" class="transparent-header full-header" data-sticky-class="not-dark">
    
    <div id="header-wrap">
	<div class="container clearfix">
	    <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>
	    <!-- Logo    ============================================= -->
	    <div id="logo">
		<h2 data-caption-animate="fadeInUp">
		<a href="" class="standard-logo" data-dark-logo="images/logo-dark.png" style="margin-top: 30px;"><b>WASHBOX</b></a>
		<a href="" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><b>WASHBOX</b></a>
	    </div>
	    <!-- #logo end -->
	    
	    <!-- Primary Navigation    ============================================= -->
	    <nav id="primary-menu" class="dark">
	    
		<ul>
		    <li>
			<a href="<?php echo site_url('WashBox/index');?>"><div>Home</div></a>                             
		    </li>
		    <li>
			<a href=""><div>Price</div></a>                             
		    </li>
		    <li>
			<a href="#"><div>FAQ</div></a>
		    </li>
		    <li class="">
			<a href="<?php echo site_url('WashBox/howItsWork');?>">How Its Works?</a>                             
		    </li>
		    <li class="" ng-controller="userController">
			<a href="<?php echo site_url('WashBox/washBoxOrderpage');?>"><div ng-if="userName=='login'">{{userName}}</div><div ng-if="userName!='login'">Hi, {{userName}}</div></a>                             
			<ul ng-if="userName!='login'">
			    <li><a ng-click="logout()">Logout <i class="fa fa-sign-out" style="color: red;" ></i></a></li>
			</ul>
		    </li>
		    <li class="" >
			<a href="<?php echo site_url('WashBox/washBoxOrderpage');?>" class=""><button class="btn-warning button button-3d button-rounded button-dirtygreen">Order Now</button></a>
		    
		    </li>
		</ul>
	    </nav>
	    <!-- #primary-menu end -->
	    
	</div>
    </div>
    
    </header><!-- #header end -->
    
    <script>
    var app = angular.module('Order', []);
    app.controller('userController', function($scope) {
    $scope.userName="login";
    $scope.fblogin="fblogin";
    <?php
    if($this->session->userdata("user")){
    $sessonUser=$this->session->userdata("user");
    $sessonUserName=$sessonUser["first_name"];
    ?>
    $scope.userName="<?php echo $sessonUserName; ?>";
    <?php 
    }
    else
    {
    $sessonUser=$this->session->userdata("user");
    $sessonUserName=$sessonUser["first_name"];
    ?>
    $scope.fblogin="<?php echo $sessonUserName; ?>";
    <?php
    }
    ?>
    $scope.logout = function ()
    {
    $.ajax({
    url: "<?php echo site_url();?>WashBox/userLogOut",
    type: "post",
    success:function(result){
    localStorage.clear();
    window.location.href="<?php echo site_url();?>WashBox/index";
    }
    });
    }
    });
    </script>


