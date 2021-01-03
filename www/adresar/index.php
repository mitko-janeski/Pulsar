<html>
    <head>
        <style type="text/css">
            .box {
                border: 1px solid #e3e3e3;
                width: 900px;
                margin-top: 50px;
                height: 450px;
                
            }
            .centering{
                margin-left: auto;
                margin-right: auto;
            }
            .center{
                text-align: center;
            }
        </style>
    </head>
    
    <body>
    <?php
        session_start();
        if( isset($_SESSION['user'])){
            echo "Welcome back " . $_SESSION['user']['first_name'] . " - " . '<a href="logout.php">Log out</a>';
        }
        else{
            header("location: login.php");
        }
    ?>
        <div class="box centering">
            <p><a href="add_contact.php" style="float:right;">Add Contact</a></p>
            <table border="1" class="center" style="width:100%;">
                <tr>
                    <th>First Name</td>
                    <th>Last Name</td>
                    <th>Address</td>
                    <th>Actions</td>
                </tr>
                <?php
                    
                    $limit = 5;
                    $offset = 0;
                    $page = 1;
                    
                    if( isset($_GET['page'])){
                        if( !empty($_GET['page']) && is_numeric($_GET['page']) && $_GET['page'] > 0){
                            $page = $_GET['page'];
                                $offset = ($page * $limit) - $limit;
                        }
                    }
                    
                    $host = "localhost";
                    $dbuser = "mitko";
                    $dbpass = "1234";
                    $database = "adresar";

                    $connect = mysqli_connect($host, $dbuser, $dbpass, $database);
                    
                    $query = "SELECT * FROM contacts WHERE user_id=" . $_SESSION['user']['user_id'] . " LIMIT $limit OFFSET $offset";
                    
                    $result = mysqli_query($connect, $query);
                    $contacts = mysqli_fetch_all($result, MYSQLI_ASSOC);
                    foreach($contacts as $key => $value){
                        echo '<tr>
                            <td>' . $value['first_name'] . '</td>
                            <td>' . $value['last_name'] . '</td> 
                            <td>' . $value['address'] . '</td>
                            <td>EDIT - DELETE</td>
                            </tr>';
                    }
                    
                    $query = "SELECT COUNT(user_id) AS rows FROM contacts WHERE user_id=" . $_SESSION['user']['user_id'];
                    $result = mysqli_query($connect, $query);
                    $contactCount = mysqli_fetch_assoc($result);
                    $contactCount = $contactCount['rows'];
                ?>
                
            </table>
            
            <?php
                $pages = ceil( $contactCount / $limit);
                if($page > 1){
                    echo '<a href="index.php?page=' . ($page-1) . '">Prev</a>';
                }
                
                for($i = 1; $i <= $pages;$i++){
                    if($page == $i){
                        echo $i . ' - ';
                    }
                    else{
                        echo '<a href="index.php?page=' . $i . '">' . $i . "</a> - ";
                    }
                }
                if($page < $pages){
                    echo '<a href="index.php?page=' . ($page+1) . '">Next</a>';
                }
            ?>
            
        </div>
    </body>
</html>