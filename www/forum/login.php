<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            $forumName = "Pulsar Forums";

            include('inc/header.php');
        ?>
        <link href="css/login.css" rel="stylesheet">
        <title>Welcome to <?php echo $forumName; ?></title>
    </head>

    <body role="document">
        <?php include('inc/nav.php'); ?>

        <div class="container theme-showcase" role="main">
            <form class="form-signin" action="login_action.php" method="POST">
                <h2 class="form-signin-heading">Please login in</h2>
                <label for="inputUsername" class="sr-only">Username</label>
                <input type="text" name="username" value="" id="inputUsername" class="form-control" placeholder="Username" autofocus>
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" name="password" value="" id="inputPassword" class="form-control" placeholder="Password">
                <?php
                    if(isset($_GET['logerror']))
                    {
                        $logerror = $_GET['logerror'];
                        if($logerror == 1)
                        {
                            echo '<div class="alert alert-danger" role="alert">
                                  Please enter username and password
                                  </div>';
                        }
                        if($logerror == 2)
                        {
                            
                            echo '<div class="alert alert-danger" role="alert">
                                  Username and Password requires minimum 5 characters
                                  </div>';
                        }
                        if($logerror == 3)
                        {
                            
                            echo '<div class="alert alert-danger" role="alert">
                                  Username doesn\'t exist in database
                                  </div>';
                        }
                    }
                ?>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            </form>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
