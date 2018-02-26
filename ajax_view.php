<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Admin-UI</title>
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/logoL.png"/>

	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css"
		  href="<?php echo base_url(); ?>assets/css/style.css">

	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
	<!-- slimscroll -->
	<link href="<?php echo base_url(); ?>assets/css/jquery.slimscroll.css" rel="stylesheet">
	<!-- project -->
	<link href="<?php echo base_url(); ?>assets/css/project.css" rel="stylesheet">
	<!-- flotCart css -->
	<link href="<?php echo base_url(); ?>assets/css/flotCart.css" rel="stylesheet">
	<!-- jvectormap -->
	<link href="<?php echo base_url(); ?>assets/css/jqvmap.css" rel="stylesheet">

	<!-- dataTables -->
	<link href="<?php echo base_url(); ?>assets/css/buttons.dataTables.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/dataTables.bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/responsive.dataTables.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/fixedHeader.dataTables.min.css" rel="stylesheet">

	<!-- Fontes -->
	<link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/simple-line-icons.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/ameffectsanimation.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/buttons.css" rel="stylesheet">
	<!-- animate css -->
	<link href="<?php echo base_url(); ?>assets/css/animate.css" rel="stylesheet">
	<!-- top nev css -->
	<link href="<?php echo base_url(); ?>assets/css/page-header.css" rel="stylesheet">
	<!-- adminui main css -->
	<link href="<?php echo base_url(); ?>assets/css/main.css" rel="stylesheet">
	<!-- morris -->
	<link href="<?php echo base_url(); ?>assets/css/morris.css" rel="stylesheet">
	<!-- green theme css -->
	<link href="<?php echo base_url(); ?>assets/css/green.css" rel="stylesheet">
	<!-- media css for responsive  -->
	<link href="<?php echo base_url(); ?>assets/css/main.media.css" rel="stylesheet">
	<!-- AdminUI demo css-->
	<link href="<?php echo base_url(); ?>assets/css/adminUIdemo.css" rel="stylesheet">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<!--AJAX Loading-->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
</head>

<body class="green-bg login">
<div class="logo">
	<a href="<?php echo base_url(); ?>"> <img src="<?php echo base_url(); ?>assets/images/w-logo.png" alt=""> </a>
</div>
<div class="passwordBox">
	<div class="row">
		<div class="col-md-12">
			<div class="widgets-container">
				<h2 class="font-bold">Forgot password</h2>
				<p> Enter your email address and your password will be reset and emailed to you. </p>
				<div class="row">
					<div class="col-lg-12">
						<form action="<?php //echo base_url('Soc_ctrl/forgot_password'); ?>" class="top15" method="POST">
							<div class="form-group">
								<input type="email" requigreen="true" name="user_email" id="user_email" required placeholder="Email address" value="" class="form-control">
								<span  id ="error_msg" style="color:red;"></span>
							</div>
							<button class="btn green block bottom15" type="button" onclick="email_check()">Send new password</button>
							<a href="<?php echo base_url(); ?>" class="btn green btn-outline pull-right ">Back</a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 login-copyright"><strong>Copyright</strong> BeeOnline Co. &copy; 2017-2017</div>
	</div>
</div>
</body>
			<!-- User Email validation -->
<script>
function email_check(){

	var user_email = document.getElementById("user_email").value;
	console.log(user_email);
	$.ajax({
		type:"POST",
		data:{user_email:user_email},
		url:'<?php echo base_url('Soc_ctrl/CheckUserEmail') ?>',
		processData:true,
		success:function(result){
			alert(result);
				if (result == false){
					$('#error_msg').html('<span style="color:red;">Email does not exist</span>');
				}else {
					$('#error_msg').html('<span style="color:blue;">Email Has Been Sent Succesfully!</span>');
				}
		},
		error:function(data){
			alert("ERROR OCCURED");
		}
	});
}


</script>
		<!--END User Email Validation -->
</html>
