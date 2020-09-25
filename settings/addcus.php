<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<script src="../js/bootstrap.min.js"></script>

</head>
<body>

<div class="jumbotron">
<h2>Add The Customer Information Below</h2>
  <form action="addcus.php" method="POST">

      <input type="text" name="firstname" placeholder="First name.." autocomplete="off"><br>
      
      <input type="text" name="lastname" placeholder="Last Name.." autocomplete="off"><br>
      
      <input type="text" name="nation" placeholder="Nationality.." ><br>
      
      <input type="radio" name="gender" value="male">Male
      <input type="radio" name="gender" value="female">Female<br /><br />
      
      <textarea id="subject" name="more" placeholder="Any More Info Related To Customer.." style="height:100px; width: 1366px;"></textarea>
      <label for="indate">Indate</label>
      <input type="date" name="indate"><br>
      <label for="outdate">Outdate</label>
      <input type="date" name="outdate"><br>
      <label for="Room">Room</label>
      <input type="number" name="room"><br /><br />
      <input type="submit" name="submit" value="Submit">

  </form>
</div>
      <style>
        body{
              text-align: center;
          }
          .container {
              border-radius: 5px;
              background-color: #f2f2f2;
              padding: 20px;
          }
          input[type=text],select, textarea, number {
              width: 100%; /* Full width */
              padding: 12px; /* Some padding */ 
              border: 1px solid #ccc; /* Gray border */
              border-radius: 4px; /* Rounded borders */
              box-sizing: border-box; /* Make sure that padding and width stays in place */
              margin-top: 6px; /* Add a top margin */
              margin-bottom: 16px; /* Bottom margin */
              resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
          }
          h2{
              font-style: italic;
              font-size: 200%;
              text-align: center;
              text-decoration: underline;
          }
      
          
      </style>


<?php
if(isset($_POST['submit'])){
  $fname = $_POST['firstname'];
  $lname = $_POST['lastname'];
  $nation = $_POST['nation'];
  $gender = $_POST['gender'];
  $indate = $_POST['indate'];
  $outdate = $_POST['outdate'];
  $room = $_POST['room'];
  $more = $_POST['more'];
  // echo $fname."<br>";
  echo $fname."<br>";
  echo $lname."<br>";
  echo $nation."<br>";
  echo $gender."<br>";
  echo $indate."<br>";
  echo $outdate."<br>";
  echo $room."<br>";
  echo $more."<br>";

  if(!empty($fname)&&!empty($lname)&&!empty($nation)&&!empty($gender)&&!empty($indate)&&!empty($outdate)&&!empty($room)&&!empty($more)){
  //  creating connection
  $conn = mysqli_connect('localhost','root','','hotel')or die('could not connect to the database');
  // // exporting the data
  $query = "INSERT INTO customers(First_Name, Last_Name, Nationality, Gender, Indate, Outdate, Room, More)VALUES('$fname','$lname','$nation','$gender','$indate','$outdate','$room','$more')";
  $result = mysqli_query($conn, $query) or die('encountered a problem with the database');
  }
}
?>

</body>
</html>