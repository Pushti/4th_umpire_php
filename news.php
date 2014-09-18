<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>4thUmpire - About Us</title>
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
                <h1 class="page-title">News</h1>

                <ol class="breadcrumb pull-right">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">News</li>
                </ol>
            </div>
        </header>
           
        <section>
        <div class="container">
        	<div class="row">
                        <h2 class="section-title">Latest News</h2>
                        <div class="list-group news">
                            <div href="news_details.php" class="list-group-item">
                                <h3><a href="news_details.php">Harbhajan Singh 'hurt' at selection snub despite good showing in IPL</a></h3>
                                <p><img src="images/news/small/newsimg.jpg" />New Delhi, June 3: Selection snubs despite good performances have left him feeling hurt but veteran Indian off-spinner Harbhajan Singh says being ignored repeatedly has not dampened his spirits and he would continue to try for a comeback in the national team.<br /> Harbhajan finished this edition of IPL with 14 wickets from 14 games with an impressive economy rate of 6.47 (only third to Sunil Narine and Akshar Patel).</p>
                                <?php
                                	if(isset($_POST['admin']))
										{ ?>
											<div class="admin_access">
                                			<a href="#" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                			<a href="#" title="Delete"><i class="fa fa-trash-o"></i></a>
                               				</div>
										<?php }
									
                                ?>
                                
                            </div>
                            
                            <div class="list-group-item">
                                <h3><a href="#">We missed Lasith Malinga, says MI coach Wright</a></h3>
                                <p><img src="images/news/small/newsimg1.jpg" />Crashed out of the Indian Premier League after going down to Chennai Super Kings in the Eliminator, Mumbai Indians head coach John Wright admitted that the reigning champions were completely outplayed in all departments of the game.<br />
"We had a lot of confidence going into the match because in the last one year or so we have been tough opponents for CSK. To their credit, they probably outplayed us in all departments," Wright said at the post match press conference after Mumbai Indians lost by seven wickets to Chennai Super Kings at the Brabourne Stadium here last night.</p>
							</div>
                            
                            <div class="list-group-item">
                                <h3><a href="#">Experience in England will help me in World Cup: Shami</a></h3>
                                <p><img src="images/news/small/newsimg2.jpg" />Kolkata, Sep 11: Fresh from his spell in India's tour of England, pacer Mohammad Shami hopes to make it count from the experience he had gained in Old Blighty, in the 2015 World Cup to be co-hosted by Australia and New Zealand.<br />
 "It was an enriching experience and it was first time for me. Disappointed that we did not do well in the last three Tests but we always knew to bounce back in the ODIs. I'm sure the experience will come in handy in the World Cup in Australia," Shami told reporters after training with fellow Bengal players here.</p>
 							
                            </div>
                        </div> <!--list-group -->
                        </div>
                        </div>
                    </section> 
     <!---- Footer Start ---->
   		<?php
			include 'include/footer.html';
		?>
   <!---- Footer Ends ---->
  </div>
  <!-- boxed --> 
</div>   
    
	
	
<script src="js/fourth_umpire.js"></script> 

</body>
</html>
