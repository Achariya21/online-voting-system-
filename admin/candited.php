<?php
$connect = mysqli_connect("localhost", "root", "", "online-vs");

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>OVS</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="css/stylesheet.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="index.php">online Voting system </a>
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
                <div id="groupSection">
                    <?php
                     
                    $sql="select * from user where role ='2' ";
                                     
                    $result= $connect->query($sql);
                    $rowcount = mysqli_num_rows($result);

                    if(!($rowcount)){
                        echo "<br><center><h2><b><i>No Results</i></b></h2></center>";}
                        else
                         {  ?>
                         <?php
                            
                            //$result=$conn->query($sql);
                            while($row=$result->fetch_assoc())
                            {

                                $photo=$row['photo'];
                                $name=$row['name'];
                                $add=$row['address'];
                                $vot =$row['votes'];
                            ?>
                                <div style="border-bottom: 1px solid #bdc3c7; margin-bottom: 10px">
                                <img style="float: right; margin: 1px ; " src="uploads/<?php echo $photo ?>" height="100%" width="100p%">
                                <b>Candidat Name : </b><?php echo $name ?><br><br>
                                <b>Votes :</b> <?php echo $vot?><br><br>
                                <form method="POST" action="">
                                <input type="hidden" name="gvotes" value="<?php echo $groups[$i]['votes'] ?>">
                                <input type="hidden" name = "gid" value="<?php echo $groups[$i]['id'] ?>">
                                <?php

                                if($row['status']==1){
                                    ?>
                                    <button disabled style="padding: 5px; font-size: 15px; background-color: #27ae60; color: white; border-radius: 5px;" type="button">Voted</button>
                                    <?php
                                }
                                else{
                                    ?>
                                    <button style="padding: 5px; font-size: 15px; background-color: #3498db; color: white; border-radius: 5px;" type="submit">Vote</button>
                                    <?php
                                }
                                ?>
                                </form>
                                </div>
                            <?php
                        }
                    }
                    
                  
                    ?>
                </div>
        </div>
       
	
        <div style=" margin-top: 550px ; " class="name" >
		     <p>About-project &rarr; Web Technology sessional project - online voting system </br> Teacher : Lecturer, MD. Jahidul Hasan Jahid </br>
              <pre style=" width: 30%;" > group mamber -
                  Foyel Achariya     (CSE02107028) </pre>
            </b> <h3 >port city international university </h3> </p>
		   </div>  
      
      
    </body>

</html>
