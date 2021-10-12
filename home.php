<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>animal</title>
    <?php include('header.php') ?>
</head>
<body>
    

<?php
include 'connection.php';

//fetching data into the category table//
$sql = "SELECT name, animal, image, description, life FROM category";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {



    ?>
    <table>
      <tr><td><div class="gallery1">
  
      <?php echo "<img src='  ".$row['image']. " 'width='50px''  '>"; ?></td>

  <td><div class="desc1"><?php     
  echo  $row['name'] . "<br>" ;
  echo  $row['animal'] . "<br>";
  echo  $row['description'] . "<br>";
  echo  $row['life'];

  ?></div></td>
</div></tr>


  
  <?php
  }
} else {
  echo "0 results";
}
$conn->close();
?>


</table>

 <div>
   <?php include('footer.php')?>;
   
 </div> 

</body>
</html>
