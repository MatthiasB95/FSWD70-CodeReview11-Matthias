<?php require_once 'actions/db_connect.php'; ?> 
<!DOCTYPE html>
<html>
<head>
	<title>Restaurants</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-success">

  <a class="navbar-brand text-white">Welcome To Travel-o-matic</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-md-0">
    	<li>
        <a class="nav-link text-white" href="event.php">Events</a>
      </li>
    	<li>
        <a class="nav-link text-white" href="userpage.php">See all</a>
      </li>
      <li>
        <a class="nav-link text-white" href="logout.php?logout">Sign out<span class="sr-only"></a>
      </li>
    </ul>
  </div>
</nav>
<h1>Restaurants</h1>
    <table  border="1" cellspacing= "0" cellpadding="0">
       <thead>
       	<tr>
            <th>Name</th>
            <th>Telephone</th>
            <th>Type</th>
            <th>Description</th>
      		<th>Website</th>
      		<th>City</th>
      		<th>Zipcode</th>
      		<th>Address</th>
      		<th>Image</th>
      		<td><img src=""></td>
        </tr>
         
       </thead>
       <tbody>
<?php
       $sql1 = "SELECT * FROM restaurants 
				   INNER JOIN locationrest ON restaurants.locRest_id = locationrest.locRest_id";	   
            $result1 = $conn->query($sql1);
           if($result1->num_rows > 0) {
                while($row = $result1->fetch_assoc()) {
                   echo  "<tr>
                       <td>" .$row['resName']."</td>
                       <td>" .$row['resTel']."</td>
                       <td>" .$row['resType']."</td>
                       <td>" .$row['resDescription']."</td>
                       <td>" .$row['resWeb']."</td>
                       <td>" .$row['cityRest']."</td>
                       <td>" .$row['zipcodeRest']."</td>
                       <td>" .$row['addressRest']."</td>
                       <td>" .$row['imageRest']."</td>
                     
                   </tr>" ;
               }
           } else  {
               echo  "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
           }
           ?>
</body>
</html>
<?php ob_end_flush(); ?>