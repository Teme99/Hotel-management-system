<html>
    <head>
        <title>Admin Login</title>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    </head>
        <body>

<h2><small>This Is Where The Admin Logs In</small></h2>
<form action="recep-login.php" action="post">
<div id="login-content">
        <h2 id="inner-login">Login</h2>
    <input type="text" name="userName" placeholder="Enter User Name Here" size="50">
    <br><br>
    <input type="password" name="password" placeholder="Enter Password Here" size="50">
    <br><br>
    <input type="submit" class="btn btn-warning">
    </div>
    <div class="others">
    <p><i>Don't Have An Account?<a href="admin-create.php">You Can Create New</a></i></p>
    <a href="../settings/forgot.php">Forgot password?</a>
    </div>
        <style>
		body{
		background-image: url(now.jpg);
		background-size: cover;
		}
       #login-content{
           margin-top: 100px;
           margin-left: 300px;
           margin-right: 200px;
           background-color: brown;
           border: 5px double white;
           padding: 5px 5px 5px 25px;
       }
       #inner-login{
           color: white;
           font-style: italic;
           padding-left: 350px;
           padding-bottom: 15px;
           text-decoration: underline;
       }
       footer{
           background: black;
           text-align: center;
           color: white;
           font-size: 150%;
           font-style: bold;
           margin-top: 180px;
        }
        .others{
            text-align: center;

        }
        a{
            text-decoration: none;
            font-size: 122%;
            color: white;
        }
        h2{
            color: white;
        }
        p{
            color: white;
            font-size: 122%;
        }
        a:hover{
            text-decoration: none;
            color: brown;
        }
          
        </style>
 
	

        </body>
        <footer>
                <p>
                  copyright &copy;  G6PLC
                </p>
           </footer>
            
</html>