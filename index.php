<?php

 //ob_start();
 //session_start();
require_once("config.php");
require_once("News.php");
 
 $newsObj = new News(); 
 
  // $resSess = $newsObj->getUserID($_SESSION['user']);
  // $use_row = mysqli_fetch_array($resSess); 
 
  
?>
<!DOCTYPE html>
<html>
<head>
  <title>Elite Digital Pro</title>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <link rel="stylesheet" href="assets/css/w3.css" />
  <link rel="icon" href="Logo/e.png" type="image/x-icon" />
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
<script>
     (function(){
        
         (function(){
            $("body").load('index.php',  function(responseTxt, statusTxt, xhr){
        if(statusTxt == "success")
            setTimeout(function(){
                location.reload();
            })
        if(statusTxt == "error")
            alert("Error: " + xhr.status + ": " + xhr.statusText))()         
     })
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
<div id="section1" class="container-fluid">
 <div class="container-fluid">  
<div class="row">
<div class="row w3-border-bottom" style="margin-top: 120px;">
<div class="w3-quarter"><header class="w3-padding w3-teal w3-text-white">Promoted Ads</header></div>
<div class="w3-twothird"></div></div>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <div class="w3-hide-large"><br /></div>
  <div class="carousel-inner" role="listbox">
 
 
   <div class="item active">    
  <div class="col-md-12 w3-padding-top w3-hide-small w3-hide-medium"> 
    <div class="w3-row w3-padding">
        <div class="w3-quarter w3-padding-right">
        <div  class="w3-card-2 crop">
        <div class="img" style="background-image:url('img/5.jpeg');"></div>
         <p style="padding-top: 15px !important;padding-left: 15px !important;font-size: 13pt;" class="truncate"> 2015 Toyota Corolla Quest 1.6 Plus</p>
        <span style="padding-top: 15px !important;padding-left: 15px !important;" class="w3-padding w3-large w3-text-teal">R60,000</span><br />
        <span  class="w3-padding w3-text-grey truncate"><span class="fa fa-map-marker"></span> Durban City</span>
        </div>
        </div> 
        <div class="w3-quarter w3-padding-right"><div  class="w3-image w3-card-2 crop  " >
        <div class="img" style="background-image:url('img/2.jpeg');"></div><br />
        
        <p style="padding-top: 15px !important;padding-left: 15px !important; font-size: 13pt;" class=" truncate"> 2015 Toyota Corolla Quest 1.6 Plus</p>
        <span style="padding-top: 15px !important;padding-left: 15px !important;" class="w3-padding w3-large w3-text-teal">R60,000</span><br />
        <span  class="w3-padding w3-text-grey truncate"><span class="fa fa-map-marker"></span> Durban City</span>
        </div></div>
        <div class="w3-quarter w3-padding-right"><div  class="w3-image w3-card-2 crop">
       <div class="img" style="background-image:url('img/3.jpeg');"></div>
        <p style="padding-top: 15px !important;padding-left: 15px !important;font-size: 13pt;" class=" truncate"> 2015 Toyota Corolla Quest 1.6 Plus</p>
        <span style="padding-top: 10px !important;" class="w3-padding w3-large w3-text-teal">R60,000</span><br />
        <span  class="w3-padding w3-text-grey truncate"><span class="fa fa-map-marker"></span> Durban City</span>
       </div></div>
        <div class="w3-quarter w3-padding-right"><div class="w3-image w3-card-2 crop">
        <div class="img" style="background-image:url('img/1.jpeg');"></div>
         <p style="padding-top: 15px !important;padding-left: 15px !important;font-size: 13pt;" class=" truncate"> 2015 Toyota Corolla Quest 1.6 Plus</p>
        <span style="padding-top: 10px !important;" class="w3-padding w3-large w3-text-teal">R60,000</span><br />
        <span  class="w3-padding w3-text-grey truncate"><span class="fa fa-map-marker"></span> Durban City</span>
        </div></div>  
    </div> 
     
  </div> 
  <!-- Mobile -->
    <div class="w3-hide-large"  > 
    <div class="w3-image" >
           <img src="image/capri_banner_2005.jpeg" width="100%" />
     </div>
  </div>
</div>
 
  <div class="item ">    
     <div class="col-md-12 w3-padding-top w3-hide-small w3-hide-medium"> 
    <div class="w3-row w3-padding">
        <div class="w3-quarter w3-padding-right">
        <div  class="w3-card-2 crop">
        <div class="img" style="background-image:url('img/5.jpeg');"></div>
         <p style="padding-top: 15px !important;padding-left: 15px !important;font-size: 13pt;" class="truncate"> 2015 Toyota Corolla Quest 1.6 Plus</p>
        <span style="padding-top: 15px !important;padding-left: 15px !important;" class="w3-padding w3-large w3-text-teal">R60,000</span><br />
        <span  class="w3-padding w3-text-grey truncate"><span class="fa fa-map-marker"></span> Durban City</span>
        </div>
        </div> 
        <div class="w3-quarter w3-padding-right"><div  class="w3-image w3-card-2 crop  " >
        <div class="img" style="background-image:url('img/2.jpeg');"></div><br />
        
        <p style="padding-top: 15px !important;padding-left: 15px !important; font-size: 13pt;" class=" truncate"> 2015 Toyota Corolla Quest 1.6 Plus</p>
        <span style="padding-top: 15px !important;padding-left: 15px !important;" class="w3-padding w3-large w3-text-teal">R60,000</span><br />
        <span  class="w3-padding w3-text-grey truncate"><span class="fa fa-map-marker"></span> Durban City</span>
        </div></div>
        <div class="w3-quarter w3-padding-right"><div  class="w3-image w3-card-2 crop">
       <div class="img" style="background-image:url('img/3.jpeg');"></div>
        <p style="padding-top: 15px !important;padding-left: 15px !important;font-size: 13pt;" class=" truncate"> 2015 Toyota Corolla Quest 1.6 Plus</p>
        <span style="padding-top: 10px !important;" class="w3-padding w3-large w3-text-teal">R60,000</span><br />
        <span  class="w3-padding w3-text-grey truncate"><span class="fa fa-map-marker"></span> Durban City</span>
       </div></div>
        <div class="w3-quarter w3-padding-right"><div class="w3-image w3-card-2 crop">
        <div class="img" style="background-image:url('img/1.jpeg');"></div>
         <p style="padding-top: 15px !important;padding-left: 15px !important;font-size: 13pt;" class=" truncate"> 2015 Toyota Corolla Quest 1.6 Plus</p>
        <span style="padding-top: 10px !important;" class="w3-padding w3-large w3-text-teal">R60,000</span><br />
        <span  class="w3-padding w3-text-grey truncate"><span class="fa fa-map-marker"></span> Durban City</span>
        </div></div>  
    </div> 
     
  </div>
     
     <!-- Mobile -->
     
    <div class="w3-hide-large" > 
    <div class="w3-image">
           <img src="image/capri_banner_2001.jpeg" width="100%" />
     </div>
  </div>
  </div>
     
     
  <div class="item">    
  <div class="col-md-12 w3-padding-top w3-hide-small w3-hide-medium"> 
    <div class="w3-row w3-padding">
        <div class="w3-quarter w3-padding-right">
        <div  class="w3-card-2 crop">
        <div class="img" style="background-image:url('img/5.jpeg');"></div>
         <p style="padding-top: 15px !important;padding-left: 15px !important;font-size: 13pt;" class="truncate"> 2015 Toyota Corolla Quest 1.6 Plus</p>
        <span style="padding-top: 15px !important;padding-left: 15px !important;" class="w3-padding w3-large w3-text-teal">R60,000</span><br />
        <span  class="w3-padding w3-text-grey truncate"><span class="fa fa-map-marker"></span> Durban City</span>
        </div>
        </div> 
        <div class="w3-quarter w3-padding-right"><div  class="w3-image w3-card-2 crop  " >
        <div class="img" style="background-image:url('img/2.jpeg');"></div><br />
        
        <p style="padding-top: 15px !important;padding-left: 15px !important; font-size: 13pt;" class=" truncate"> 2015 Toyota Corolla Quest 1.6 Plus</p>
        <span style="padding-top: 15px !important;padding-left: 15px !important;" class="w3-padding w3-large w3-text-teal">R60,000</span><br />
        <span  class="w3-padding w3-text-grey truncate"><span class="fa fa-map-marker"></span> Durban City</span>
        </div></div>
        <div class="w3-quarter w3-padding-right"><div  class="w3-image w3-card-2 crop">
       <div class="img" style="background-image:url('img/3.jpeg');"></div>
        <p style="padding-top: 15px !important;padding-left: 15px !important;font-size: 13pt;" class=" truncate"> 2015 Toyota Corolla Quest 1.6 Plus</p>
        <span style="padding-top: 10px !important;" class="w3-padding w3-large w3-text-teal">R60,000</span><br />
        <span  class="w3-padding w3-text-grey truncate"><span class="fa fa-map-marker"></span> Durban City</span>
       </div></div>
        <div class="w3-quarter w3-padding-right"><div class="w3-image w3-card-2 crop">
        <div class="img" style="background-image:url('img/1.jpeg');"></div>
         <p style="padding-top: 15px !important;padding-left: 15px !important;font-size: 13pt;" class=" truncate"> 2015 Toyota Corolla Quest 1.6 Plus</p>
        <span style="padding-top: 10px !important;" class="w3-padding w3-large w3-text-teal">R60,000</span><br />
        <span  class="w3-padding w3-text-grey truncate"><span class="fa fa-map-marker"></span> Durban City</span>
        </div></div>  
    </div> 
     
  </div>
  
    <!-- Mobile -->
    
    <div class="w3-hide-large"> 
    <div class="w3-image">
           <a href="/register.php"><img src="image/capri_banner_2002.jpeg" width="100%" /></a>
     </div>
  </div>
</div>

      <!-- Controls -->
      <a class="left carousel-control " href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" ></span>
        <span class="sr-only">Next</span>
      </a> 
     </div>
     </div>
  
  </div></div>
</div>

<!-- Popular in Autos -->

<div id="section2" class="container-fluid">
   <div class="container-fluid">  
<div class="row">
<div class="row w3-border-bottom" style="margin-top: 120px;">
<div class="w3-quarter"><header class="w3-padding w3-teal w3-text-white">Popular in Autos</header></div>
<div class="w3-twothird"></div></div>
<div id="myCarousel1" class="carousel slide" data-ride="carousel">
  <div class="w3-hide-large"><br /></div>
  <div class="carousel-inner" role="listbox">
 
 
   <div class="item active">    
  <div class="col-md-12 w3-padding-top w3-hide-small w3-hide-medium"> 
    <div class="w3-row w3-padding">
        <div class="w3-quarter w3-padding-right">
        <div  class="w3-card-2 crop">
        <div class="img" style="background-image:url('img/5.jpeg');"></div>
         <p style="padding-top: 15px !important;padding-left: 15px !important;font-size: 13pt;" class="truncate"> 2015 Toyota Corolla Quest 1.6 Plus</p>
        <span style="padding-top: 15px !important;padding-left: 15px !important;" class="w3-padding w3-large w3-text-teal">R60,000</span><br />
        <span  class="w3-padding w3-text-grey truncate"><span class="fa fa-map-marker"></span> Durban City</span>
        </div>
        </div> 
        <div class="w3-quarter w3-padding-right"><div  class="w3-image w3-card-2 crop  " >
        <div class="img" style="background-image:url('img/2.jpeg');"></div><br />
        
        <p style="padding-top: 15px !important;padding-left: 15px !important; font-size: 13pt;" class=" truncate"> 2015 Toyota Corolla Quest 1.6 Plus</p>
        <span style="padding-top: 15px !important;padding-left: 15px !important;" class="w3-padding w3-large w3-text-teal">R60,000</span><br />
        <span  class="w3-padding w3-text-grey truncate"><span class="fa fa-map-marker"></span> Durban City</span>
        </div></div>
        <div class="w3-quarter w3-padding-right"><div  class="w3-image w3-card-2 crop">
       <div class="img" style="background-image:url('img/3.jpeg');"></div>
        <p style="padding-top: 15px !important;padding-left: 15px !important;font-size: 13pt;" class=" truncate"> 2015 Toyota Corolla Quest 1.6 Plus</p>
        <span style="padding-top: 10px !important;" class="w3-padding w3-large w3-text-teal">R60,000</span><br />
        <span  class="w3-padding w3-text-grey truncate"><span class="fa fa-map-marker"></span> Durban City</span>
       </div></div>
        <div class="w3-quarter w3-padding-right"><div class="w3-image w3-card-2 crop">
        <div class="img" style="background-image:url('img/1.jpeg');"></div>
         <p style="padding-top: 15px !important;padding-left: 15px !important;font-size: 13pt;" class=" truncate"> 2015 Toyota Corolla Quest 1.6 Plus</p>
        <span style="padding-top: 10px !important;" class="w3-padding w3-large w3-text-teal">R60,000</span><br />
        <span  class="w3-padding w3-text-grey truncate"><span class="fa fa-map-marker"></span> Durban City</span>
        </div></div>  
    </div> 
     
  </div> 
  <!-- Mobile -->
    <div class="w3-hide-large"  > 
    <div class="w3-image" >
           <img src="image/capri_banner_2005.jpeg" width="100%" />
     </div>
  </div>
</div>
 
  <div class="item ">    
     <div class="col-md-12 w3-padding-top w3-hide-small w3-hide-medium"> 
    <div class="w3-row w3-padding">
        <div class="w3-quarter w3-padding-right">
        <div  class="w3-card-2 crop">
        <div class="img" style="background-image:url('img/5.jpeg');"></div>
         <p style="padding-top: 15px !important;padding-left: 15px !important;font-size: 13pt;" class="truncate"> 2015 Toyota Corolla Quest 1.6 Plus</p>
        <span style="padding-top: 15px !important;padding-left: 15px !important;" class="w3-padding w3-large w3-text-teal">R60,000</span><br />
        <span  class="w3-padding w3-text-grey truncate"><span class="fa fa-map-marker"></span> Durban City</span>
        </div>
        </div> 
        <div class="w3-quarter w3-padding-right"><div  class="w3-image w3-card-2 crop  " >
        <div class="img" style="background-image:url('img/2.jpeg');"></div><br />
        
        <p style="padding-top: 15px !important;padding-left: 15px !important; font-size: 13pt;" class=" truncate"> 2015 Toyota Corolla Quest 1.6 Plus</p>
        <span style="padding-top: 15px !important;padding-left: 15px !important;" class="w3-padding w3-large w3-text-teal">R60,000</span><br />
        <span  class="w3-padding w3-text-grey truncate"><span class="fa fa-map-marker"></span> Durban City</span>
        </div></div>
        <div class="w3-quarter w3-padding-right"><div  class="w3-image w3-card-2 crop">
       <div class="img" style="background-image:url('img/3.jpeg');"></div>
        <p style="padding-top: 15px !important;padding-left: 15px !important;font-size: 13pt;" class=" truncate"> 2015 Toyota Corolla Quest 1.6 Plus</p>
        <span style="padding-top: 10px !important;" class="w3-padding w3-large w3-text-teal">R60,000</span><br />
        <span  class="w3-padding w3-text-grey truncate"><span class="fa fa-map-marker"></span> Durban City</span>
       </div></div>
        <div class="w3-quarter w3-padding-right"><div class="w3-image w3-card-2 crop">
        <div class="img" style="background-image:url('img/1.jpeg');"></div>
         <p style="padding-top: 15px !important;padding-left: 15px !important;font-size: 13pt;" class=" truncate"> 2015 Toyota Corolla Quest 1.6 Plus</p>
        <span style="padding-top: 10px !important;" class="w3-padding w3-large w3-text-teal">R60,000</span><br />
        <span  class="w3-padding w3-text-grey truncate"><span class="fa fa-map-marker"></span> Durban City</span>
        </div></div>  
    </div> 
     
  </div>
     
     <!-- Mobile -->
     
    <div class="w3-hide-large" > 
    <div class="w3-image">
           <img src="image/capri_banner_2001.jpeg" width="100%" />
     </div>
  </div>
  </div>
     
     
  <div class="item">    
  <div class="col-md-12 w3-padding-top w3-hide-small w3-hide-medium"> 
    <div class="w3-row w3-padding">
        <div class="w3-quarter w3-padding-right">
        <div  class="w3-card-2 crop">
        <div class="img" style="background-image:url('img/5.jpeg');"></div>
         <p style="padding-top: 15px !important;padding-left: 15px !important;font-size: 13pt;" class="truncate"> 2015 Toyota Corolla Quest 1.6 Plus</p>
        <span style="padding-top: 15px !important;padding-left: 15px !important;" class="w3-padding w3-large w3-text-teal">R60,000</span><br />
        <span  class="w3-padding w3-text-grey truncate"><span class="fa fa-map-marker"></span> Durban City</span>
        </div>
        </div> 
        <div class="w3-quarter w3-padding-right"><div  class="w3-image w3-card-2 crop  " >
        <div class="img" style="background-image:url('img/2.jpeg');"></div><br />
        
        <p style="padding-top: 15px !important;padding-left: 15px !important; font-size: 13pt;" class=" truncate"> 2015 Toyota Corolla Quest 1.6 Plus</p>
        <span style="padding-top: 15px !important;padding-left: 15px !important;" class="w3-padding w3-large w3-text-teal">R60,000</span><br />
        <span  class="w3-padding w3-text-grey truncate"><span class="fa fa-map-marker"></span> Durban City</span>
        </div></div>
        <div class="w3-quarter w3-padding-right"><div  class="w3-image w3-card-2 crop">
       <div class="img" style="background-image:url('img/3.jpeg');"></div>
        <p style="padding-top: 15px !important;padding-left: 15px !important;font-size: 13pt;" class=" truncate"> 2015 Toyota Corolla Quest 1.6 Plus</p>
        <span style="padding-top: 10px !important;" class="w3-padding w3-large w3-text-teal">R60,000</span><br />
        <span  class="w3-padding w3-text-grey truncate"><span class="fa fa-map-marker"></span> Durban City</span>
       </div></div>
        <div class="w3-quarter w3-padding-right"><div class="w3-image w3-card-2 crop">
        <div class="img" style="background-image:url('img/1.jpeg');"></div>
         <p style="padding-top: 15px !important;padding-left: 15px !important;font-size: 13pt;" class=" truncate"> 2015 Toyota Corolla Quest 1.6 Plus</p>
        <span style="padding-top: 10px !important;" class="w3-padding w3-large w3-text-teal">R60,000</span><br />
        <span  class="w3-padding w3-text-grey truncate"><span class="fa fa-map-marker"></span> Durban City</span>
        </div></div>  
    </div> 
     
  </div>
  
    <!-- Mobile -->
    
    <div class="w3-hide-large"> 
    <div class="w3-image">
           <a href="/register.php"><img src="image/capri_banner_2002.jpeg" width="100%" /></a>
     </div>
  </div>
</div>

      <!-- Controls -->
      <a class="left carousel-control " href="#myCarousel1" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel1" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" ></span>
        <span class="sr-only">Next</span>
      </a> 
     </div>
     </div>
  
  </div></div>
</div>

<!-- Popular Ads -->

<div id="section2" class="container-fluid">
   <div class="container-fluid">  
<div class="row">
<div class="row w3-border-bottom" style="margin-top: 120px;">
<div class="w3-quarter"><header class="w3-padding w3-teal w3-text-white">Popular Ads</header></div>
<div class="w3-twothird"></div></div>
<div id="myCarousel2" class="carousel slide" data-ride="carousel">
  <div class="w3-hide-large"><br /></div>
  <div class="carousel-inner" role="listbox">
 
 
   <div class="item active">    
  <div class="col-md-12 w3-padding-top w3-hide-small w3-hide-medium"> 
    <div class="w3-row w3-padding">
        <div class="w3-quarter w3-padding-right">
        <div  class="w3-card-2 crop">
        <div class="img" style="background-image:url('img/5.jpeg');"></div>
         <p style="padding-top: 15px !important;padding-left: 15px !important;font-size: 13pt;" class="truncate"> 2015 Toyota Corolla Quest 1.6 Plus</p>
        <span style="padding-top: 15px !important;padding-left: 15px !important;" class="w3-padding w3-large w3-text-teal">R60,000</span><br />
        <span  class="w3-padding w3-text-grey truncate"><span class="fa fa-map-marker"></span> Durban City</span>
        </div>
        </div> 
        <div class="w3-quarter w3-padding-right"><div  class="w3-image w3-card-2 crop  " >
        <div class="img" style="background-image:url('img/2.jpeg');"></div><br />
        
        <p style="padding-top: 15px !important;padding-left: 15px !important; font-size: 13pt;" class=" truncate"> 2015 Toyota Corolla Quest 1.6 Plus</p>
        <span style="padding-top: 15px !important;padding-left: 15px !important;" class="w3-padding w3-large w3-text-teal">R60,000</span><br />
        <span  class="w3-padding w3-text-grey truncate"><span class="fa fa-map-marker"></span> Durban City</span>
        </div></div>
        <div class="w3-quarter w3-padding-right"><div  class="w3-image w3-card-2 crop">
       <div class="img" style="background-image:url('img/3.jpeg');"></div>
        <p style="padding-top: 15px !important;padding-left: 15px !important;font-size: 13pt;" class=" truncate"> 2015 Toyota Corolla Quest 1.6 Plus</p>
        <span style="padding-top: 10px !important;" class="w3-padding w3-large w3-text-teal">R60,000</span><br />
        <span  class="w3-padding w3-text-grey truncate"><span class="fa fa-map-marker"></span> Durban City</span>
       </div></div>
        <div class="w3-quarter w3-padding-right"><div class="w3-image w3-card-2 crop">
        <div class="img" style="background-image:url('img/1.jpeg');"></div>
         <p style="padding-top: 15px !important;padding-left: 15px !important;font-size: 13pt;" class=" truncate"> 2015 Toyota Corolla Quest 1.6 Plus</p>
        <span style="padding-top: 10px !important;" class="w3-padding w3-large w3-text-teal">R60,000</span><br />
        <span  class="w3-padding w3-text-grey truncate"><span class="fa fa-map-marker"></span> Durban City</span>
        </div></div>  
        
           <div class="w3-quarter w3-padding-right">
        <div  class="w3-card-2 crop">
        <div class="img" style="background-image:url('img/5.jpeg');"></div>
         <p style="padding-top: 15px !important;padding-left: 15px !important;font-size: 13pt;" class="truncate"> 2015 Toyota Corolla Quest 1.6 Plus</p>
        <span style="padding-top: 15px !important;padding-left: 15px !important;" class="w3-padding w3-large w3-text-teal">R60,000</span><br />
        <span  class="w3-padding w3-text-grey truncate"><span class="fa fa-map-marker"></span> Durban City</span>
        </div>
        </div> 
        <div class="w3-quarter w3-padding-right"><div  class="w3-image w3-card-2 crop  " >
        <div class="img" style="background-image:url('img/2.jpeg');"></div><br />
        
        <p style="padding-top: 15px !important;padding-left: 15px !important; font-size: 13pt;" class=" truncate"> 2015 Toyota Corolla Quest 1.6 Plus</p>
        <span style="padding-top: 15px !important;padding-left: 15px !important;" class="w3-padding w3-large w3-text-teal">R60,000</span><br />
        <span  class="w3-padding w3-text-grey truncate"><span class="fa fa-map-marker"></span> Durban City</span>
        </div></div>
        <div class="w3-quarter w3-padding-right"><div  class="w3-image w3-card-2 crop">
       <div class="img" style="background-image:url('img/3.jpeg');"></div>
        <p style="padding-top: 15px !important;padding-left: 15px !important;font-size: 13pt;" class=" truncate"> 2015 Toyota Corolla Quest 1.6 Plus</p>
        <span style="padding-top: 10px !important;" class="w3-padding w3-large w3-text-teal">R60,000</span><br />
        <span  class="w3-padding w3-text-grey truncate"><span class="fa fa-map-marker"></span> Durban City</span>
       </div></div>
        <div class="w3-quarter w3-padding-right"><div class="w3-image w3-card-2 crop">
        <div class="img" style="background-image:url('img/1.jpeg');"></div>
         <p style="padding-top: 15px !important;padding-left: 15px !important;font-size: 13pt;" class=" truncate"> 2015 Toyota Corolla Quest 1.6 Plus</p>
        <span style="padding-top: 10px !important;" class="w3-padding w3-large w3-text-teal">R60,000</span><br />
        <span  class="w3-padding w3-text-grey truncate"><span class="fa fa-map-marker"></span> Durban City</span>
        </div></div> 
        
        
           <div class="w3-quarter w3-padding-right">
        <div  class="w3-card-2 crop">
        <div class="img" style="background-image:url('img/5.jpeg');"></div>
         <p style="padding-top: 15px !important;padding-left: 15px !important;font-size: 13pt;" class="truncate"> 2015 Toyota Corolla Quest 1.6 Plus</p>
        <span style="padding-top: 15px !important;padding-left: 15px !important;" class="w3-padding w3-large w3-text-teal">R60,000</span><br />
        <span  class="w3-padding w3-text-grey truncate"><span class="fa fa-map-marker"></span> Durban City</span>
        </div>
        </div> 
        <div class="w3-quarter w3-padding-right"><div  class="w3-image w3-card-2 crop  " >
        <div class="img" style="background-image:url('img/2.jpeg');"></div><br />
        
        <p style="padding-top: 15px !important;padding-left: 15px !important; font-size: 13pt;" class=" truncate"> 2015 Toyota Corolla Quest 1.6 Plus</p>
        <span style="padding-top: 15px !important;padding-left: 15px !important;" class="w3-padding w3-large w3-text-teal">R60,000</span><br />
        <span  class="w3-padding w3-text-grey truncate"><span class="fa fa-map-marker"></span> Durban City</span>
        </div></div>
        <div class="w3-quarter w3-padding-right"><div  class="w3-image w3-card-2 crop">
       <div class="img" style="background-image:url('img/3.jpeg');"></div>
        <p style="padding-top: 15px !important;padding-left: 15px !important;font-size: 13pt;" class=" truncate"> 2015 Toyota Corolla Quest 1.6 Plus</p>
        <span style="padding-top: 10px !important;" class="w3-padding w3-large w3-text-teal">R60,000</span><br />
        <span  class="w3-padding w3-text-grey truncate"><span class="fa fa-map-marker"></span> Durban City</span>
       </div></div>
        <div class="w3-quarter w3-padding-right"><div class="w3-image w3-card-2 crop">
        <div class="img" style="background-image:url('img/1.jpeg');"></div>
         <p style="padding-top: 15px !important;padding-left: 15px !important;font-size: 13pt;" class=" truncate"> 2015 Toyota Corolla Quest 1.6 Plus</p>
        <span style="padding-top: 10px !important;" class="w3-padding w3-large w3-text-teal">R60,000</span><br />
        <span  class="w3-padding w3-text-grey truncate"><span class="fa fa-map-marker"></span> Durban City</span>
        </div></div> 
    </div> 
     
  </div> 
  <!-- Mobile -->
    <div class="w3-hide-large"  > 
    <div class="w3-image" >
           <img src="image/capri_banner_2005.jpeg" width="100%" />
     </div>
  </div>
</div>
 
  <div class="item ">    
     <div class="col-md-12 w3-padding-top w3-hide-small w3-hide-medium"> 
    <div class="w3-row w3-padding">
        <div class="w3-quarter w3-padding-right">
        <div  class="w3-card-2 crop">
        <div class="img" style="background-image:url('img/5.jpeg');"></div>
         <p style="padding-top: 15px !important;padding-left: 15px !important;font-size: 13pt;" class="truncate"> 2015 Toyota Corolla Quest 1.6 Plus</p>
        <span style="padding-top: 15px !important;padding-left: 15px !important;" class="w3-padding w3-large w3-text-teal">R60,000</span><br />
        <span  class="w3-padding w3-text-grey truncate"><span class="fa fa-map-marker"></span> Durban City</span>
        </div>
        </div> 
        <div class="w3-quarter w3-padding-right"><div  class="w3-image w3-card-2 crop  " >
        <div class="img" style="background-image:url('img/2.jpeg');"></div><br />
        
        <p style="padding-top: 15px !important;padding-left: 15px !important; font-size: 13pt;" class=" truncate"> 2015 Toyota Corolla Quest 1.6 Plus</p>
        <span style="padding-top: 15px !important;padding-left: 15px !important;" class="w3-padding w3-large w3-text-teal">R60,000</span><br />
        <span  class="w3-padding w3-text-grey truncate"><span class="fa fa-map-marker"></span> Durban City</span>
        </div></div>
        <div class="w3-quarter w3-padding-right"><div  class="w3-image w3-card-2 crop">
       <div class="img" style="background-image:url('img/3.jpeg');"></div>
        <p style="padding-top: 15px !important;padding-left: 15px !important;font-size: 13pt;" class=" truncate"> 2015 Toyota Corolla Quest 1.6 Plus</p>
        <span style="padding-top: 10px !important;" class="w3-padding w3-large w3-text-teal">R60,000</span><br />
        <span  class="w3-padding w3-text-grey truncate"><span class="fa fa-map-marker"></span> Durban City</span>
       </div></div>
        <div class="w3-quarter w3-padding-right"><div class="w3-image w3-card-2 crop">
        <div class="img" style="background-image:url('img/1.jpeg');"></div>
         <p style="padding-top: 15px !important;padding-left: 15px !important;font-size: 13pt;" class=" truncate"> 2015 Toyota Corolla Quest 1.6 Plus</p>
        <span style="padding-top: 10px !important;" class="w3-padding w3-large w3-text-teal">R60,000</span><br />
        <span  class="w3-padding w3-text-grey truncate"><span class="fa fa-map-marker"></span> Durban City</span>
        </div></div>  
        
           <div class="w3-quarter w3-padding-right">
        <div  class="w3-card-2 crop">
        <div class="img" style="background-image:url('img/5.jpeg');"></div>
         <p style="padding-top: 15px !important;padding-left: 15px !important;font-size: 13pt;" class="truncate"> 2015 Toyota Corolla Quest 1.6 Plus</p>
        <span style="padding-top: 15px !important;padding-left: 15px !important;" class="w3-padding w3-large w3-text-teal">R60,000</span><br />
        <span  class="w3-padding w3-text-grey truncate"><span class="fa fa-map-marker"></span> Durban City</span>
        </div>
        </div> 
        <div class="w3-quarter w3-padding-right"><div  class="w3-image w3-card-2 crop  " >
        <div class="img" style="background-image:url('img/2.jpeg');"></div><br />
        
        <p style="padding-top: 15px !important;padding-left: 15px !important; font-size: 13pt;" class=" truncate"> 2015 Toyota Corolla Quest 1.6 Plus</p>
        <span style="padding-top: 15px !important;padding-left: 15px !important;" class="w3-padding w3-large w3-text-teal">R60,000</span><br />
        <span  class="w3-padding w3-text-grey truncate"><span class="fa fa-map-marker"></span> Durban City</span>
        </div></div>
        <div class="w3-quarter w3-padding-right"><div  class="w3-image w3-card-2 crop">
       <div class="img" style="background-image:url('img/3.jpeg');"></div>
        <p style="padding-top: 15px !important;padding-left: 15px !important;font-size: 13pt;" class=" truncate"> 2015 Toyota Corolla Quest 1.6 Plus</p>
        <span style="padding-top: 10px !important;" class="w3-padding w3-large w3-text-teal">R60,000</span><br />
        <span  class="w3-padding w3-text-grey truncate"><span class="fa fa-map-marker"></span> Durban City</span>
       </div></div>
        <div class="w3-quarter w3-padding-right"><div class="w3-image w3-card-2 crop">
        <div class="img" style="background-image:url('img/1.jpeg');"></div>
         <p style="padding-top: 15px !important;padding-left: 15px !important;font-size: 13pt;" class=" truncate"> 2015 Toyota Corolla Quest 1.6 Plus</p>
        <span style="padding-top: 10px !important;" class="w3-padding w3-large w3-text-teal">R60,000</span><br />
        <span  class="w3-padding w3-text-grey truncate"><span class="fa fa-map-marker"></span> Durban City</span>
        </div></div>
        
        
           <div class="w3-quarter w3-padding-right">
        <div  class="w3-card-2 crop">
        <div class="img" style="background-image:url('img/5.jpeg');"></div>
         <p style="padding-top: 15px !important;padding-left: 15px !important;font-size: 13pt;" class="truncate"> 2015 Toyota Corolla Quest 1.6 Plus</p>
        <span style="padding-top: 15px !important;padding-left: 15px !important;" class="w3-padding w3-large w3-text-teal">R60,000</span><br />
        <span  class="w3-padding w3-text-grey truncate"><span class="fa fa-map-marker"></span> Durban City</span>
        </div>
        </div> 
        <div class="w3-quarter w3-padding-right"><div  class="w3-image w3-card-2 crop  " >
        <div class="img" style="background-image:url('img/2.jpeg');"></div><br />
        
        <p style="padding-top: 15px !important;padding-left: 15px !important; font-size: 13pt;" class=" truncate"> 2015 Toyota Corolla Quest 1.6 Plus</p>
        <span style="padding-top: 15px !important;padding-left: 15px !important;" class="w3-padding w3-large w3-text-teal">R60,000</span><br />
        <span  class="w3-padding w3-text-grey truncate"><span class="fa fa-map-marker"></span> Durban City</span>
        </div></div>
        <div class="w3-quarter w3-padding-right"><div  class="w3-image w3-card-2 crop">
       <div class="img" style="background-image:url('img/3.jpeg');"></div>
        <p style="padding-top: 15px !important;padding-left: 15px !important;font-size: 13pt;" class=" truncate"> 2015 Toyota Corolla Quest 1.6 Plus</p>
        <span style="padding-top: 10px !important;" class="w3-padding w3-large w3-text-teal">R60,000</span><br />
        <span  class="w3-padding w3-text-grey truncate"><span class="fa fa-map-marker"></span> Durban City</span>
       </div></div>
        <div class="w3-quarter w3-padding-right"><div class="w3-image w3-card-2 crop">
        <div class="img" style="background-image:url('img/1.jpeg');"></div>
         <p style="padding-top: 15px !important;padding-left: 15px !important;font-size: 13pt;" class=" truncate"> 2015 Toyota Corolla Quest 1.6 Plus</p>
        <span style="padding-top: 10px !important;" class="w3-padding w3-large w3-text-teal">R60,000</span><br />
        <span  class="w3-padding w3-text-grey truncate"><span class="fa fa-map-marker"></span> Durban City</span>
        </div></div>  
    </div> 
     
  </div>
     
     <!-- Mobile -->
     
    <div class="w3-hide-large" > 
    <div class="w3-image">
           <img src="image/capri_banner_2001.jpeg" width="100%" />
     </div>
  </div>
  </div>
     
     
  <div class="item">    
  <div class="col-md-12 w3-padding-top w3-hide-small w3-hide-medium"> 
    <div class="w3-row w3-padding">
        <div class="w3-quarter w3-padding-right">
        <div  class="w3-card-2 crop">
        <div class="img" style="background-image:url('img/5.jpeg');"></div>
         <p style="padding-top: 15px !important;padding-left: 15px !important;font-size: 13pt;" class="truncate"> 2015 Toyota Corolla Quest 1.6 Plus</p>
        <span style="padding-top: 15px !important;padding-left: 15px !important;" class="w3-padding w3-large w3-text-teal">R60,000</span><br />
        <span  class="w3-padding w3-text-grey truncate"><span class="fa fa-map-marker"></span> Durban City</span>
        </div>
        </div> 
        <div class="w3-quarter w3-padding-right"><div  class="w3-image w3-card-2 crop  " >
        <div class="img" style="background-image:url('img/2.jpeg');"></div><br />
        
        <p style="padding-top: 15px !important;padding-left: 15px !important; font-size: 13pt;" class=" truncate"> 2015 Toyota Corolla Quest 1.6 Plus</p>
        <span style="padding-top: 15px !important;padding-left: 15px !important;" class="w3-padding w3-large w3-text-teal">R60,000</span><br />
        <span  class="w3-padding w3-text-grey truncate"><span class="fa fa-map-marker"></span> Durban City</span>
        </div></div>
        <div class="w3-quarter w3-padding-right"><div  class="w3-image w3-card-2 crop">
       <div class="img" style="background-image:url('img/3.jpeg');"></div>
        <p style="padding-top: 15px !important;padding-left: 15px !important;font-size: 13pt;" class=" truncate"> 2015 Toyota Corolla Quest 1.6 Plus</p>
        <span style="padding-top: 10px !important;" class="w3-padding w3-large w3-text-teal">R60,000</span><br />
        <span  class="w3-padding w3-text-grey truncate"><span class="fa fa-map-marker"></span> Durban City</span>
       </div></div>
        <div class="w3-quarter w3-padding-right"><div class="w3-image w3-card-2 crop">
        <div class="img" style="background-image:url('img/1.jpeg');"></div>
         <p style="padding-top: 15px !important;padding-left: 15px !important;font-size: 13pt;" class=" truncate"> 2015 Toyota Corolla Quest 1.6 Plus</p>
        <span style="padding-top: 10px !important;" class="w3-padding w3-large w3-text-teal">R60,000</span><br />
        <span  class="w3-padding w3-text-grey truncate"><span class="fa fa-map-marker"></span> Durban City</span>
        </div></div>  
    </div> 
     
  </div>
  
    <!-- Mobile -->
    
    <div class="w3-hide-large"> 
    <div class="w3-image">
           <a href="/register.php"><img src="image/capri_banner_2002.jpeg" width="100%" /></a>
     </div>
  </div>
</div>

      <!-- Controls -->
      <a class="left carousel-control " href="#myCarousel2" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel2" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" ></span>
        <span class="sr-only">Next</span>
      </a> 
     </div>
     </div>
  
  </div></div>
</div>

<div id="section2" class="container-fluid">
   <div class="container-fluid">  
<div class="row">
<div class="row w3-border-bottom" style="margin-top: 120px;">
<div class="w3-quarter"><header class="w3-padding w3-teal w3-text-white">Latest Ads</header></div>
<div class="w3-twothird"></div></div>
<div id="myCarousel3" class="carousel slide" data-ride="carousel">
  <div class="w3-hide-large"><br /></div>
  <div class="carousel-inner" role="listbox">
 
 
   <div class="item active">    
  <div class="col-md-12 w3-padding-top w3-hide-small w3-hide-medium"> 
    <div class="w3-row w3-padding">
        <div class="w3-quarter w3-padding-right">
        <div  class="w3-card-2 crop">
        <div class="img" style="background-image:url('img/5.jpeg');"></div>
         <p style="padding-top: 15px !important;padding-left: 15px !important;font-size: 13pt;" class="truncate"> 2015 Toyota Corolla Quest 1.6 Plus</p>
        <span style="padding-top: 15px !important;padding-left: 15px !important;" class="w3-padding w3-large w3-text-teal">R60,000</span><br />
        <span  class="w3-padding w3-text-grey truncate"><span class="fa fa-map-marker"></span> Durban City</span>
        </div>
        </div> 
        <div class="w3-quarter w3-padding-right"><div  class="w3-image w3-card-2 crop  " >
        <div class="img" style="background-image:url('img/2.jpeg');"></div><br />
        
        <p style="padding-top: 15px !important;padding-left: 15px !important; font-size: 13pt;" class=" truncate"> 2015 Toyota Corolla Quest 1.6 Plus</p>
        <span style="padding-top: 15px !important;padding-left: 15px !important;" class="w3-padding w3-large w3-text-teal">R60,000</span><br />
        <span  class="w3-padding w3-text-grey truncate"><span class="fa fa-map-marker"></span> Durban City</span>
        </div></div>
        <div class="w3-quarter w3-padding-right"><div  class="w3-image w3-card-2 crop">
       <div class="img" style="background-image:url('img/3.jpeg');"></div>
        <p style="padding-top: 15px !important;padding-left: 15px !important;font-size: 13pt;" class=" truncate"> 2015 Toyota Corolla Quest 1.6 Plus</p>
        <span style="padding-top: 10px !important;" class="w3-padding w3-large w3-text-teal">R60,000</span><br />
        <span  class="w3-padding w3-text-grey truncate"><span class="fa fa-map-marker"></span> Durban City</span>
       </div></div>
        <div class="w3-quarter w3-padding-right"><div class="w3-image w3-card-2 crop">
        <div class="img" style="background-image:url('img/1.jpeg');"></div>
         <p style="padding-top: 15px !important;padding-left: 15px !important;font-size: 13pt;" class=" truncate"> 2015 Toyota Corolla Quest 1.6 Plus</p>
        <span style="padding-top: 10px !important;" class="w3-padding w3-large w3-text-teal">R60,000</span><br />
        <span  class="w3-padding w3-text-grey truncate"><span class="fa fa-map-marker"></span> Durban City</span>
        </div></div>  
    </div> 
     
  </div> 
  <!-- Mobile -->
    <div class="w3-hide-large"  > 
    <div class="w3-image" >
           <img src="image/capri_banner_2005.jpeg" width="100%" />
     </div>
  </div>
</div>
 
  <div class="item ">    
     <div class="col-md-12 w3-padding-top w3-hide-small w3-hide-medium"> 
    <div class="w3-row w3-padding">
        <div class="w3-quarter w3-padding-right">
        <div  class="w3-card-2 crop">
        <div class="img" style="background-image:url('img/5.jpeg');"></div>
         <p style="padding-top: 15px !important;padding-left: 15px !important;font-size: 13pt;" class="truncate"> 2015 Toyota Corolla Quest 1.6 Plus</p>
        <span style="padding-top: 15px !important;padding-left: 15px !important;" class="w3-padding w3-large w3-text-teal">R60,000</span><br />
        <span  class="w3-padding w3-text-grey truncate"><span class="fa fa-map-marker"></span> Durban City</span>
        </div>
        </div> 
        <div class="w3-quarter w3-padding-right"><div  class="w3-image w3-card-2 crop  " >
        <div class="img" style="background-image:url('img/2.jpeg');"></div><br />
        
        <p style="padding-top: 15px !important;padding-left: 15px !important; font-size: 13pt;" class=" truncate"> 2015 Toyota Corolla Quest 1.6 Plus</p>
        <span style="padding-top: 15px !important;padding-left: 15px !important;" class="w3-padding w3-large w3-text-teal">R60,000</span><br />
        <span  class="w3-padding w3-text-grey truncate"><span class="fa fa-map-marker"></span> Durban City</span>
        </div></div>
        <div class="w3-quarter w3-padding-right"><div  class="w3-image w3-card-2 crop">
       <div class="img" style="background-image:url('img/3.jpeg');"></div>
        <p style="padding-top: 15px !important;padding-left: 15px !important;font-size: 13pt;" class=" truncate"> 2015 Toyota Corolla Quest 1.6 Plus</p>
        <span style="padding-top: 10px !important;" class="w3-padding w3-large w3-text-teal">R60,000</span><br />
        <span  class="w3-padding w3-text-grey truncate"><span class="fa fa-map-marker"></span> Durban City</span>
       </div></div>
        <div class="w3-quarter w3-padding-right"><div class="w3-image w3-card-2 crop">
        <div class="img" style="background-image:url('img/1.jpeg');"></div>
         <p style="padding-top: 15px !important;padding-left: 15px !important;font-size: 13pt;" class=" truncate"> 2015 Toyota Corolla Quest 1.6 Plus</p>
        <span style="padding-top: 10px !important;" class="w3-padding w3-large w3-text-teal">R60,000</span><br />
        <span  class="w3-padding w3-text-grey truncate"><span class="fa fa-map-marker"></span> Durban City</span>
        </div></div>  
    </div> 
     
  </div>
     
     <!-- Mobile -->
     
    <div class="w3-hide-large" > 
    <div class="w3-image">
           <img src="image/capri_banner_2001.jpeg" width="100%" />
     </div>
  </div>
  </div>
     
     
  <div class="item">    
  <div class="col-md-12 w3-padding-top w3-hide-small w3-hide-medium"> 
    <div class="w3-row w3-padding">
        <div class="w3-quarter w3-padding-right">
        <div  class="w3-card-2 crop">
        <div class="img" style="background-image:url('img/5.jpeg');"></div>
         <p style="padding-top: 15px !important;padding-left: 15px !important;font-size: 13pt;" class="truncate"> 2015 Toyota Corolla Quest 1.6 Plus</p>
        <span style="padding-top: 15px !important;padding-left: 15px !important;" class="w3-padding w3-large w3-text-teal">R60,000</span><br />
        <span  class="w3-padding w3-text-grey truncate"><span class="fa fa-map-marker"></span> Durban City</span>
        </div>
        </div> 
        <div class="w3-quarter w3-padding-right"><div  class="w3-image w3-card-2 crop  " >
        <div class="img" style="background-image:url('img/2.jpeg');"></div><br />
        
        <p style="padding-top: 15px !important;padding-left: 15px !important; font-size: 13pt;" class=" truncate"> 2015 Toyota Corolla Quest 1.6 Plus</p>
        <span style="padding-top: 15px !important;padding-left: 15px !important;" class="w3-padding w3-large w3-text-teal">R60,000</span><br />
        <span  class="w3-padding w3-text-grey truncate"><span class="fa fa-map-marker"></span> Durban City</span>
        </div></div>
        <div class="w3-quarter w3-padding-right"><div  class="w3-image w3-card-2 crop">
       <div class="img" style="background-image:url('img/3.jpeg');"></div>
        <p style="padding-top: 15px !important;padding-left: 15px !important;font-size: 13pt;" class=" truncate"> 2015 Toyota Corolla Quest 1.6 Plus</p>
        <span style="padding-top: 10px !important;" class="w3-padding w3-large w3-text-teal">R60,000</span><br />
        <span  class="w3-padding w3-text-grey truncate"><span class="fa fa-map-marker"></span> Durban City</span>
       </div></div>
        <div class="w3-quarter w3-padding-right"><div class="w3-image w3-card-2 crop">
        <div class="img" style="background-image:url('img/1.jpeg');"></div>
         <p style="padding-top: 15px !important;padding-left: 15px !important;font-size: 13pt;" class=" truncate"> 2015 Toyota Corolla Quest 1.6 Plus</p>
        <span style="padding-top: 10px !important;" class="w3-padding w3-large w3-text-teal">R60,000</span><br />
        <span  class="w3-padding w3-text-grey truncate"><span class="fa fa-map-marker"></span> Durban City</span>
        </div></div>  
    </div> 
     
  </div>
  
    <!-- Mobile -->
    
    <div class="w3-hide-large"> 
    <div class="w3-image">
           <a href="/register.php"><img src="image/capri_banner_2002.jpeg" width="100%" /></a>
     </div>
  </div>
</div>

      <!-- Controls -->
      <a class="left carousel-control " href="#myCarousel3" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel3" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" ></span>
        <span class="sr-only">Next</span>
      </a> 
     </div>
     </div>
  
  </div></div>
</div>


<div id="section3" class="container w3-border-bottom w3-light-grey">
  <div class="w3-row-padding">
    <h3><span class="fa fa-bullhorn"></span> South Africa's free local classified site. </h3>
     <div class="col-md-6"> 
        <div class="w3-padding">
         <p>Browse through some of the most popular categories.
         </p>
        </div>
     </div>
     <div class="col-md-6"> 
        <div class="w3-padding">
        <p><a class="w3-btn w3-amber w3-round-large" href="register.php?new=<?php echo 'member'; ?>"><strong>Browse All >>></strong></a></p>
        </div>
     </div> 
      
  </div>
</div>
<!--  -->
<div id="section41" class="container w3-border-bottom">
  <h3 class="w3-black w3-padding w3-round-xlarge"><strong>Top Categories:</strong> </h3>
  <div class="w3-row-padding">
    
    <div class="w3-quarter">
        <ul class="w3-list">
            <li><a> Auto</a></li>
            <li><a>Services</a></li>
            <li><a>Jobs</a></li>
            <li><a>Sports &amp; Leisure</a></li>
        </ul> 
    </div>
    <div class="col-md-4">
          <ul class="w3-list">
            <li><a> Electronics</a></li>
            <li><a> Property</a></li>
            <li><a>Job Seekers</a></li>
            <li><a>Charity Donations</a></li>
        </ul> 
    </div>
     <div class="col-md-4"> 
        <ul class="w3-list">
            <li><a>Fashion</a></li>
            <li><a> Pets</a></li>
            <li><a> Events</a></li>
            <li><a>Baby &amp; Kids</a></li>
           
        </ul> 
     </div> 
     <div class="col-md-2"> &nbsp;</div>  
  </div>
</div></div>
<?php include_once('footer.htm'); ?>
  
</body>

</html>