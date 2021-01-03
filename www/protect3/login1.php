<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/extra.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
<body>
    
    <div class="container">
        <form action="login_action1.php" method="POST">
            <input type="text" name="username" value="" placeholder="Username" autofocus>
            <br>
            <input type="password" value="" name="password" placeholder="Password">
            <br>
            <?php
                if(isset($_GET['greska'])){
                    $greska = $_GET['greska'];
                    if($greska == 1){
                        echo "<p style='color:red'>Username don't exist in database</p>";
                    }
                }
            ?>
            <input type="submit" value="Login" >
        </form>
    </div>

    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
  
</html>
