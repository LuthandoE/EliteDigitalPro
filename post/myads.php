<?php

 ob_start();
 session_start();
require_once("..\config.php");
require_once("..\News.php");
 
 $newsObj = new News(); 
 
 if ( isset($_SESSION['user'])=="" ) {
		header("Location: ../login.php");
		exit;
	}
    
 $resSess = $newsObj->getUserID($_SESSION['user']);
 $use_row = mysqli_fetch_array($resSess); 
 
  
?>
<!DOCTYPE html>
<html>
<head>
  <title>Elite Digital Pro</title>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <link rel="stylesheet" href="..\assets/css/w3.css" />
  <link rel="icon" href="..\Logo/e.png" type="image/x-icon" />
  <link rel="shortcut icon" href="Logo/e.png" type="image/x-icon" />
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
  
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  
<script type="text/javascript">
    $(function () {
        var dateNow = new Date();
        $('#datetimepicker1').datetimepicker({
            defaultDate:dateNow
        });
    });
</script>


 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBCFEL75cUm9HVhJVDBA4yYejF-ujGurmA&libraries=places&callback=initAutocomplete"
        async defer></script>
   
  <style>

  
  #section1 {padding-top:50px;background-color: #ffffff;}
  #section3 {margin-top:100px;  background-color: #ffffff;}
  #section41 {padding-top:10px;background-color: #ffffff;}
  #section42 {padding-top:10px; background-color: #ffffff;}
  #section5 {padding-top:10px; background-color: #ffffff;}
  #section6 {padding-top:10px; background-color: #ffffff;}
  #section42 {padding-top:10px; background-color: #ffffff;}
  .l-container{height: 400px;}
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img { width: 100% ; background-color: black;}
  .carousel-control { width: 4%;}
  .carousel-control.left, .carousel-control.right{background-image: none;}
  
  a{ text-decoration: none !important;}
  .crop{ height: 300px; overflow: hidden; }
  .crop img{ height: auto;}
  .glyphicon-map-marker{color:#8B0000;}
  
  input[type="date"]:not(.has-value):before{
      color: lightgrey;
      content: attr(placeholder);
    }
    
    .img {
    float:  left;
    width:  280px;
    height: 198px;
    background-size: cover;
}
 .truncate {
  width: 250px;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar"  class="w3-light-grey" id="myPage">
<div class="container w3-white" >
   
<?php 

   // if( !isset($_SESSION['user']) ) {
	   include_once('Navbar.htm');
    //} else {
      //  include_once('Nav.htm');
    //}
    ?>
    <div class="w3-padding-top" style="margin-top: 120px;"><header class="w3-center w3-large w3-sand w3-padding">
    <span class="fa fa-tags"> </span> My Ads</header></div>
    <hr />
</div>

  
</body>

</html>