<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header("location: ../");
    }
    $data = $_SESSION['data'];

    if($_SESSION['status']==1){
        $status = '<b style="color: green">Voted</b>';
    }
    else{
        $status = '<b style="color: red">Not Voted</b>';
    }
?>


<!DOCTYPE html>
<html lang="en"></html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Online Voting System </title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="index.php">Online Voting System </a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="index.php"><i class="menu-icon icon-home"></i>Home
                                </a></li>
                                 <li><a href="candited.php"><i class="menu-icon icon-inbox"></i>Candidat</a>
                                </li>
                                <li><a href="message.php"><i class="menu-icon icon-book"></i>complainc Box </a></li>
                                <li><a href="viewnotice.php"><i class="menu-icon icon-tasks"></i>Notice </a></li>
                                
                            </ul>
                            <ul class="widget widget-menu unstyled">
                                <li><a href="logout.php"><i class="menu-icon icon-signout"></i>Logout </a></li>
                            </ul>
                        </div>
                        
                    </div>
                    
                    <div class="span9">
                    	<center>
                           	<div class="card" style="width: 50%;"> 
                    			<img class="card-img-top" src="uploads/<?php echo $data['photo2']?>" height="400" width="500" alt="Card image cap">
                    			<div class="card-body">
                                 
                    				<i>
                    				<div id="mainSection">
                                    <div id="profileSection">
                
                                    <b>Name : </b><?php echo $data['name'] ?><br><br>
                                    <b>Mobile : </b><?php echo $data['mobile'] ?><br><br>
                                    <b>Address : </b><?php echo $data['address'] ?><br><br>
                                    <b>Status : </b><?php echo $status ?>
                                    </div>
                                </i>

                    			</div>
                    		</div>
                            <br>
                              
      					</center>              	
                    </div>
                    
                    
                </div>
            </div>
            </br></br></br>
       
	 
        <div style=" margin-top: 50px ; background-color:white; " class="name" >
		     <p>About-project &rarr; Web Technology sessional project - online voting system </br> Teacher : Lecturer, MD. Jahidul Hasan Jahid </br>
              <pre style=" width: 30%;" > group mamber -
                  Foyel Achariya     (CSE02107028) </pre>
            </b> <h3 >port city international university </h3> </p>
		 </div>
      
    </body>

</html> 