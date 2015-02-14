<?php 
    
    require_once 'header.php';

?>
<html lang="">
<head>
<title>SSMS</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="Nikhil" content=""/>
<link rel="stylesheet" type="text/css" href="style.css" />
<link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
</head>
<body>

    <!--Fixed navigation bar-->
    <div class="navbar navbar-inverse navbar-static-top navbar-custom">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>

                </button>
                <a href="#" class="navbar-brand" >SSMS</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo ROOT_URL; ?>index.php">Home</a></li>
                    <li><a href="<?php echo ROOT_URL; ?>about.php">About us</a></li>
                    <li><a href="<?php echo ROOT_URL; ?>contact.php"><u>Contact</u></a></li>
                    <?php

                          if (! isset($_SESSION["username"])) { ?>

                            <li><a href='<?php echo ROOT_URL; ?>login.php'>Login</a></li>
                    <?php } else { ?>
                            <li><a href='<?php echo ROOT_URL; ?>dashboard.php'>Dashboard</a></li>
                            <li><a href='<?php echo CORE_URL; ?>handler.php?action=logout'>Logout</a></li>
                    <?php } ?>

                </ul>
            </div>
        </div>
    </div>
    <center>
        <div class="row"><div><h1>The Team 2014-15</h1></div>
        <hr/>
        </div>
        <div class="row">                  <div>
            <div class="col-md-12"> </div>
            <div class="col-md-12"> </div>
            <div class="col-md-12"> </div>
            <div class="col-md-12"> </div>
            <div class="col-md-12"> </div>
            <div class="col-md-12"> </div>
            <div class="col-md-12"> </div><div class="col-md-12"> </div><div class="col-md-12"> </div><div class="col-md-12"> </div><div class="col-md-12"> </div><div class="col-md-12"> </div><div class="col-md-12"> </div><div class="col-md-12"> </div><div class="col-md-12"> </div><div class="col-md-12"> </div><div class="col-md-12"> </div><div class="col-md-12"> </div><div class="col-md-12"> </div><div class="col-md-12"> </div><div class="col-md-12"> </div><div class="col-md-12"> </div><div class="col-md-12"> </div><div class="col-md-12"> </div><div class="col-md-12"> </div><div class="col-md-12"> </div><div class="col-md-12"> </div><div class="col-md-12"> </div><div class="col-md-12"> </div>
                          
            
            
            </div></div>
            <div class="row">
                <!-- <div class="col-md-1"></div> -->
                <div class="col-md-3">
                    <div class="box-6 top-5">
                            <img src="img/prez.jpg" width="77px" height="77px" alt="" class="img-indent img-border">
                            <p><a href="#" class="link">Rushyant Reddy </a><br> President | SSMS.<br>Contact:+91-8441000741</p>
                    </div>
                    <hr>
                    <div class="box-6 top-6">
                        <img src="img/sec.jpg" width="77px" height="77px" alt="" class="img-indent img-border">
                        <p><a href="#" class="link">?????? ???????</a><br>Mess Rep | SSMS. <br>Contact:+91-????</p>
                    </div>
                    <hr>
                    <div class="box-6 top-6">
                        <img src="img/tres.jpg" width="77px" height="77px" alt="" class="img-indent img-border">
                        <p><a href="#" class="link">Vishal</a><br>Treasurer | SSMS. <br>Contact:+91-7568452250</p>
                    </div>
                    <hr/>
                    <div class="box-6 top-5">
                            <img src="img/prez.jpg" width="77px" height="77px" alt="" class="img-indent img-border">
                            <p><a href="#" class="link">Rushyant Reddy </a><br> President | SSMS.<br>Contact:+91-8441000741</p>
                    </div>
                    <hr>
                    <div class="box-6 top-5">
                            <img src="img/prez.jpg" width="77px" height="77px" alt="" class="img-indent img-border">
                            <p><a href="#" class="link">Rushyant Reddy </a><br> President | SSMS.<br>Contact:+91-8441000741</p>
                    </div>        
                </div>
                <div class="col-md-3">
                    <div class="box-6 top-5">
                            <img src="img/prez.jpg" width="77px" height="77px" alt="" class="img-indent img-border">
                            <p><a href="#" class="link">????? ??????</a><br> Secretary | SSMS.<br>Contact:+91-8441000741</p>
                    </div>
                    <hr>
                    <div class="box-6 top-6">
                        <img src="img/sec.jpg" width="77px" height="77px" alt="" class="img-indent img-border">
                        <p><a href="#" class="link">????? ??????</a><br>Secretary | SSMS. <br>Contact:+91-????</p>
                    </div>
                    <hr>
                    <div class="box-6 top-6">
                        <img src="img/tres.jpg" width="77px" height="77px" alt="" class="img-indent img-border">
                        <p><a href="#" class="link">Vishal</a><br>Treasurer | SSMS. <br>Contact:+91-7568452250</p>
                    </div>
                    <hr/>
                    <div class="box-6 top-5">
                            <img src="img/prez.jpg" width="77px" height="77px" alt="" class="img-indent img-border">
                            <p><a href="#" class="link">Rushyant Reddy </a><br> President | SSMS.<br>Contact:+91-8441000741</p>
                    </div>
                    <hr>
                    <div class="box-6 top-5">
                            <img src="img/prez.jpg" width="77px" height="77px" alt="" class="img-indent img-border">
                            <p><a href="#" class="link">Rushyant Reddy </a><br> President | SSMS.<br>Contact:+91-8441000741</p>
                    </div>        
                </div>
                <div class="col-md-3">
                    <div class="box-6 top-5">
                            <img src="img/prez.jpg" width="77px" height="77px" alt="" class="img-indent img-border">
                            <p><a href="#" class="link">Vishal </a><br> Treasurer | SSMS.<br>Contact:+91-8441000741</p>
                    </div>
                    <hr>
                    <div class="box-6 top-6">
                        <img src="img/sec.jpg" width="77px" height="77px" alt="" class="img-indent img-border">
                        <p><a href="#" class="link">????? ??????</a><br>Secretary | SSMS. <br>Contact:+91-????</p>
                    </div>
                    <hr>
                    <div class="box-6 top-6">
                        <img src="img/tres.jpg" width="77px" height="77px" alt="" class="img-indent img-border">
                        <p><a href="#" class="link">Vishal</a><br>Treasurer | SSMS. <br>Contact:+91-7568452250</p>
                    </div>
                    <hr/>
                    <div class="box-6 top-5">
                            <img src="img/prez.jpg" width="77px" height="77px" alt="" class="img-indent img-border">
                            <p><a href="#" class="link">Rushyant Reddy </a><br> President | SSMS.<br>Contact:+91-8441000741</p>
                    </div>
                    <hr>
                    <div class="box-6 top-5">
                            <img src="img/prez.jpg" width="77px" height="77px" alt="" class="img-indent img-border">
                            <p><a href="#" class="link">Rushyant Reddy </a><br> President | SSMS.<br>Contact:+91-8441000741</p>
                    </div>        
                </div>
                <div class="col-md-3">
                    <h3>For Technical Problems,</h3>
                    <div class="box-6 top-5">
                            <img src="img/prez.jpg" width="77px" height="77px" alt="" class="img-indent img-border">
                            <p><a href="#" class="link">Deven Bansod</a><br> Technical Lead | SSMS.<br>Contact:+91-8441000741</p>
                    </div>
                    <hr>
                    <div class="box-6 top-6">
                        <img src="img/sec.jpg" width="77px" height="77px" alt="" class="img-indent img-border">
                        <p><a href="#" class="link">Nikhil Ramesh</a><br>Tech. Team Member | SSMS. <br>Contact:+91-????</p>
                    </div>
                    <hr>
                    <div class="box-6 top-6">
                        <img src="img/sec.jpg" width="77px" height="77px" alt="" class="img-indent img-border">
                        <p><a href="#" class="link">Karan Rajpal</a><br>Tech. Team Member | SSMS. <br>Contact:+91-????</p>
                    </div>
                    <hr>
                </div>
            </div>
        
                    
                
            </div>
        
        </hr>
        </hr></hr>
    </center>   
<?php 

require_once 'footer.php';

?>
    
<script src="js/jquery-2.1.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>