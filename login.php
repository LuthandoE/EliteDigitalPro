<?php

    ob_start();
	session_start();
	require_once('config.php');
   // require_once('error_handler.php');
    require_once('News.php');
   
     $conn = new News();
	 //$dbcon = mysqli_select_db($conn ,DB_DATABASE);
    
        
//	 it will never let you open index(login) page if session is set
	if ( isset($_SESSION['user'])!="" ) {
		header("Location: post/myads.php");
		exit;
	}
	
	
	if( isset($_POST['btn-login']) ) {
		
		$username = $_POST['username']; 
		$upass = $_POST['pass'];
        
       // $username = strip_tags(trim($username));
	//	$upass = strip_tags(trim($upass));
         
		//$password = hash('sha256', $upass); // password hashing using SHA256
		
		$res = $conn->getUsername($username);
		
		
		$row = mysqli_fetch_array($res);
		
		//$acc_id = $conn->accID($row['userid']);
		//$donations = $conn->getDonationLogin($acc_id);
		
		//$anotherRow = mysqli_fetch_array($donations);
		
		$count = mysqli_num_rows($res); // if uname/pass correct it returns must be 1 row
	//	$count2 = mysqli_num_rows($donations);
	//	$password = hash('sha256', $upass);
	 $salt = "CrazyassLongSALTThatMakesYourUsersPasswordVeryLong123!!312567__asdSdas";
    $password = hash('sha256', $salt.$upass);
    
		if( $count == 1 && $row['pass']== $password) {
		   // if($count2 == 1 && $conn->dayCount($anotherRow['dep_date'],date("d-M-Y")) > 3 && is_null($anotherRow['proof_of_payment'])){
		        
		   //     echo "<script>alert('Your acount has been disabled for violating our terms and conditions. Please contact our support team for help.');</script>";
		        
	//	    }else{
		        $_SESSION['user'] = $row['userid'];
			    header("Location: post/myads.php");
		 //   }
		
		} else {
			$errMSG = "Wrong Credentials, Try again...";
		}
	   }
     
    
?>
<!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login </title>
  
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <link rel="stylesheet" href="assets/css/w3.css" />
  <link rel="icon" href="image/caprLogo.png" type="image/x-icon" />
  <link rel="shortcut icon" href="image/caprLogo.png" type="image/x-icon" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
 <!-- <script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="https://v2.zopim.com/?694MoBi1xoIoYqKxkokLqymk0dAz6mc0";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script> -->
<!--End of Zendesk Chat Script-->
  <style>
  
  #section1 {padding-top:50px;height:400px ;}
  #section2 {padding-top:10px; background-color: #ffffff;}
  #section3 {padding-top:10px;  background-color: #ffffff;}
  #section41 {padding-top:10px;background-color: #ffffff;}
  #section42 {padding-top:10px; background-color: #ffffff;}
  #section5 {padding-top:10px; background-color: #ffffff;}
  #section6 {padding-top:10px; background-color: #ffffff;}
  #section42 {padding-top:10px; background-color: #ffffff;}
  .l-container{height: 360px;}
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img { width: 100% ; height: 40% ; background-color: black;}
  .carousel-control { width: 4%;}
  .carousel-control.left, .carousel-control.right{background-image: none;}
  a{ text-decoration: none !important;}
  .crop{ height: 250px; overflow: hidden; }
  .crop img{ height: auto;}
  .glyphicon-map-marker{color:#8B0000;}
  </style>
</head>
<body class="w3-light-grey" style="background-image: url(image/bk.jpg);">
<?php include_once("Navbar.htm") ?>
<div class="container w3-white w3-card-2 w3-padding-64">
	<div  class="w3-light-grey  w3-content  w3-white">
    <form method="post" class="w3-padding-64  w3-white " autocomplete="off">
       <div class="col-md-3"></div>
    	<div style="background-image: url(image/bk6.jpg);" 
        class="col-md-6  w3-margin-top w3-teal ">
	        <div  class="form-group w3-round-large w3-padding" >
            	<h2 class="w3-center"><img class="w3-circle" src="img/lg2.png" width="20%" /></h2>
            </div>
        
        	<div class="form-group">
            	<hr />
            </div>
            
            <?php
			if ( isset($errMSG) ) {
				
				?>
				<div class="form-group">
            	<div class="alert alert-danger">
				<span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
                </div>
            	</div>
                <?php
			}
			?>
			 <?php
			if ( isset($_GET['id']) ) {
				
				?>
				<div class="form-group">
                     <header class="w3-amber w3-padding-small w3-roud">
                         <h4 class="w3-text-black w3-center">Your password has been changed!</h4>
                     </header>
            	</div>
                <?php
			}
			?>
            
            <div class="form-group">
            	<div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
            	<input type="text" name="username" class="form-control" placeholder="Enter Your Email" required />
                </div>
            </div>
            
            <div class="form-group">
            	<div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
            	<input type="password" name="pass" class="form-control" placeholder="Your Password" required />
                </div>
             
            </div>
            
            <div class="form-group w3-text-white w3-border-bottom w3-border-amber w3-black w3-padding w3-round-large">
                Forgot your password ?<a class="w3-text-amber" href="pass_recovery.php"> Click here....</a>
            	<br />
                
            </div>
            
            <div class="form-group w3-center">
            	<button type="submit" class="btn btn-block btn-primary w3-amber w3-border-amber" name="btn-login"><strong>Sign In</strong></button>
            </div>
            
            <div class="form-group">
                <p class="w3-text-white w3-center">New user...? Sign up 
                <a class="w3-text-amber" href="register.php? i= <?php echo mt_rand(); ?>">here...</a></p>
	            <hr />
            </div>
        </div>
        
    </form>
    </div>	

</div>

</body>
</html>