
<?php 
   
   $connection = mysqli_connect('localhost', 'root', '') or die("Unable to connect");
   $db = mysqli_select_db($connection, 'wtproject') or die("Unable to connect the database");
   $email = $_POST['email'];
   $pwd = $_POST['password'];
   $sql = "SELECT Email, Password from wtlogin where Email='$email' and Password='$pwd'";
   $rs = mysqli_query($connection, $sql);
   if(mysqli_num_rows($rs)>0)
    {
        echo "<script>window.location='try.html';</script>";
    }
    else
    {
        echo "<script>alert('Incorrect Password');
            window.location='frontpage.html';</script>";
    }
   
?>