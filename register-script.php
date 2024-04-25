<?php 
include("component/config.php");
if(isset($_REQUEST['submit']))
{
    $UName=$_POST['name'];
    $Email=$_POST['email'];
    $Username=$_POST['username'];
    $Phone=$_POST['phone'];
    $Confirm=$_POST['re-password'];
    $Password=$_POST['password'];
    
if ($Password != $Confirm) {
    echo '<script> alert("Password not matched") </script>'; 
}
else{
    $Query = "INSERT INTO registeration (id,name, email,username,phone,password,confirm_password) ".
        " VALUES('','$UName', '$Email', '$Username','$Phone', '$Password', '$Confirm')";
    $Result = mysqli_query($conn, $Query);
    header("Location: login.php");
    exit();}
}
?>