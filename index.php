<?php 
	include("login.php");
?>

<!DOCTYPE html>
<html lang="en">
 <head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initialscale=1">
 <title>My Secret Diary</title>

 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<!-- <link href="css/bootstrap.min.css" rel="stylesheet">

 <!-- HTML5 Shim and Respond.js IE8 support of HTML5
elements and media queries -->
 <!-- WARNING: Respond.js doesn't work if you view the
page via file:// -->
 <!--[if lt IE 9]>
 <script src="https://oss.maxcdn.com/libs/html5shiv/
3.7.0/html5shiv.js"></script>
 <script src="https://oss.maxcdn.com/libs/respond.js/
1.4.2/respond.min.js"></script>
 <![endif]-->
 <style>
	.navbar-brand{
		font-size:1.8em;
	}
	.navbar-nav{
	
		font-weight:bold;
	}
	#topContainer{
		background-image:url("http://www.magic4walls.com/wp-content/uploads/2013/11/notebook-diaries-pen-photo-wallpaper-1680x1050.jpg");
		width:100%;
		background-size:cover;
	}
	#topRow{
		margin-top:150px;
		text-align:center;
		padding-top:10px;
		padding-bottom:30px;
		border:1px solid grey;
		border-radius:5px;
		background: rgba(134, 115, 99,0.7);
	}
	
	#topRow h1{
		font-size:300%;
		color:white;
	}
	#topRow p{
		font-size:1.8em;
		color:white;
	}
	.bold{
		font-weight:bold;
	}
	#padding{
		margin-top:12px;
	}
	.center{
		text-align:center;
	}
	.title{
		margin-top:100px;
		font-size:3em;
	}
	.color{
		background:rgba(0,0,0,0.7);
		color:white;
		border:2px solid white;
		border-radius:10px;
	}
	.linkdecoration{
		text-decoration:underline;
		color:white;
	}
	.linkdecoration:hover{
		color:green;
		text-decoration:none;
	}
	.nodecoration{
		text-decoration:none;
		color:white;
	}
	.nodecoration:hover{	
		text-decoration:none;
		color:white;
	}
	.marginTop{
		margin-top:50px;
	}
	.marginBottom{
		margin-bottom:15px
	}
	#footer{
		background-color:#B0D1FB;
		width:100%;
	}
	#imageset{
		width:280px;
		height:80px;
	}
	#screenshot{
		height:300px;
		width:170px;
		margin:0 5px 0 5px;
	}
 </style>
 
</head>
<body data-spy="scroll" data-target=".navbar-collapse">

<div class="navbar navbar-default  navbar-fixed-top">

 <div class="container">

 <div class="navbar-header">


 
  <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
  

 <span class="icon-bar"></span>
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>


 </button>
 <a href="" class="navbar-brand">My Diary</a> 
 </div>
 
 <div class="collapse navbar-collapse">
 
 <form class="navbar-form navbar-right" method="post">
	<div class="form-group">
		<input type="email" name="loginemail" id="loginemail" value="<?php echo addslashes($_POST['loginemail']);?>" placeholder="E-mail" class="form-control"/>
	</div>
	<div class="form-group">
		<input type="password" name="loginpassword" value="<?php echo addslashes($_POST['loginpassword']);?>" placeholder="Password" class="form-control"/>
	</div>
	<input type="submit" name="submit" value="Login" class="btn btn-success"/>
 
 
 </form>
 
 </div>
</div>
 </div>
 <div class="container contentContainer" id="topContainer">
	<div class="row" id="mailing">
		<div class="col-md-6 col-md-offset-3" id="topRow">
			<h1>Your Secret Diary</h1>
			<p class="lead"> Have your secret diary with you where ever you go.</p>
			
			<?php
				if($error){
					echo '<div class="alert alert-danger">'.addslashes($error).'</div>';
					
				}
				if ($message) {
 			 	
 			 		echo '<div class="alert alert-success">'.addslashes($message).'</div>';
 			 	
 			 	}
			?>
			<p class="bold"> Interested? Sign Up!</p>
		<form  method="post">
		<div class="form-group">
		<input type="email" name="email" id="email" value="<?php echo addslashes($_POST['email']);?>" placeholder="Your E-mail" class="form-control"/>
	</div>
	<div class="form-group" id="padding">
		<input type="password" name="password" placeholder="Password" value="<?php echo addslashes($_POST['password']);?>" class="form-control"/>
	</div>
	
	<input type="submit" name="submit" value="Sign Up" class="btn btn-success" id="padding" />
		</form>
		
	</div>
	</div>
 
 </div>


 
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/
jquery.min.js"></script>
 <!-- Include all compiled plugins (below), or include individual files
as needed -->
<script src="bootstrap.min.js"></script>
 
<script>
	$(".contentContainer").css("min-height",$(window).height());
</script>
</body>
</html>