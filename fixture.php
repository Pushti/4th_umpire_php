<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>4thUmpire - Cricket Team</title>
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
                <h1 class="page-title">Fixture</h1>

                <ol class="breadcrumb pull-right">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Fixture</li>
                </ol>
            </div>
        </header> 
      
      
      <div class="container">
      	<div class="row">
        <div class="col-md-9">
            <div class="bs-example">
              <table class="table">
                <thead>
                  <tr>
                    <th>Date</th>
                    <th>Opponent</th>
                    <th>Venue</th>
                    <th>Result</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="active">
                    <td>6/04/2013</td>
                    <td>KKR</td>
                    <td>Mumbai</td>
                    <td><a href="fixture_details.php">KKR won by 41</a></td>
                  </tr>
                  <tr>
                    <td>9/04/2014</td>
                    <td>RCB</td>
                    <td>Rajasthan</td>
                    <td><a href="#">RCB won by 7 wickets</a></td>
                  </tr>
                  <tr class="active">
                    <td>3/05/2013</td>
                    <td>Kings 11 Punjab</td>
                    <td>Punjab</td>
                    <td><a href="#">MI won by 5 wickets</a></td>
                  </tr>
                  <tr>
                    <td>03/05/2013</td>
                    <td>RCB</td>
                    <td>Baroda</td>
                    <td><a href="#">MI won by 19 wickets</a></td>
                  </tr>
                  <tr class="active">
                    <td>6/04/2013</td>
                    <td>KKR</td>
                    <td>Mumbai</td>
                    <td><a href="#">KKR won by 41</a></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          
          <div class="col-md-3">
          	<img src="images/ad1.jpg" />
            <div class="ad_block">
          	<img src="images/ad1.jpg" />
          </div>
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