<!DOCTYPE html>
<html>
    <head>
        <title>Welcome To HDFD Bank</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        
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

            body {
                background-image:url('bgimg.png');
                position: relative;
                overflow: hidden;
                z-index: 1;
            }

           
        </style>

        <body>
            <div>
                <nav class = "nav">
                    <div class = "container" style = "margin-top: 10px">
                        <div>
                            <a class = "nav navbar-nav" href = "#">
                                <img src = "bank2.jpg" height = "80px">
                            </a>   
                        </div>
                        <div>
                            <ul class = "nav navbar-nav topnav-center">
                                <li class = "nav-item topnav active"><a href = "#">Home</a></li>
                                <li class = "nav-item topnav"><a href = "login.php">Login</a></li>
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
            </div>

            <div class="container">
                <br>
                <br>
                <div id="carousel" class="carousel slide" data-ride="carousel">
                  
                  <!-- Carousel Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel" data-slide-to="1" ></li>
                    <li data-target="#carousel" data-slide-to="2"></li>
                  </ol>
              
                  <!-- Wrapper for Slides -->
                    <div class="carousel-inner" align = "center" role="listbox">
              
                    <div class="item active">
                      <img src="img1.jpg">
                      <div class="carousel-caption1">
                        <h3><strong>Easy Payments</strong></h3>
                      </div>
                    </div>
    
                  
                    <div class="item">
                      <img src="img3.jpg">
                      <div class="carousel-caption1">
                        <h3><strong>User Friendly Interface</strong></h3>
                      </div>
                    </div>
              
                    <div class="item">
                      <img src="img4.jpg">
                      <div class="carousel-caption1">
                        <h3><strong>Customer Care</strong></h3>
                      </div>
                    </div>
                
                  </div>
              
                  <!-- Left and Right Control Links -->
                  <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                  </a>
                  <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  </a>
                </div>
              </div>
        </body>

    </head>
</html>