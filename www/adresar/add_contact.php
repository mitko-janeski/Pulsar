<?php
    session_start();
        if( isset($_SESSION['user'])){
            $user = $_SESSION['user'];
        }
        else{
            header("location: login.php");
        }
?>

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
            <form action="contact_action.php" method="POST">
                <h3>Add Contact</h3>
                <input type="text" name="firstName" value="" placeholder="First Name" autofocus/>
                <br>
                <input type="text" name="lastName" value="" placeholder="Last Name" />
                <br>
                <input type="text" name="address" value="" placeholder="Address" />
                <br>
                <input type="submit" value="Add Contact" />
            </form>
        </div>
        
    </body>
</html>


