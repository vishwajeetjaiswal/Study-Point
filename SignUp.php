<?php
    include('connect.php');
?>

<?php
    mysqli_select_db($conn,$db);
    if(isset($_POST['sign']))
    {
        $Name=$_POST['Name'];
        $Email=$_POST['Email'];
        $Password=$_POST['Password'];
        $Password2=$_POST['Password2'];
        if($Name=='' || $Email=='' || $Password=='' || $Password2=='')
        {
            echo "Incomplete Credential";

        }
        else if (strlen($Password) < 6)
        {
            echo '<script>alert("Password must be atleast 6 characters");</script>';
        }
        else
        {
            if($Password==$Password2)
            {
                $query="INSERT INTO user VALUES(NULL,'$Name','$Email','$Password','$Password2')";
                $exec_query=mysqli_query($conn,$query);
                $_SESSION['login_user']=$Name; // Initializing Session
                if($exec_query != false)
                {
                    echo '<script>alert("Registration Successfully for Login");</script>';
                    echo '<script>window.location.assign("login.php");</script>';
                }
                else
                {
                    echo "Error Occur";
                }
            }
            else
            {
                echo '<script>alert("Created password and confirm password are not same");</script>';
                echo '<script>window.location.assign("SignUp.php");</script>';
            }
        }

    }
?> 