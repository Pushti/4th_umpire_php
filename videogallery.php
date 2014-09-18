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
                <h1 class="page-title">Gallery</h1>

                <ol class="breadcrumb pull-right">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Gallery</li>
                </ol>
            </div>
        </header> 
        
        <div class="container">
            <div class="row">
                <div class="col-md-3 hidden-sm hidden-xs">
                    <div class="portfolio-menu">
                        <h4><i class="fa fa-folder-open-o"></i> Mumbai Indians</h4>
                        <ul class="portfolio-cats">
                            <li><span class="filter" data-filter="all" class="active">All</span></li>
                            <li><span class="filter" data-filter=".category-1">2010</span></li>
                            <li><span class="filter" data-filter=".category-2">2011</span></li>
                            <li><span class="filter" data-filter=".category-3">2012</span></li>
                            <li><span class="filter" data-filter=".category-4">2013</span></li>
                            <li><span class="filter" data-filter=".category-5">2014</span></li>
                        </ul>
                    </div>
                </div> <!-- col-md-3 -->
                <div class="col-md-9">
                    <div class="row" id="Container">
                        <div class="mix category-1 col-md-4 col-sm-6 col-xs-12">
								<a data-toggle="modal" data-target="#video-gal" class="video-hover" id="thumbnail"> 
                                	<img src="images/gallery/small/newsimg1.jpg" alt="" class="img-responsive">
                                    <div class="play-video">
                                    </div>
                            	</a>
                            <div class="clearfix"></div>
                        </div>
                        
                        <div class="mix category-1 col-md-4 col-sm-6 col-xs-12">
								<a data-toggle="modal" data-target="#video-gal" class="video-hover" id="thumbnail"> 
                                	<img src="images/gallery/small/newsimg1.jpg" alt="" class="img-responsive">
                                    <div class="play-video">
                                    </div>
                            	</a>
                            <div class="clearfix"></div>
                        </div>
                        
                        <div class="mix category-2 col-md-4 col-sm-6 col-xs-12">
								<a data-toggle="modal" data-target="#video-gal" class="video-hover" id="thumbnail"> 
                                	<img src="images/gallery/small/newsimg3.jpg" alt="" class="img-responsive">
                                    <div class="play-video">
                                    </div>
                            	</a>
                            <div class="clearfix"></div>
                        </div>
                        
                        <div class="mix category-3 col-md-4 col-sm-6 col-xs-12">
								<a data-toggle="modal" data-target="#video-gal" class="video-hover" id="thumbnail"> 
                                	<img src="images/gallery/small/newsimg.jpg" alt="" class="img-responsive">
                                    <div class="play-video">
                                    </div>
                            	</a>
                                
                                <!-- Modal -->
                            <div class="clearfix"></div>
                        </div>
                        
                        <div class="mix category-4 col-md-4 col-sm-6 col-xs-12">
								<a data-toggle="modal" data-target="#video-gal" class="video-hover" id="thumbnail"> 
                                	<img src="images/gallery/small/newsimg5.jpg" alt="" class="img-responsive">
                                    <div class="play-video">
                                    </div>
                            	</a>
                            <div class="clearfix"></div>
                        </div>
                        
                        <div class="mix category-1 col-md-4 col-sm-6 col-xs-12">
								<a data-toggle="modal" data-target="#video-gal" class="video-hover" id="thumbnail"> 
                                	<img src="images/gallery/small/newsimg6.jpg" alt="" class="img-responsive">
                                    <div class="play-video">
                                    </div>
                            	</a>
                            <div class="clearfix"></div>
                        </div>
                        
                        <div class="mix category-5 col-md-4 col-sm-6 col-xs-12">
								<a data-toggle="modal" data-target="#video-gal" class="video-hover" id="thumbnail"> 
                                	<img src="images/gallery/small/newsimg8.jpg" alt="" class="img-responsive">
                                    <div class="play-video">
                                    </div>
                            	</a>
                            <div class="clearfix"></div>
                        </div>
                        
                    </div>
                </div> <!-- col-md-9 -->
            </div>
        </div>
        <div class="modal fade" id="video-gal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
              </div>
              <div class="modal-body">
                <div class="video">
                    <iframe src="http://player.vimeo.com/video/21081887?title=0&amp;byline=0&amp;portrait=0"></iframe>
                </div>
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
<script src="js/portfolio.js"></script>
</body>
</html>