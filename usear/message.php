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
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="index.php">online Voting System  </a>
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
                        <!--/.sidebar-->
                    </div>
                    <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <h3>Send a Complaint</h3>
                            </div>
                            <div class="module-body">

                                    <br >

                                    <form class="form-horizontal row-fluid" action="message.php" method="post">
                                        <div class="control-group">
                                            <label class="control-label" for="Rollno"><b>Receiver Roll No:</b></label>
                                            <div class="controls">
                                                <input type="text" id="RollNo" name="mobile" placeholder="NID-No" class="span8" required>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="Message"><b>Complaint :</b></label>
                                            <div class="controls">
                                                <input type="text" id="Message" name="Message" placeholder="Enter Complaint" class="span8" required>
                                            </div>
                                            <hr>
                                        <div class="control-group">
                                            <div class="controls">
                                                <button type="submit" name="submit"class="btn">Add Complaint</button>
                                            </div>
                                        </div>
                                    </form>
                            </div>
                        </div>  
                    
      
    </body>

</html>

<?php
if(isset($_POST['submit']))
{
    $rollno=$_POST['mobile'];
    $message=$_POST['Message'];

 $insert = mysqli_query($connect,"insert into combox (mobile,Msg,Date,Time) values ('$rollno','$message',curdate(),curtime())");

if($connect->query($insert) === TRUE){
echo "<script type='text/javascript'>alert('Success')</script>";
}
else
{//echo $conn->error;
echo "<script type='text/javascript'>alert(''Success')</script>";
}
    
}
?>
    </body>

</html>


