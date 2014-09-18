<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>4thUmpire - Players</title>
<?php 
	include 'include/css.html';
?>
</head>

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
   
   <header class="main-header">
            <div class="container">
                <h1 class="page-title">Players</h1>

                <ol class="breadcrumb pull-right">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Players</li>
                </ol>
            </div>
        </header>
   
   
   <div class="container">
   <div class="row">
                <div class="col-md-12">
                    <section>
                        <div class="panel panel-default  animated fadeInDown animation-delay-8">
                            <div class="panel-body">
<!--                                <a href="players_details.php">
                                	<img src="images/players/player1.jpg" alt="" class="alignleft imageborder">
                                </a>
                                <a href="players_details.php"><img src="images/players/player2.jpg" alt="" class="alignleft imageborder"></a>
                                <a href="players_details.php"><img src="images/players/player3.jpg" alt="" class="alignleft imageborder"></a>
                                <a href="players_details.php"><img src="images/players/player4.jpg" alt="" class="alignleft imageborder"></a>
                                <a href="players_details.php"><img src="images/players/player5.jpg" alt="" class="alignleft imageborder"></a>
                                <a href="players_details.php"><img src="images/players/player6.jpg" alt="" class="alignleft imageborder"></a>-->
                               <ul class="player_list">
                               		<a href="players_details.php"><li class="imageborder">
                                    	<img src="images/players/player1.jpg" />
                                        <span><strong>M.S Dhoni</strong></span>
                                        <small>Wicket Keeper</small>
                                    </li></a>
                                    
                                    <a href="#"><li class="imageborder">
                                    	<img src="images/players/player2.jpg" />
                                        <span><strong>Suresh Raina</strong></span>
                                        <small>Batsman</small>
                                    </li></a>
                                    
                                    <a href="#"><li class="imageborder">
                                    	<img src="images/players/player3.jpg" />
                                        <span><strong>Dwayne Bravo</strong></span>
                                        <small>All Rounder</small>
                                    </li></a>
                                    
                                    <a href="#"><li class="imageborder">
                                    	<img src="images/players/player4.jpg" />
                                        <span><strong>Ravindra Jadeja</strong></span>
                                        <small>All Rounder</small>
                                    </li></a>
                                    
                                    <a href="#"><li class="imageborder">
                                    	<img src="images/players/player5.jpg" />
                                        <span><strong>Brendon McCullum</strong></span>
                                        <small>Wicket Keeper</small>
                                    </li></a>
                                    
                                    <a href="#"><li class="imageborder">
                                    	<img src="images/players/player6.jpg" />
                                        <span><strong>R. Ashwin</strong></span>
                                        <small>All Rounder</small>
                                    </li></a>
                                    
                                    <a href="#"><li class="imageborder">
                                    	<img src="images/players/player7.jpg" />
                                        <span><strong>Dwayne Smith</strong></span>
                                        <small>All Rounder</small>
                                    </li></a>
                                    
                                    <a href="#"><li class="imageborder">
                                    	<img src="images/players/player8.jpg" />
                                        <span><strong>Faf du Plessis</strong></span>
                                        <small>All Rounder</small>
                                    </li></a>
                                    
                                    <a href="#"><li class="imageborder">
                                    	<img src="images/players/player9.jpg" />
                                        <span><strong>David Hussey</strong></span>
                                        <small>All Rounder</small>
                                    </li></a>
                               </ul>
                            </div>
                        </div>
                    </section>
                </div>
                 
            </div>
   </div>
    <!---- Footer Start ---->
   		<?php
			include 'include/footer.html';
		?>
   <!---- Footer Ends ---->
    </div>
</div>
<script src="js/fourth_umpire.js"></script> 
</body>
</html>