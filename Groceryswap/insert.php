<?php
include 'config.php';
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


function sendMail($email,$v_code)
{
    require ("PHPMailer/PHPMailer.php");
    require ("PHPMailer/SMTP.php");
    require ("PHPMailer/Exception.php");

    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'zeerukzy@gmail.com';                     //SMTP username
        $mail->Password   = 'krtczwdklbkkxoja';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('zeerukzy@gmail.com', 'GROCERYSWAP');
        $mail->addAddress($email);     //Add a recipient
       
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Email Verification from GROCERYSWAP';
        $mail->Body    = "Thanks for registration! 
        Click the link below to verify the email address.
        <a href='http://localhost/Groceryswap/verify.php?email=$email&v_code=$v_code'>Verify</a>";
        
    
        $mail->send();
        return true;
        } catch (Exception $e) {
        return false;
        }

}




$ruser_name = $_POST['ruser_name'];
$email = $_POST['email'];
$rpassword = $_POST['rpassword'];
$rcon_pass = $_POST['rcon_pass'];
$rphone = $_POST['rphone'];
$rimage = $_POST['rimage'];
$v_code = bin2hex(random_bytes(16));



$username_pattern = "/[A-Za-z .]{3,20}/";
$mobile_pattern = "/(\+88)?-?01[3-9]\d{8}/";
$pass_pattern = "/((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@%&*#£])).{6,20}/";
$email_pattern = "/(cse|eee|arch|admin)_/";

$duplicate_email = mysqli_query($conn, "SELECT * FROM `users` WHERE name='$email'");

if (mysqli_num_rows($duplicate_email) > 0) {
    echo "<script>alert('Email Already Registered')</script>";
    echo "<script>location.href='registration.php'</script>";
} else if (!preg_match($username_pattern, $ruser_name)) {
    echo "<script>alert('Invalid Username!')</script>";
    echo "<script>location.href='registration.php'</script>";
} else if (!preg_match($pass_pattern, $rpassword)) {
    echo "<script>alert('Password not Strong enough!')</script>";
    echo "<script>location.href='registration.php'</script>";
} else if ($rpassword !== $rcon_pass) {
    echo "<script>alert('Password not matched')</script>";
    echo "<script>location.href='registration.php'</script>";
} else if (!preg_match($email_pattern, $email)) {
    echo "<script>alert('LU email required!')</script>";
} else if (!preg_match($mobile_pattern, $rphone)) {
    echo "<script>alert('BD phone number only!')</script>";
    echo "<script>location.href='registration.php'</script>";
}
 else {
    $insert_query ="INSERT INTO `users`( `name`, `email`, `password`, `phone`, `image`, `verification_code`, `is_verified`) VALUES ('$ruser_name','$email','$rpassword', '$rphone','$rimage','$v_code','0')";
    if(mysqli_query($conn, $insert_query) && sendMail($email,$v_code)){
        echo "<script>alert('Inserted !')</script>";
        echo "<script>location.href='login.php'</script>";
       
        
    } else {
        echo "<script>alert('Not Inserted!')</script>";
    }
 }