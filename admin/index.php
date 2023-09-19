<?php
$connect = mysqli_connect("localhost", "root", "", "online-vs");

?>



<!DOCTYPE html>
<html lang="en"></html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Onlin Voting System </title>
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
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="index.php">Onlin Voting System </a>
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
                                 <li><a href="votar.php"><i class="menu-icon icon-inbox"></i>Votar</a>
                                </li>
                                <li><a href=""><i class="menu-icon icon-book"></i>Candidat </a></li>
                                <li><a href="novot.php"><i class="menu-icon icon-tasks"></i>NO voted </a></li>
                                <li><a href="candited.php"><i class="menu-icon icon-tasks"></i>Voting updet </a></li>
                                <li><a href="combox.php"><i class="menu-icon icon-list"></i>Complaint Box </a></li>
                                <li><a href="notice.php"><i class="menu-icon icon-list"></i>Notice </a></li>
                                <li><a href="timedate.php"><i class="menu-icon icon-list"></i>voting time </a></li>
                            </ul>
                            <ul class="widget widget-menu unstyled">
                                <li><a href="logout.php"><i class="menu-icon icon-signout"></i>Logout </a></li>
                            </ul>
                        </div>
                        
                    </div>
                            <?php
                                    
                                    
                                     $sql="select * from user where role ='3' ";
                                     
                                    $result= $connect->query($sql);
                                    $rowcount = mysqli_num_rows($result);
                              ?>
                            <?php
                            
                            //$result=$conn->query($sql);
                              while($row=$result->fetch_assoc())
                            {

                                $email=$row['mobile'];
                                $name=$row['name'];
                                $rollno=$row['address'];
                                $status = $row['status'];
                                $data=$row['photo2'];
                            ?>
                    <div class="span9">
                    	<center>
                           	<div class="card" style="width: 50%;"> 
                    			<img class="card-img-top" src="uploads/<?php echo $data?>" height="400" width="500" alt="Card image cap">
                    			<div class="card-body">
                                 
                    				<i>
                    				<div id="mainSection">
                                    <div id="profileSection">
                
                                    <b>Name : </b><?php echo $name ?><br><br>
                                    <b>NID NO : </b><?php echo $email ?><br><br>
                                    <b>Address : </b><?php echo $rollno  ?><br><br>
                                    <b>Status : </b><?php echo $status ?>
                                    </div>
                                </i>
                            
                    			</div>
                    		</div>
                            <br>
                            
      					</center>           	
                    </div>
                    <?php } ?>
                </div>
            </div>
            
        <div style=" margin-top: 50px ; " class="name" >
		     <p>About-project &rarr; Web Technology sessional project - online voting system </br> Teacher : Lecturer, MD. Jahidul Hasan Jahid </br>
              <pre style=" width: 30%;" > group mamber -
                  Foyel Achariya     (CSE02107028) </pre>
            </b> <h3 >port city international university </h3> </p>
		 </div>

            </br> </br> </br>
    </body>
</html> 