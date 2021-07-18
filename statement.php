<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "bank";
        
    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql1 = "SELECT * FROM transaction";
    $result1 = mysqli_query($conn,$sql1);

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

        .carousel-caption1 {
            color:black; 
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-weight: bolder;
        }

        .carousel-caption2 {
            color:white; 
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-weight: bolder;
        }

        .carousel-inner > .item > img {
            vertical-align: middle;
            height: auto;
            width:auto;
        }

        .carousel{
            vertical-align: middle;
            margin: auto;
            height: 400px;
            width: 700px;
        }

        .account-details{
            font-size: medium;
            font-family: Georgia, 'Times New Roman', Times, serif;
            color: black;
            background-color:blue-grey;
            margin: 50px auto;
            height: 40%;
            width: 80%;
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

    <body>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>   
            
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

        <div class="container" align = "center">
            <div class="panel panel-default account-details">
                <div class="panel-heading" style = "font-size: 20px;"><span class="glyphicon glyphicon-user"></span><strong>TRANSACTIONS</strong></div>
                <table class = "table">
                    <tr>
                        <td style = "font-weight: bold;"><?php echo "Transaction Number"; ?></td>
                        <td style = "font-weight: bold;"><?php echo "Beneficiary Account"; ?></td>
                        <td style = "font-weight: bold;"><?php echo "Amount"; ?></td>
                        <td style = "font-weight: bold;"><?php echo "Type"; ?></td>
                        <td style = "font-weight: bold;"><?php echo "Timestamp"; ?></td>
                    </tr>
                    <?php 
                        $found = 0;
                        while($row1 = mysqli_fetch_array($result1)){
                        $found++;
                           if($row1['sender_id'] == 1177288919) 
                           {
                                echo "<tr><td>" . $row1['tid'] . "</td><td>" . $row1['receive_name'] . "</td><td>" . $row1['amount'] . "</td><td>" . 'Sent'. "</td><td>" . $row1['time'] . "</td></tr>";
                           }
                            else{
                                echo "<tr><td>" . $row1['tid'] . "</td><td>" . $row1['send_name'] . "</td><td>" . $row1['amount'] . "</td><td>" . 'Received'. "</td><td>" . $row1['time'] . "</td></tr>";
                           }
                        }
                    ?>
                </table>
                <div class="panel-footer">
                    <h4><?php  echo $found ?> successful transaction(s) </h4>
                </div>
            </div>
            </div>
        </div>



    </body>