<?php 
include("component/config.php");
if(isset($_REQUEST['submit']))
{
    $Email=$_REQUEST['Txtemail'];
    $Password=$_REQUEST['Txtpassword'];
if ($db_name != null) {
    $Query = "SELECT * FROM registeration WHERE email='$Email' AND password='$Password'";
    $Result = mysqli_query($conn, $Query);
    if (mysqli_num_rows($Result) > 0) {
        $memory=mysqli_fetch_object($Result);
        $_SESSION['SESSION_ID']=$memory->id;
        header("Location: account-dashboard.php");
    exit();
    }
}
else{
    echo '<script> alert("Email or Password incorrect") </script>';
}}
?>