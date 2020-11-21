

<HTML>

    <head>
        
        <title>Sign Up</title>
        <link rel="stylesheet" type="text/css" href="style/Register.css">
        <link rel="icon" type="image/png" href="images/favicon.ico" />
    
    </head>
    
    <body>

        <body background="images/login1.jpg">
        <body background-color:"white">
            <h1>
                <font color="orange">Online Study Point</font>
            </h1>
            <form action='SignUp.php' method='POST'>
                <table border="0">
                    <tr>
                        <td>
                            <h2><center>Register</center></h2>
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                            <label for="Male"><font color="White">Male</font></label>
                            <input type="radio" value="Male"/>
                            <label for="Female"><font color="White">Female</font></label>
                            <input type="radio" value="Female"/>
                        </td>
                    </tr>

                    <tr align="center" >
                        <td>
                            <input type="text" name=Name placeholder="Name" id="name" required/><br>
                            <input type="email" name=Email placeholder="Email" id="email" required/><br>
                            <input type="password" name=Password placeholder="Create password" id="pass" required/><br>
                            <input type="password" name=Password2 placeholder="Confirm password" id="cnfpass"required/><br>
                            <input type="submit" name="sign" value="Create Account"/>   
                            <p><font color="white">Already have an account? <a href="login.php"><font color="white"/>Login here</a>.</p>
                        </td>
                    </tr>
                </table>
            </form>
        </body>
    
    </HTML>