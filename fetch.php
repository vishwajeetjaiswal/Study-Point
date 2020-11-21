<?php
    include('connect.php');
    
?>

<?php
	
    $Email=$_POST['Email'];
    $Password=$_POST['Password'];

    $conn=mysqli_connect($dbhost,$username,$password);
    mysqli_select_db($conn,$db);
    
    $req=mysqli_query($conn,"select * from user where Email='$Email' and Password='$Password'") ;
    
    if(mysqli_num_rows($req))
    {
        while($dd=mysqli_fetch_array($req))
        {
        $Email=$dd["Email"];
        $Password=$dd["Password"];
        session_start();
        $_SESSION["Name"]=$Name;
        $_SESSION["Email"]=$Email;
        }
        header("location:Home.php");
    }
        else
        {
            echo '<script>alert("Wrong Email or Password"); </script>';
            echo '<script>window.location.assign("login.php")</script>';
        }
        
?> 