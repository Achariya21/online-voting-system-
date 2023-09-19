<?php
$connect = mysqli_connect("localhost", "root", "", "online-vs");

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Onlin Voting System</title>
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
                    <!--/.span3-->

                    <div class="span9">
                        <form class="form-horizontal row-fluid" action="votar.php" method="post">
                                        <div class="control-group">
                                            <label class="control-label" for="Search"><b>Search:</b></label>
                                            <div class="controls">
                                                <input type="text" id="title" name="title" placeholder="Enter Name/NID NO" class="span8" required>
                                                <button type="submit" name="submit"class="btn">Search</button>
                                            </div>
                                        </div>
                                    </form>
                                    <br>
                                    <?php
                                    if(isset($_POST['submit']))
                                        {$s=$_POST['title'];
                                            $sql="select * from user where (mobile='$s' or name like '%$s%') and mobile<>'ADMIN'";
                                        }
                                    
                                     $sql="select * from user where role ='1' and mobile <>'ADMIN'";
                                     
                                    $result= $connect->query($sql);
                                    $rowcount = mysqli_num_rows($result);

                                    if(!($rowcount))
                                        echo "<br><center><h2><b><i>No Results</i></b></h2></center>";
                                    else
                                    {

                                    
                                    ?>
                        <table class="table" id = "tables">
                                  <thead>
                                    <tr>
                                      <th>NID NO</th>
                                      <th>Name.</th>
                                      <th>Address</th>                                      
                                      <th></th>
                                    </tr>
                                  </thead>
                                  <tbody>
                    <?php
                            
                            //$result=$conn->query($sql);
                            while($row=$result->fetch_assoc())
                            {

                                $email=$row['mobile'];
                                $name=$row['name'];
                                $rollno=$row['address'];
                            ?>
                                    <tr>
                                      <td><?php echo $email ?></td>
                                      <td><?php echo  $name ?></td>
                                      <td><?php echo $rollno ?></td>                                      
                                        <td>
                                        <center>
                                            <a href="voterdetails.php?id=<?php echo $email; ?>" class="btn btn-success">Details</a>
                                            <a href="edit_voterdetails.php?id=<?php echo $email; ?>" class="btn btn-success">Delete</a>
                                            
                                      </center>
                                        </td>
                                    </tr>
                            <?php }} ?>
                                  </tbody>
                                </table>
                            </div>
                    
                </div>
            </div>
            
        </div>
        <div style=" margin-top: 50px ; " class="name" >
		     <p>About-project &rarr; Web Technology sessional project - online voting system </br> Teacher : Lecturer, MD. Jahidul Hasan Jahid </br>
              <pre style=" width: 30%;" > group mamber -
                  Foyel Achariya     (CSE02107028) </pre>
            </b> <h3 >port city international university </h3> </p>
		   </div>

      
      </body>
</html>
