<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>4thUmpire - Login</title>
<?php
	include 'include/css.html';
?>
</head>

<body>
<div id="sb-site">
	<div class="boxed">
    	<header id="header-full-top" class="header-full hidden-xs">
          <div class="container">
            <div id="logo-middle" class="animated fadeInDown">
              <h1 class="animated fadeInRight"><a href="index.php">4<sup>th</sup> <span>Umpire</span></a></h1>
              <p class="animated fadeInRight">Third Umpire <i class="fa fa-long-arrow-right"></i> Fourth Umpire</p>
            </div>
          </div>
        </header>
    	<!-- header-full -->
    
    <div class="container">
            <div class="center-block logig-form margin-60">
                <div class="panel panel-primary">
                    <div class="panel-heading">Login Form</div>
                    <div class="panel-body">
                        <form role="form" action="index.php">
                            <div class="form-group">
                                <div class="input-group login-input">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" class="form-control" placeholder="Username">
                                </div>
                                <br>
                                <div class="input-group login-input">
                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                    <input type="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Remember me
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-ar btn-primary pull-right">Login</button>
                                
                                <a href="#" class="btn btn-ar btn-warning">Forgot Password</a>
                                
                                <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        
        
    </div>
</div>
</body>
</html>