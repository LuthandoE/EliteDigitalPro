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
 
 $subcats = $newsObj->getSubCategories1(); 
 $subcats2 = $newsObj->getSubCategories2();
 $subcats3 = $newsObj->getSubCategories3();
 $subcats4 = $newsObj->getSubCategories4();
 
 //$cars = "";
  
?>
<!DOCTYPE html>
<html>
<head>
  <title>Elite Digital Pro</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="..\assets/css/w3.css" />
  <link rel="icon" href="..\Logo/e.png" type="image/x-icon" />
  <link rel="shortcut icon" href="Logo/e.png" type="image/x-icon" />
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
  
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  
   
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
.nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover {
    color: #fff !important;
    background-color: #009688 !important;
    

}
#carsDisplay {
    display: none ;
}

  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar"  class="w3-light-grey" id="myPage">
<div class="container w3-white w3-padding-bottom" >
   
<?php 

   // if( !isset($_SESSION['user']) ) {
	   include_once('Navbar.htm');
    //} else {
      //  include_once('Nav.htm');
    //}
    ?>
    <div class="w3-padding-top" style="margin-top: 120px;"><header class="w3-center w3-large w3-black w3-padding">
    <span class="fa fa-tags"> </span> Post An Ad</header></div>
    <hr />
<div style="margin-bottom: 120px;" class="container">
 <div class="w3-row"> <h4>CHOOSE A CATEGORY</h4>
  <ul class="nav nav-pills w3-large  w3-center">
     <li class="active w3-hide "><a data-toggle="pill" href="#home0">Home</a></li>
    <li class="w3-border w3-amber "><a data-toggle="pill" href="#home" class="w3-text-black"><span class="fa fa-car"></span> Automotive Vehicles</a></li>
    <li class="w3-border w3-amber"><a data-toggle="pill" href="#menu1" class="w3-text-black"><span class="fa fa-home"></span> Property</a></li>
    <li class="w3-border w3-amber"><a data-toggle="pill" href="#menu2" class="w3-text-black"><span class="fa fa-cog"></span> Services</a></li>
    <li class="w3-border w3-amber"><a data-toggle="pill" href="#menu3" class="w3-text-black"><span class="fa fa-unsorted"></span> All Other Categories</a></li>
  </ul>

  <div class="tab-content">
    
     <div id="home0" class="tab-pane fade in ">
     
    </div>
    <div id="home" class=" tab-pane fade in">
      <div class="w3-container w3-padding-top">
          <div class="w3-row w3-padding-top ">
          <header><h5>SELECT SUBCATEGORY</h5></header>
          <hr />
          <form name="ad" autocomplete="off" method="post" onsubmit="return validateForm()" enctype="multipart/form-data">
             <div class="w3-quarter">
             <div class="form-group">
                <label class="w3-label w3-text-black">Bank: <span class="w3-text-red">*</span></label>
            	<div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-list-alt"></span></span>
                
                <select id="cars" class="mycars" name="cars" class="form-control">
                <?php
                
                 while($row = mysqli_fetch_array($subcats)){ ?>
                   <option><?php echo $row['item'] ;
                   
                   ?></option>
                   
                   <?php } ?>
                </select>
                </div>
            </div>
            
            <div id="carsDisplay" class="">
               <div class="input-group"> 
                   <input type="text"  />
               </div>
            </div>
             </div>
             <div class="w3-twothird "></div>
            
          </div></form>
           <hr />
      </div>
    </div>
    <div id="menu1" class="tab-pane fade">
        <div class="w3-container w3-padding-top">
          <div class="w3-row w3-padding-top ">
          <header><h5>SELECT SUBCATEGORY</h5></header>
          <hr />
          <form name="ad" autocomplete="off" method="post" onsubmit="return validateForm()" enctype="multipart/form-data">
             <div class="w3-quarter">
             <div class="form-group">
                <label class="w3-label w3-text-black">Bank: <span class="w3-text-red">*</span></label>
            	<div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-list-alt"></span></span>
                
                <select name="subcat" class="form-control">
                <?php while($row = mysqli_fetch_array($subcats2)){ ?>
                   <option><?php echo $row['item'] ?></option>
                   <?php } ?>
                </select>
                </div>
            </div>
             </div>
             <div class="w3-twothird "></div>
            
          </div>
           <hr />
      </div>
    </div>
    <div id="menu2" class="tab-pane fade">
        <div class="w3-container w3-padding-top">
          <div class="w3-row w3-padding-top ">
          <header><h5>SELECT SUBCATEGORY</h5></header>
          <hr />
          <form name="ad" autocomplete="off" method="post" onsubmit="return validateForm()" enctype="multipart/form-data">
             <div class="w3-quarter">
             <div class="form-group">
                <label class="w3-label w3-text-black">Bank: <span class="w3-text-red">*</span></label>
            	<div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-list-alt"></span></span>
                
                <select name="subcat" class="form-control">
                <?php while($row = mysqli_fetch_array($subcats3)){ ?>
                   <option><?php echo $row['item'] ?></option>
                   <?php } ?>
                </select>
                </div>
            </div>
             </div>
             <div class="w3-twothird "></div>
            
          </div>
           <hr />
      </div>
    </div>
    <div id="menu3" class="tab-pane fade">
      <div class="w3-container w3-padding-top">
          <div class="w3-row w3-padding-top ">
          <header><h5>SELECT SUBCATEGORY</h5></header>
          <hr />
          <form name="ad" autocomplete="off" method="post" onsubmit="return validateForm()" enctype="multipart/form-data">
             <div class="w3-quarter">
             <div class="form-group">
                <label class="w3-label w3-text-black">Bank: <span class="w3-text-red">*</span></label>
            	<div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-list-alt"></span></span>
                
                <select name="subcat" class="form-control">
                <?php while($row = mysqli_fetch_array($subcats4)){ ?>
                   <option><?php echo $row['item'] ?></option>
                   
                   <?php } ?>
                </select>
                </div>
            </div>
             </div>
             <div class="w3-twothird "></div>
            
          </div>
           <hr />
    </div>
    </form> 
  </div></div>
</div>


</div>
<script>
     (function(){
        
        $(".mycars").change(function(){
            
            if(document.getElementById("cars").selectedIndex == 0){
                    
                    document.getElementById("carsDisplay").style.display='block';
                    
                    
                } else {
                    document.getElementById("carsDisplay").style.display='none';
                }
                }
       
     })();
    
  </script>
  
</body>

</html>