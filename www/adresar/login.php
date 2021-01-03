<html>
    <head>
        <title>Adresar - Login Page</title>
        <style type="text/css">
            .login-wrapper{
                width:400px;
                height:250px;
                border:1px solid #c1c1c1;
                margin-top:200px;
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
        <div class="login-wrapper login-center">
            <p class="center">Please Login to your account</p>
            <form action="login_action.php" method="POST">
                <input type="text" name="username" value="" placeholder="Username">
                <br>
                <input type="password" name="password" value="" placeholder="Password">
                <br>
                <?php
                    if (isset($_GET['greska'])){
                        $greska = $_GET['greska'];
                        if($greska == 1){
                            echo '<p style="color:red;">Edno ili poveke od polinjata se prazni</p>';
                        }
                        else if ($greska == 2){
                            echo '<p style="color:red;">Ne se validni informaciite</p>';
                        }
                        else if ($greska == 3){
                            echo '<p style="color:red;">Gresno korisnicko ime ili lozinka</p>';
                        }
                    }
                    
                ?>
                <input type="submit" value="Login" />
                
            </form>
        </div>
    </body>
</html>