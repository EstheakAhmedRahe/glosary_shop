
<?php
$ServerName="localhost";
$username="root";
$password="";
$dbname="grocery";



$conn=mysqli_connect($ServerName,$username,$password,$dbname);
if(!$conn){
    die("Connection failed:".mysqli_connect_error());
}
// else{
// echo "<script>alert('DB Connected!')</script>";
// }
?>

<?php
$con = mysqli_connect("localhost","root","","grocery");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error() ." | Seems like you haven't created the DATABASE with an exact name";
  }
?>
