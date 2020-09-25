<html>
<head> 
 <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
 <script src="../js/bootstrap.min.js"></script>
    <title>Creating Admin</title>
</head>
        <body>
        <div class="container">
        <h1>Creating Your Admin Account</h1>
                <form action="admin-create.php" method="POST">
               
                <input type="text" name="firstname" placeholder="enter first name..." ><br><br>
             
                <input type="text" name="lastname" placeholder="enter last name..." ><br><br>
            
                <input type="radio" name="gender" value="male">Male
                <input type="radio" name="gender" value="female">Female<br><br>
            
                <input type="text" name="mobile" placeholder="mobile here..." ><br><br>
             
                <input type="text" name="username" placeholder="UserName To Login..." ><br><br>
              
                <input type="text" name="passkey" placeholder="Passowrd here..." ><br><br>
            
                <input type="text" name="fav_food" placeholder="Favorite Food here..." ><br><br>
           
                <input type="text" name="fav_city" placeholder="Favoirte City here..." ><br><br>
                <input type="submit" class="btn btn-success" name="submit" value="Submit">
                </form>
                </div>
                    <?php
                        if(isset($_POST['submit'])){
                            $fname = $_POST['firstname'];
                            $lname = $_POST['lastname'];
                            $gender = $_POST['gender'];
                            $mobile = $_POST['mobile'];
                            $username = $_POST['username'];
                            $passkey = $_POST['passkey'];
                            $fav_food = $_POST['fav_food'];
                            $fav_city = $_POST['fav_city'];
                            // echo $fname."<br>";
                            // echo $lname."<br>";
                            // echo $gender."<br>";
                            // echo $mobile."<br>";
                            // echo $username."<br>";
                            // echo $passkey."<br>";
                            // echo $fav_food."<br>";
                            // echo $fav_city."<br>";
                            if(!empty($fname)&&!empty($lname)&&!empty($gender)&&!empty($mobile)&&!empty($username)&&!empty($passkey)&&!empty($fav_city)){
                                // creating connection
                                $conn = mysqli_connect('localhost','root','','hotel')or die('could not connect to the database');
                                // exporting the data
                                $query = "INSERT INTO admini(First_Name, Last_Name, Gender, Mobile, UserName, Passkey, Favorite_Food, Favorite_City)VALUES('$fname','$lname','$gender','$mobile','$username','$passkey','$fav_food','$fav_city')";
                                $result = mysqli_query($conn, $query) or die('there is error exporting the data');

                            }
                         }
                    
                    ?>
                        <style>
                            body{
                                text-align: center;
                            }
                            .container {
                                border-radius: 5px;
                                background-color: #f2f2f2;
                                padding: 20px;
                            }
                            input[type=text], select, textarea {
                                width: 100%; /* Full width */
                                padding: 12px; /* Some padding */ 
                                border: 1px solid #ccc; /* Gray border */
                                border-radius: 4px; /* Rounded borders */
                                box-sizing: border-box; /* Make sure that padding and width stays in place */
                                margin-top: 6px; /* Add a top margin */
                                margin-bottom: 16px; /* Bottom margin */
                                resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
                            }
                            h1{
                                font-style: italic;
                                font-size: 200%;
                                text-align: center;
                                text-decoration: underline;
                            }
                        </style>


                
        </body>
<html>