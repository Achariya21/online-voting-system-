<?php
$connect = mysqli_connect("localhost", "root", "", "online-vs");

?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LMS</title>
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
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="index.php">LMS </a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <ul class="nav pull-right">
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="images/user.png" class="nav-avatar" />
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="index.php">Your Profile</a></li>
                                    <!--li><a href="#">Edit Profile</a></li>
                                    <li><a href="#">Account Settings</a></li-->
                                    <li class="divider"></li>
                                    <li><a href="logout.php">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
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
                        <div class="module">
                            <div class="module-head">
                                <h3>Update Book Details</h3>
                            </div>
                            <div class="module-body">

                                <?php
                                    $vnid = $_GET['id'];
                                    $sql = "select * from user where mobile='$vnid'";
                                    $result=$connect->query($sql);
                                    $row=$result->fetch_assoc();
                                    $name=$row['name'];
                                    $vnid=$row['mobile'];
                                    $year=$row['address'];
                                    $photo=$row['photo'];
                                    $photo2=$row['photo2'];
                                    $role=$row['role'];
                                    $pass=$row['password'];



                                ?>

                                    <br >
                                    <form class="form-horizontal row-fluid" action="edit_voterdetails.php?id=<?php echo $vnid ?>" method="post">
                                        <div class="control-group">
                                            <b>
                                            <label class="control-label" for="Title"> Name:</label></b>
                                            <div class="controls">
                                                <input type="text" id="Title" name="Title" value= "<?php echo $name?>" class="span8" required>
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <b>
                                            <label class="control-label" for="Publisher">Voter NID:</label></b>
                                            <div class="controls">
                                                <input type="text" id="Publisher" name="Publisher" value= "<?php echo $vnid?>" class="span8" required>
                                            </div>
                                        </div>
                                        <label class="control-label" for="Publisher">Upload brend image::</label></b>
                                            <div class="controls">
                                            <input type="file" id="profile" name="image"value= "<?php echo $photo?>">
                                        </div><br>
                                        <label class="control-label" for="Publisher">Upload you image::</label></b>
                                            <div class="controls">
                                          <input type="file" id="profile" name="image2" value= "<?php echo $photo2?>"  >
                                        </div><br>

                                        <div class="control-group">
                                            <b>
                                            <label class="control-label" for="Year">Address:</label></b>
                                            <div class="controls">
                                                <input type="text" id="Year" name="Year" value= "<?php echo $year?>" class="span8" >
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <b>
                                            <label class="control-label" for="Availability">password:</label></b>
                                            <div class="controls">
                                                <input type="text" id="Availability" name="Availability" value= "<?php echo $pass?>" class="span8" >
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <b>
                                            <label class="control-label" for="Availability">Role:</label></b>
                                            <div class="controls">
                                                <input type="text" id="Availability" name="Availability" value= "<?php echo $role?>" class="span8" >
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <div class="controls">
                                                <button type="submit" name="submit"class="btn">Delete Details</button>
                                            </div>
                                        </div>

                                    </form> 
                                    </div>   
                                    </div>          
                    </div>
                    
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        </br></br></br>


</div>
        </div>
        
     

<?php
if(isset($_POST['submit']))
{
    $vnid = $_GET['id'];
    $name=$_POST['name'];
    $photo=$_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $photo2 = $_FILES['image2']['name'];
    $tmp_name2 = $_FILES['image2']['tmp_name'];
    $year=$_POST['address'];
    $role=$_POST['role'];
    $pass=$_POST['password'];

$sql1="DELETE FROM user WHERE mobile = '$vnid'";



if($connect->query($sql1) === TRUE){
    
echo "<script type='text/javascript'>alert('Success')</script>";
header( "Refresh:0.01; url=book.php", true, 303);
}
else
{//echo $conn->error;
echo "<script type='text/javascript'>alert('Error')</script>";
}
}
?>
      
</body>

</html>


