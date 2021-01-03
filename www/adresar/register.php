<html>
    <head>
        <title>Adresar Register your account</title>
        <style type="text/css">
            .login-wrapper{
                width:400px;
                height:250px;
                border:1px solid #c1c1c1;
                margin-top:50px;
            }
            .login-center{
                margin-left:auto;
                margin-right:auto;
            }
            input{
                width:100%;
                padding:15px;
                margin:10px 0 0 0;
            }
            .center{text-align:center;}
        </style>
            
    </head>
    <body>
        <div class="login-wrapper login-center center">
            <form action="register_action.php" method="POST">
                <h3>Register your account</h3>
                <input type="text" name="username" value="" placeholder="Username" autofocus/>
                <br>
                <input type="password" name="password" value="" placeholder="Password" />
                <br>
                <input type="password" name="password2" value="" placeholder="Re-enter Password" />
                <br>
                <input type="text" name="firstName" value="" placeholder="First Name" />
                <br>
                <input type="text" name="lastName" value="" placeholder="Last Name" />
                <br>
                <?php
                    if(isset($_GET['regerror'])){
                        $regerror = $_GET['regerror'];
                        if($regerror == 1){
                            echo "<p style='color:red;'>Username already exist in database.</p>";
                        }
                        if($regerror == 2){
                            echo "<p style='color:red;'>Your password not match.</p>";
                        }
                        if($regerror == 3){
                            echo "<p style='color:red;'>Your username or password is too short.</p>";
                        }
                        if($regerror == 4){
                            echo "<p style='color:red;'>Please fill all the inputs.</p>";
                        }
                        if($regerror == 5){
                            echo "<p style='color:red;'>Your information is not valid, please try again.</p>";
                        }
                        if($regerror == 6){
                            echo "<p style='color:red;'>Hacker.</p>";
                        }
                    }
                ?>
                <input type="submit" value="Register" />
            </form>
        </div>
        
    </body>
</html>


