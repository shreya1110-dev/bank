<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "bank";
        
    // Create connection to database
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    //selecting the current users details

    $sql2 = "SELECT * FROM customer WHERE acc_no=1177288919";
    $result2 = $conn->query($sql2);

    $row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC); 

    $url = 'bgimg.png';
    $url2 = 'img6.png'
?>

<!DOCTYPE html>
<html>
    <head>
        <title>MyAccount</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <style>
        .topnav {
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-weight: bold;
            margin-top: 10px;
            
        }

        .topnav a{
            float:left;
            text-align:center;
            text-decoration:solid;
            font-size:20px;
            color:black;
            word-spacing: 10px;
        }

        .topnav-center{
            position: absolute;
            left: 50%;
            transform: translatex(-50%);
            padding: 10px 24px 12px 24px;
        }

        .topnav.active:hover {
            background-color:grey;
        }

        .topnav.active:hover a{
            background-color:grey;
        }

        .topnav:hover {
            color:black;
        }

        .nav-item.active {
            background-color: black;
        }

        .nav-item.active a{
            color:white;
        }

        .topnav-right{
            position: absolute;
            padding: 10px 24px 12px 24px;
            right:0%;
        }

        .account-details{
            font-size: medium;
            font-family: Georgia, 'Times New Roman', Times, serif;
            color: black;
            background-color:blue-grey;
            margin: 50px auto;
            height: 40%;
            width: 50%;
        }

        body {
            background-image:url('<?php echo $url ?>');
            position: relative;
            z-index: 1;
        }

        .account-details{
            background-image:url('<?php echo $url2 ?>'); 
            background-repeat: repeat-none;
            background-attachment: relative ;
            background-position:center;
        }

        .btn {
            font-size: medium;
            font-family: Georgia, 'Times New Roman', Times, serif;
            color: white;
        }

        </style>

    </head>

    </body style = "background">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>   
            
        <!--navigation bar-->
        <nav class = "nav navbar navbar-expand-md">
            <div class = "container" style = "margin-top: 10px">
                <div>
                    <a class = "nav navbar-nav" href = "#">
                        <img src = "bank2.jpg" height = "80px">
                    </a>   
                </div>
                <div>
                    <ul class = "nav navbar-nav topnav-center">
                        <li class = "nav-item topnav"><a href = "main.php">Home</a></li>
                        <li class = "nav-item topnav"><a href = "login.php">Login</a></li>
                        <li class = "nav-item topnav active"><a href = "account.php">MyAccount</a></li>
                    </ul>
                </div>
                <div>
                    <ul class = "nav navbar-nav topnav-right">
                        <li class = "nav-item topnav"><a href = "contact.php"><span class="glyphicon glyphicon-envelope"></span> Contact</a></li>                            
                        <li class = "nav-item topnav"><a href = "logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!--creating account details table -->
        <div class="container" align = "center">
            <div class="panel panel-default account-details">
                <div class="panel-heading" style = "font-size: 20px;"><span class="glyphicon glyphicon-user"></span><strong>USER DETAILS</strong></div>
                    <table class = "table">
                        <tbody>
                            <tr>
                                <th scope = "row"></th>
                                <td align = "center"><?php echo "Account Number &nbsp;"; ?></td>
                                <td align = "left"><?php echo $row2['acc_no'];echo "<br>";?></td>
                            </tr>
                            <tr>
                                <th scope = "row"></th>
                                <td align = "center"><?php echo "Account Type &nbsp" ; ?></td>
                                <td align = "left"><?php echo $row2['acc_type'];echo "<br>";?></td>
                            </tr>
                            <tr>
                                <th scope = "row"></th>
                                <td align = "center"><?php echo "IFSC code &nbsp"; ?></td>
                                <td align = "left"><?php echo $row2['ifsc_code'];echo "<br>";?></td>
                            </tr>
                            <tr>
                                <th scope = "row"></th>
                                <td align = "center"><?php echo "Nominee  &nbsp"; ?></td>
                                <td align = "left"><?php echo $row2['name'];echo "<br>";?></td>
                            </tr>
                            <tr>
                                <th scope = "row"></th>
                                <td align = "center"><?php  echo "Balance &nbsp" ; ?></td>
                                <td align = "left"><?php echo $row2['balance'];echo "<br>";?></td>
                            </tr>
                            <tr>
                                <th scope = "row"></th>
                                <td align = "center"><?php echo "City/Branch &nbsp" ; ?></td>
                                <td align = "left"><?php echo $row2['city'];echo "<br>";echo "<br>";?></td>
                            </tr>
                        </tbody>
                    </table>

                    <!--buttons for transact and statement -->
                    <div class="panel-footer">
                        <div class = "btn-group btn-group-justified">
                            <a href="transact.php" class="btn btn-primary">Transact</a>
                            <a href="statement.php" class="btn btn-primary">Statement</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>