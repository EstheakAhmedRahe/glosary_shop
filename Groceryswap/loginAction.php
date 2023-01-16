<?php
include 'config.php';
    $name=$_POST['name'];
    $password=$_POST['pass'];

    $_result = mysqli_query($conn,"SELECT * FROM `users` WHERE  name='$name' And password='$password'");

    if(mysqli_num_rows($_result)){
        session_start();
        $_SESSION['user_name']=$name;
        echo"<script>location.href='home.php'</script>";
    }
    else{

        echo"<script>alert('Incorrect username or password!!')</script>";
        echo"<script>location.href='login.php'</script>";
    }
?>
 <!-- if($rowCount > 0){

if($row['user_type'] == 'admin'){

   $_SESSION['admin_id'] = $row['id'];
   header('location:admin_page.php');

}elseif($row['user_type'] == 'user'){

   $_SESSION['user_id'] = $row['id'];
   header('location:home.php');

}else{
   $message[] = 'no user found!';
}

}else{
$message[] = 'incorrect email or password!';
}

}  -->