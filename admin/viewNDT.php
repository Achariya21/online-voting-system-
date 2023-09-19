<?php
$connect = mysqli_connect("localhost", "root", "", "online-vs");

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ovs</title>
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
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="index.php">online voting System </a>
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
                                <li><a href="candidat.php"><i class="menu-icon icon-book"></i>Candidat </a></li>
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
                        <!--/.sidebar-->
                    </div>
                    <div class="span9">
                        <table class="table" id = "tables">
                                  <thead>
                                    <tr>
                                    
                                      <th>Name</th>
                                      <th>Date&Time</th>
                                      <th>    </th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                    
                            $sql="select * from timedate  ";
                            $result=$connect->query($sql);
                            while($row=$result->fetch_assoc())
                            {
                                $msg=$row['name'];
                                $date=$row['eventdt'];
                                 
                            
                           
                            ?>
                                    <tr>
                                      <td><?php echo $msg ?></td>
                                      <td><?php echo $date ?></td>
                                      
                                      <td>
                                        <center>
                                           
                                            <a href="tad.php?id=<?php echo $msg; ?>" class="btn btn-success">Delete</a>
                                            
                                      </center>
                                        </td>
                                    </tr>
                               <?php } ?>
                               </tbody>
                                </table>
                            </div>
                    <!--/.span3-->
                    
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
	
        
      
        <div style=" margin-top: 50px ; " class="name" >
		     <p>About-project &rarr; Web Technology sessional project - online voting system </br> Teacher : Lecturer, MD. Jahidul Hasan Jahid </br>
              <pre style=" width: 30%;" > group mamber -
                  Foyel Achariya     (CSE02107028) </pre>
            </b> <h3 >port city international university </h3> </p>
		   </div> 
    </body>

</html>

