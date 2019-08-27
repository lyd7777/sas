<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Options Admin - Responsive Web Application Kit - Login</title>

<!-- ========== COMMON STYLES ========== -->
<link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
<link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
<link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >

<!-- ========== PAGE STYLES ========== -->
<link rel="stylesheet" href="css/prism/prism.css" media="screen" > <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->

<!-- ========== THEME CSS ========== -->
<link rel="stylesheet" href="css/main.css" media="screen" >

<!-- ========== MODERNIZR ========== -->
<script src="js/modernizr/modernizr.min.js"></script>
</head>
<body class="">
<div class="main-wrapper">

<div class="login-bg">
<div class="row">
<div class="col-md-4 col-md-offset-4">
<div class="login-box">
<h4 class="text-center mt-10 mb-20"> Admin Login</h4>

<form action="index.html">
<div class="form-group">
<label for="exampleInputEmail1">Username</label>
<input type="text" class="form-control input-lg" id="username" placeholder="Enter Your Email Id" autocomplete="off" >
</div>
<div class="form-group">
<label for="exampleInputPassword1">Password</label>
<input type="password" class="form-control input-lg" id="password" placeholder="Password">
</div>
 
<div class="form-group mt-20">
<div class="">
<!-- <a href="#" class="form-link"><small class="muted-text">Forgot Password?</small></a> -->
<button type="button" class="btn btn-success btn-labeled pull-right" onclick="callResult()">Sign in </button>
<div class="clearfix"></div>
</div>
</div>
</form>

<hr>

 
</div>
<!-- /.text-center -->

<hr>

<?php include 'includes/footer.php'; ?>
</div>
<!-- /.login-box -->
</div>
<!-- /.col-md-6 col-md-offset-3 -->
</div>
<!-- /.row -->
</div>
<!-- /. -->

</div>
<!-- /.main-wrapper -->

<!-- ========== COMMON JS FILES ========== -->
<script src="js/jquery/jquery-2.2.4.min.js"></script>
<script src="js/jquery-ui/jquery-ui.min.js"></script>
<script src="js/bootstrap/bootstrap.min.js"></script>
<script src="js/pace/pace.min.js"></script>
<script src="js/lobipanel/lobipanel.min.js"></script>
<script src="js/iscroll/iscroll.js"></script>

<!-- ========== PAGE JS FILES ========== -->

<!-- ========== THEME JS ========== -->
<script src="js/main.js"></script>
<script>
function callResult()
  {
  var username=$('#username').val();
  var password=$('#password').val();
  //  var warehouse=$('#warehouse').val();

  if(username=="" || password=="" ){
  alert("Enter all the Fields");
  }else{
  //alert(username);   
  //alert(password);  

  $.ajax({

  type: "GET",
  url: './action/actionLogin.php',
  data: "username="+username+"&password="+password,
  // appears as $_GET['id'] @ your backend side
  success: function(data) {
  // alert(data);
  if($.trim(data)=="failure"){
  alert("Username and Password Incorrect");
  }else if($.trim(data)=="success"){
  // $uid=$_SESSION["user"];
  document.location.href="dashboard.php";
  //  echo($_SESSION["user"]);
}
  else{
  alert("Failure some connection issues");
}}});}}
</script>

<!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
</body>
</html>
