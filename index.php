<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name=viewport content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>4thUmpire - Cricket Team</title>
<meta name=description content="">

<?php
	include 'include/css.html';
?>
</head>

<!-- Preloader -->
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>

<body>
<div id="sb-site">
  <div class="boxed">
    <!---- Header Start ---->
   <?php 
   		include 'include/header.html';
   ?>
  <!---- Header Ends ---->
    
   <!---- Menu Start ---->
	<?php
		include 'include/menu.html';
	?>
   <!---- Menu Ends ---->  
   
    <!---- Banner Start ---->
   	 <?php 
	 	include 'include/banner.html';
	 ?>
   <!---- Banner Ends ---->  
    
     <!---- News Start ---->
   	<?php 
		include 'include/news.html';
	?>
   <!---- News Ends ---->
   
    <!---- Contant Start ---->
   	<?php 
		include 'include/contant.html';
	?>
   <!---- Contant Ends ---->
   
   <!---- Recent Videos Start ---->
   	<?php
		include 'include/videos.html';
	?>
   <!---- Recent Videos Ends ---->
    
    <!---- Fixture Match start ---->
   <?php 
   		include 'include/match-fixture.html';
   ?>
   <!---- Fixture Match Ends ---->
    
     <!---- Footer Start ---->
   		<?php
			include 'include/footer.html';
		?>
   <!---- Footer Ends ---->
  </div>
  <!-- boxed --> 
</div>
<!-- sb-site --> 



<div id="back-top"> <a href="#header"><i class="fa fa-chevron-up"></i></a> </div>
<!-- Scripts --> 
<script src="js/fourth_umpire.js"></script> 


<script src="js/index.js"></script> 
<script src="js/carousels.js"></script>
</body>
</html>
