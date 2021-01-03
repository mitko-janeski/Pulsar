<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            $forumName = "Pulsar Forums";

            include('inc/header.php');
        ?>
        <title>Welcome to <?php echo $forumName; ?></title>
    </head>

    <body role="document">
        <?php include('inc/nav.php'); ?>

        <div class="container theme-showcase" role="main">
            <div class="jumbotron">
                <?php
                    session_start();
                    if(isset($_SESSION['user'])){
                        echo "<h2>Welcome back " . $_SESSION['user']['username'] . " - " . '<a href="logout.php">Log out</a></h2>';
                    }
                    else{
                        echo "<h2>Welcome to " . $forumName . "</h2>";
                    }
                ?>
                
                <p>This is a template showcasing the optional theme stylesheet included in Bootstrap. Use it as a starting point to create something more unique by building on or modifying it.</p>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <?php
                        if(isset($_SESSION['user']))
                        {
                            echo "<button type='button' class='btn btn-lg btn-primary' style='float:right;'>Create New Topic</button>";
                        }
                    ?>
                    
                    <?php
                        $host = "localhost";
                        $userdb = "root";
                        $dbpass = "";
                        $db = "forums";
                        
                        $con = mysqli_connect($host, $userdb, $dbpass, $db);
                        $sql = "SELECT * FROM topics";
                        
                        $result = mysqli_query($con, $sql);
                        $table = mysqli_fetch_assoc($result);
                        
                    ?>
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>Topics</th>
                        <th>Created by</th>
                        <?php
                            if(isset($_SESSION['user']))
                            {
                                echo "<th>Action</th>";
                            }
                        ?>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Otto</td>
                        <td>@mdo</td>
                      </tr>
                      <tr>
                        <td>Mark</td>
                        <td>Otto</td>
                      </tr>
                      <tr>
                        <td>Thornton</td>
                        <td>@fat</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
            </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
