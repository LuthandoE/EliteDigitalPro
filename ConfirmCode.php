<?php
	require_once('config.php');
   // require_once('error_handler.php');
    require_once('News.php');
   
     $conn = new News();
	 //$dbcon = mysqli_select_db($conn ,DB_DATABASE);
    
        
//	 it will never let you open index(login) page if session is set
	if( isset($_POST['btn-send']) ) {
		
		$pass = $_POST['pass']; 
		$passConf = $conn->PCode($_GET['id']);
		$username = $_GET['id'];
        if($pass == $passConf){
            
          header("Location: ConfirmPass.php?id=$username");
        
        }else {
            $errMSG = "Your confirmation code is incorrect!";
        }
	   }
     
    
?>
<!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Enter Confirmation Code </title>
  
    
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <link rel="stylesheet" href="assets/css/w3.css" />
  <link rel="icon" href="image/caprLogo.png" type="image/x-icon" />
  <link rel="shortcut icon" href="image/caprLogo.png" type="image/x-icon" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
<div class="container w3-white w3-card-2">
    <br /><br /><br />
	<div  class="w3-light-grey w3-padding-64 w3-content"><br />
    <form method="post" autocomplete="off"><br />
       <div class="col-md-3"></div>
    	<div style="background-image: url(image/bk6.jpg);" 
        class="col-md-6 w3-card-12 w3-margin-top w3-white w3-round-large">
	        <div  class="form-group w3-center w3-round-large w3-padding" >
            	<h2 class="w3-center w3-text-white"><span class="fa fa-lock"></span> Confirmation Code</h2>
                <span class="w3-center w3-text-white">Please enter your confirmation code that we have sent it to your email.</span>
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
            
            <div class="form-group">
            	<div class="input-group">
                <span class="input-group-addon"><span class="fa fa-lock"></span></span>
            	<input type="text" name="pass" class="form-control" placeholder="Enter Your Confirmation Code" required />
                </div>
            </div>
          <!--   <div class="form-group">
            	<div class="input-group">
                <span class="input-group-addon"><span class="fa fa-lock"></span></span>
            	<input type="text" name="passCo" class="form-control" placeholder="Confrim Your Password" required />
                </div>
            </div>
            -->
            <div class="form-group">
            	<button type="submit" class="btn btn-block btn-primary" name="btn-send">Submit</button>
            </div>
            
        </div>
        
    </form>
    </div>	

</div>

</body>
</html>