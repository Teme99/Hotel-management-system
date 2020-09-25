<html>
<head>
<link rel="stylesheet" href="bootstrap.min.css">
<script src="bootstrap.min.js"></script>

</head>
<body>

<div class="container">
<h2>Fill The Following Required Informaiton</h2>
  <form action="reserve.php">

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name.." autocomplete="off">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name.." autocomplete="off">
    
	<label for="lname">Gender</label>
	<input type="radio" name="gender" value="male">Male
	<input type="radio" name="gender" value="female">Female<br><br>
	
	<label for="lname">Country</label>
    <input type="text" id="country" name="country" placeholder="Your Country name..">
	
	<label for="lname">Due Date</label>
	<input type="date" name="duedate" autocomplete="off">
	
	<label for="lname">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Until</label>
	<input type="date" name="until"><br><br>
   
    </select>


    <input type="submit" value="Submit">

  </form>
</div>
<style>
h2{
font-style: italic;
font-size: 200%;
text-align: center;
text-decoration: underline;
}

input[type=text], select, textarea {
  width: 100%; 
  padding: 12px; 
  border: 1px solid #ccc; 
  border-radius: 4px;
  box-sizing: border-box; 
  margin-top: 6px; 
  margin-bottom: 16px;
  resize: vertical 
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>

<?php
if(isset($_POST['submit'])){
  $fname = $_POST['firstname'];
  $lname = $_POST['lastname'];
  $gender = $_POST['gender'];
  $country = $_POST['country'];
  $duedate = $_POST['duedate'];
  $until = $_POST['until'];
  if(!empty($fname)&&!empty($lname)&&!empty($gender)&&!empty($country)&&!empty($duedate)&&!empty($until)){
   // $conn = mysqli_connect('localhost','root','','hotel') or die('could not connect to the database');
    echo $fname."<br>";
    echo $lname."<br>";
    echo $gender."<br>";
    echo $country."<br>";
    echo $duedate."<br>";
    echo $until."<br>";
    
  }else{
    echo "Fill All The Required Informtion";
  }
  
}
?>

</body>
</html>