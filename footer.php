<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<style>
  body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
</style>
</head>
<div class="footer">
<body class="d-flex flex-column">
  <div id="page-content">
    <div class="container text-center">
      <div class="row justify-content-center">
        <div class="col-md-7">
          
         <p>Projects By Divyanshu Kumar</p>
        </div>
      </div>
    </div>
  </div>

  
<?php

try{

  $conn=new PDO("mysql:host=localhost;dbname=animal","root","");

}
catch(PDOExection $e){

  echo $e->getMessage;
}

$sql="update category set visitor_counter=visitor_counter+1";
$stmt=$conn->prepare($sql);
$stmt->execute();
$sql="select visitor_counter from category";
$stmt=$conn->prepare($sql);
$stmt->execute();
$arr=$stmt->fetchAll(PDO::FETCH_ASSOC);
$counter=$arr[0]['visitor_counter'];
$count=strlen($counter);
?>

<div>
  <ul id="visitor_counter">
    <?php for($i=0;$i<$count;$i++){?>
      <li><?php echo $counter[$i]?></li>
    <?php }?>
    
  </ul>
</div>





  
</div>




</body>
</html> 
