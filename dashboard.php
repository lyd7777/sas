<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Options Admin - Responsive Web Application Kit</title>

<!-- ========== COMMON STYLES ========== -->
<link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
<link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
<link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
<link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen" >

<!-- ========== PAGE STYLES ========== -->
<link rel="stylesheet" href="css/prism/prism.css" media="screen" > <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->


<!-- ========== THEME CSS ========== -->
<link rel="stylesheet" href="css/main.css" media="screen" >

<!-- ========== MODERNIZR ========== -->
<script src="js/modernizr/modernizr.min.js"></script>
</head>
<body class="top-navbar-fixed">
<div class="main-wrapper">

<!-- ========== TOP NAVBAR ========== -->
<nav class="navbar top-navbar bg-white box-shadow">
<div class="container-fluid">
<div class="row">
<div class="navbar-header no-padding">
<a class="navbar-brand" href="index.html">
<img src="images/logo-dark.svg" alt="Options - Admin Template" class="logo">
</a>
<span class="small-nav-handle hidden-sm hidden-xs"><i class="fa fa-outdent"></i></span>
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
<span class="sr-only">Toggle navigation</span>
<i class="fa fa-ellipsis-v"></i>
</button>
<button type="button" class="navbar-toggle mobile-nav-toggle" >
<i class="fa fa-bars"></i>
</button>
</div>
<!-- /.navbar-header -->

<div class="collapse navbar-collapse" id="navbar-collapse-1">
<ul class="nav navbar-nav" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
<li class="hidden-sm hidden-xs"><a href="#" class="user-info-handle"><i class="fa fa-user"></i></a></li>
<li class="hidden-sm hidden-xs"><a href="#" class="full-screen-handle"><i class="fa fa-arrows-alt"></i></a></li>
<li class="hidden-sm hidden-xs"><a href="#"><i class="fa fa-search"></i></a></li>
<li class="hidden-xs hidden-xs"><!-- <a href="#">My Tasks</a> --></li>
<li class=""><a href="#" class="color-primary"><i class="fa fa-diamond"></i> Upgrade</a></li>
</ul>
<!-- /.nav navbar-nav -->

<ul class="nav navbar-nav navbar-right" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
<li class="dropdown">
<a href="#" class="dropdown-toggle bg-primary" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-plus-circle"></i> Add New <span class="caret"></span></a>
<ul class="dropdown-menu" >
<li><a href="#"><i class="fa fa-plus-square-o"></i> Customer</a></li>
<li><a href="#"><i class="fa fa-plus-square-o"></i> Employee</a></li>
<li><a href="#"><i class="fa fa-plus-square-o"></i> Estimate</a></li>
<li><a href="#"><i class="fa fa-plus-square-o"></i> Task</a></li>
<li><a href="#"><i class="fa fa-plus-square-o"></i> Team Member</a></li>
<li role="separator" class="divider"></li>
<li><a href="#">Create Order</a></li>
<li role="separator" class="divider"></li>
<li><a href="#">Generate Report</a></li>
</ul>
</li>
<!-- /.dropdown -->
<li><a href="#" class=""><i class="fa fa-bell"></i></a></li>
<li><a href="#" class=""><i class="fa fa-comments"></i></a></li>
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">John Doe <span class="caret"></span></a>
<ul class="dropdown-menu profile-dropdown">
<li class="profile-menu bg-gray">
<div class="">
<img src="http://placehold.it/60/c2c2c2?text=User" alt="John Doe" class="img-circle profile-img">
<div class="profile-name">
<h6>John Doe</h6>
<a href="#">View Profile</a>
</div>
<div class="clearfix"></div>
</div>
</li>
<li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
<li><a href="#"><i class="fa fa-sliders"></i> Account Details</a></li>
<li role="separator" class="divider"></li>
<li><a href="#" class="color-danger text-center"><i class="fa fa-sign-out"></i> Logout</a></li>
</ul>
</li>
<!-- /.dropdown -->
<li><a href="#" class="hidden-xs hidden-sm open-right-sidebar"><i class="fa fa-ellipsis-v"></i></a></li>
</ul>
<!-- /.nav navbar-nav navbar-right -->
</div>
<!-- /.navbar-collapse -->
</div>
<!-- /.row -->
</div>
<!-- /.container-fluid -->
</nav>

<!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
<div class="content-wrapper">
<div class="content-container">

<?php include 'includes/sidebar.php'; ?>

<div class="main-page">
<div class="container-fluid">
<div class="row page-title-div">
<div class="col-md-6">
<h2 class="title">Dashboard</h2>
<!-- <p class="sub-title">One stop solution for perfect admin dashboard!</p> -->
</div>
<!-- /.col-md-6 -->
<div class="col-md-6 right-side">
<a class="btn bg-black toggle-code-handle" role="button">Toggle Code!</a>
</div>
<!-- /.col-md-6 text-right -->
</div>
<!-- /.row -->
<div class="row breadcrumb-div">
<!-- <div class="col-md-6">
<ul class="breadcrumb">
<li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
<li class="active">Form - CKEditor</li>
</ul>
</div> -->
<!-- /.col-md-6 -->
<div class="col-md-6 text-right">
<a href="#"><i class="fa fa-comments"></i> Talk to us</a>
<a href="#" class="pl-20"><i class="fa fa-cog"></i> Settings</a>
</div>
<!-- /.col-md-6 -->
</div>
<!-- /.row -->
</div>
<!-- /.container-fluid -->

<section class="section">
<div class="container-fluid">

<div class="row">
<div class="col-md-8 col-md-offset-2">
<!-- <div class="alert alert-info" role="alert"> -->
<!-- <strong>CKEditor!</strong> CKEditor is a free, Open Source HTML text editor designed to simplify website content creation.. For official documentation, <a href="http://ckeditor.com" target="_blank" class=" ml-5"><i class="fa fa-hand-o-right"></i> click here <i class="fa fa-hand-o-left"></i></a>. -->
<!-- </div> -->
<!-- /.alert alert-info -->
</div>
<!-- /.col-md-12 -->
</div>
<!-- /.row -->

<div class="row">
<div class="col-md-8 col-md-offset-2">
<div class="panel">
<div class="panel-heading">
<div class="panel-title">
<!-- <h5>Basic Example</h5>
 --></div>
</div>
<div class="panel-body">

<form method="POST" action="save.php">
<textarea type="text" name="editor1" id="dd" rows="10" cols="80" > 
</textarea>
 
<button type="button" class="btn btn-success btn-labeled pull-right" onclick="callResult()">Submit</button>
</form> 
<!-- /.col-md-12 -->
</div>
</div>
</div>
<!-- /.col-md-6 -->

<!-- /.col-md-12 -->
</div>
</div>
<!-- /.panel -->
</div>
<!-- /.col-md-6 -->

</div>
<!-- /.row -->

</div>
<!-- /.container-fluid -->
</section>
<!-- /.section -->

</div>
<!-- /.main-page -->

 
<!-- /.content-container -->
</div>
<!-- /.content-wrapper -->

</div>
<!-- /.main-wrapper -->

<!-- ========== COMMON JS FILES ========== -->
<script src="js/jquery/jquery-2.2.4.min.js"></script>
<script src="js/bootstrap/bootstrap.min.js"></script>
<script src="js/pace/pace.min.js"></script>
<script src="js/lobipanel/lobipanel.min.js"></script>
<script src="js/iscroll/iscroll.js"></script>

<!-- ========== PAGE JS FILES ========== -->
<script src="js/prism/prism.js"></script>
<script src="js/ckeditor/ckeditor.js"></script>

<!-- ========== THEME JS ========== -->
<script src="js/main.js"></script>
<script>
$(function($) {
CKEDITOR.replace( 'editor1' );

// CKEDITOR.replace( 'editor2', {
// width: '90%',
// height: 500
// } );

// CKEDITOR.replace( 'editor3', {
// // Define the toolbar groups as it is a more accessible solution.
// toolbarGroups: [
// {"name":"basicstyles","groups":["basicstyles"]},
// {"name":"links","groups":["links"]},
// {"name":"paragraph","groups":["list","blocks"]},
// {"name":"document","groups":["mode"]},
// {"name":"insert","groups":["insert"]},
// {"name":"styles","groups":["styles"]},
// {"name":"about","groups":["about"]}
// ],
// // Remove the redundant buttons from toolbar groups defined above.
// removeButtons: 'Underline,Strike,Subscript,Superscript,Anchor,Styles,Specialchar'
// } );
  });
 
function callResult()
{
// alert('dd');
$('#alerts').hide(); 
var content=$("#dd").val(); 
alert(content);
$.ajax({
type: "GET",
url: './action/actionAddContent.php',
data:"content="+content,

success: function(data) {
alert(data);
if($.trim(data)!=""){
$('#content').html("added");
}

else{
$('#alerts').html("Failure some connection issues");
}
$('#alerts').show();
}});}

</script>
<!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->

</body>
</html>