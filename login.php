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

    $url = 'bgimg.png';
    $url2 = 'img6.png'
?>

<!DOCTYPE html>
<html>
    <head>
        <title>MyAccount</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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

            body {
                background-image:url('<?php echo $url ?>');
                position: relative;
                z-index: 1;
                font-family: Georgia, 'Times New Roman', Times, serif;
            }

        </style>

    </head>

    <body>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>   

        <!--navigation bar -->
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
                        <li class = "nav-item topnav active"><a href = "login.php">Login</a></li>
                        <li class = "nav-item topnav"><a href = "account.php">MyAccount</a></li>
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

        <div class = "container" align = "center" width = 40% >
            <h3 style = "font-size: 30px; text-decoration:underline;"><strong>LOGIN</strong></h3>
            <div class = "form-element">
                <form action = "actionpage.php" method = "post">
                    <br>
                    <input name = "user" type = "text" id = "uname" class = "form-control" placeholder = "Enter account number">
                    <br>
                    <input type = "password" name = "psswrd" id = "psswrd" class = "form-control" placeholder = "Enter password">
                    <br>
                    <input type = "submit" class = "btn btn-success" value = "Login">
                </form>
            </div>
        </div>
    </body>
</html>