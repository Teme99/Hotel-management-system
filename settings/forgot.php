<html>
<head>
<link rel="stylesheet" href="bootstrap.min.css">
<script src="bootstrap.min.js"></script>

</head>
<body>

<div class="container">
<h2>Answer Security Questions(Case Sensitive)</h2>
  <form action="action_page.php">

    <label for="fname">Favorite Food</label>
    <input type="text" id="fav-food" name="firstname" placeholder="Your Favoirte Food.." autocomplete="off">

    <label for="lname">Favorite City</label>
    <input type="text" id="fav-city" name="lastname" placeholder="Your Favorite City.." autocomplete="off">

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
/* Style inputs with type="text", select elements and textareas */
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

/* Style the submit button with a specific background color etc */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
  background-color: #45a049;
}

/* Add a background color and some padding around the form */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>

</body>
</html>