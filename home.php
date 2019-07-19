<?php 
require_once 'actions/db_connect.php'; 
?> 

<!DOCTYPE html>
<html>
<head>
   <title>User Page</title>

   <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-success">

  <a class="navbar-brand text-white">Welcome To Travel-o-matic</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-md-0">
      <li>
        <span class="navbar-brand text-white">Admin Panel</span>
      </li>
      <li>
        <a class="nav-link text-white" href="logout.php?logout">Sign out<span class="sr-only"></a>
      </li>
    </ul>
  </div>
</nav>

<div class ="manageUser">
   <h1>Concerts</h1>
   <a href= "createcon.php"><button type="button" >Add Concert</button></a>
   <table class="table table-striped table-bordered">
       <thead>
       	<tr>
            <th>Date</th>
            <th>Price</th>
            <th>Name</th>
            <th>City</th>
      		<th>Zipcode</th>
      		<th>Address</th>
      		<th>Image</th>
        </tr>
         
       </thead>
       <tbody>

            <?php
            $sql = "SELECT * FROM concerts 
				   INNER JOIN locationcon ON concerts.locCon_id = locationcon.locCon_id";
			$result = $conn->query($sql);
		   

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   echo  "<tr>
                      
                       <td>" .$row['conDate']."</td>
                       <td>" .$row['conPrice']."</td>
                       <td>" .$row['conName']."</td>
                       <td>" .$row['cityCon']."</td>
                       <td>" .$row['zipcodeCon']."</td>
                       <td>" .$row['addressCon']."</td>
                       <td>" .$row['imageCon']."</td>
                       <td>
                           <a href='updatecon.php?id=" .$row['con_id']."'><button type='button'>Edit</button></a>
                           <a href='deletecon.php?id=" .$row['con_id']."'><button type='button'>Delete</button></a>
                       </td>
                     
                   </tr><br>" ;

               }
           } else  {
               echo  "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
           }
            ?>

            
       </tbody>
	</table>

	<h1>Restaurants</h1>
	<a href= "createres.php"><button type="button" >Add Restaurant</button></a>
    <table class="table table-striped table-bordered">
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
                       <td>
                           <a href='updateres.php?id=" .$row['res_id']."'><button type='button'>Edit</button></a>
                           <a href='deleteres.php?id=" .$row['res_id']."'><button type='button'>Delete</button></a>
                       </td>
                     
                   </tr>" ;
               }
           } else  {
               echo  "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
           }
           ?>

        </tbody>
        </table>

        <h1>Things To-Do</h1>
        <a href= "createtodo.php"><button type="button" >Add To-Do</button></a>
    <table class="table table-striped table-bordered">
       <thead>
       	<tr>
            <th>Name</th>
            <th>Type</th>
            <th>Description</th>
      		<th>Website</th>
      		<th>City</th>
      		<th>Zipcode</th>
      		<th>Address</th>
      		<th>Image</th>
        </tr>
         
       </thead>
       <tbody>
<?php
       $sql1 = "SELECT * FROM todo 
				   INNER JOIN locationtodo ON todo.locToDo_id = locationtodo.locToDo_id";	   
            $result1 = $conn->query($sql1);
           if($result1->num_rows > 0) {
                while($row = $result1->fetch_assoc()) {
                   echo  "<tr>
                       <td>" .$row['todoName']."</td>
                       <td>" .$row['todoType']."</td>
                       <td>" .$row['todoDescription']."</td>
                       <td>" .$row['todoWeb']."</td>
                       <td>" .$row['cityToDo']."</td>
                       <td>" .$row['zipcodeToDo']."</td>
                       <td>" .$row['addressToDo']."</td>
                       <td>" .$row['imageToDo']."</td>
                       <td>
                           <a href='updatetodo.php?id=" .$row['todo_id']."'><button type='button'>Edit</button></a>
                           <a href='deletetodo.php?id=" .$row['todo_id']."'><button type='button'>Delete</button></a>
                       </td>
                     
                   </tr>" ;
               }
           } else  {
               echo  "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
           }
           ?>

        </tbody>
        </table>    
   
   
</div>

</body>
</html>
<?php ob_end_flush(); ?>