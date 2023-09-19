

<?php


  
   $connect = mysqli_connect("localhost", "root", "", "online-vs");


    $name = $_POST['name'];
    $mobile = $_POST['mob'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
    $add = $_POST['add'];
    $image = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $image2 = $_FILES['image2']['name'];
    $tmp_name2 = $_FILES['image2']['tmp_name'];
    $role = $_POST['role'];

    if($cpass!=$pass){
        echo '<script>
                alert("Passwords do not match!");
                window.location = "../index.php";
            </script>';
    }
    else{
        move_uploaded_file($tmp_name,"../uploads/$image");
        move_uploaded_file($tmp_name2,"../uploads/$image2");
        $insert = mysqli_query($connect, "insert into user (name, mobile, password, address, photo, photo2,status, votes, role) values('$name', '$mobile', '$pass', '$add', '$image', '$image2', 0, 0, '$role') ");
        if($insert){
            echo '<script>
                    alert("Registration successfull!");
                    window.location = "index.php";
                   
                </script>';
        }
    }
    
?>