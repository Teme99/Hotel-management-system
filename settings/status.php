<!DOCTYPE html>
<html lang="en">
<head>
  <title>Status</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</head>
<body>
<?php
$conn = mysqli_connect('localhost','root','','hotel')or die('could not connect to the database');
$query = "SELECT First_Name, Last_Name, Nationality, Gender, Indate, Outdate, Room, More FROM customers";
 if($query_run = mysqli_query($conn,$query)){
   while($query_row = mysqli_fetch_assoc($query_run)){
        $fname = $query_row['First_Name'];
        $lname = $query_row['Last_Name'];
        $nation = $query_row['Nationality'];
        $gender = $query_row['Gender'];
        $indate = $query_row['Indate'];
        $outdate = $query_row['Outdate'];
        $room = $query_row['Room'];
        $more = $query_row['More'];
          echo $fname."<br>";
          echo $lname."<br>";
          echo $nation."<br>";
          echo $gender."<br>";
          echo $indate."<br>";
          echo $outdate."<br>";
          echo $room."<br>";
          echo $more."<br>";
   }
}else{
  echo "Failed";
}


?>

<div class="container">
  <h2>Current Hotel Status</h2>
  <p>Inforamtion About Pople Currently in the Hotel</p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Room</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Nationality</th>
        <th>Gender</th>
        <th>Indate</th>
        <th>Outdate</th>
        <th>More</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>2</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>3</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>4</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>5</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>6</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>7</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>8</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>9</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>10</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>11</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>12</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>13</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>14</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>15</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>16</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>17</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>18</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>19</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>20</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>21</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>22</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>23</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>24</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>25</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>26</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>27</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>28</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>29</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>30</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>31</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>32</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>33</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>34</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>35</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>36</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>37</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>38</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>39</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>40</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>41</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>42</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>43</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>44</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>45</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>46</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>47</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>48</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>49</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>50</td>
        <td></td>
        <td></td>
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>

