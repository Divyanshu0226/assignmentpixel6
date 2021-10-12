
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="style.css">
<title>animal</title>
<script src="https://www.google.com/recaptcha/api.js?render=reCAPTCHA_site_key"></script>
<?php include('header.php') ?><br><br><br>


   <script>
      function onClick(e) {
        e.preventDefault();
        grecaptcha.ready(function() {
          grecaptcha.execute('reCAPTCHA_site_key', {action: 'submit'}).then(function(token) {
              // Add your logic to submit to your backend server here.
          });
        });
      }
  </script>
  </head>
<body>
<div class="form">
  <form action="" method="POST" enctype="multipart/form-data">
      <div class="form-style-7">
         <center><h1>Animals</h1></center><br>
      </div>

      <div class="form-style-6">


    <div class="row">
      <div class="col-25">
        <label for="name">Animal</label>
      </div>
      <div class="col-75">
        <input type="text" id="name" name="name" placeholder="Name Of Animal.">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="animal">Category</label>
      </div><br>
    <div class="col-75">
        <input type="radio" id="animal" name="animal" value="Herbivores">
           <label for="html">Herbivores</label>
        <input type="radio" id="animal" name="animal" value="Omnivores">
           <label for="css">Omnivores</label>
        <input type="radio" id="animal" name="animal" value="Carnivores">
           <label for="css">Carnivores</label>
      </div>
    



    <div class="row">
      <div class="col-25">
        <label for="image">Upload Images</label>
      </div><br>
      <div class="col-75">
        <input type="file" name="image" class="form-control"accept="image/">
      </div>
    </div><br>

    

    <div class="row">
      <div class="col-25">
        <label for="description">Description</label>
      </div>
      <div class="col-75">
        <textarea name="description" rows="10" cols="25" placeholder="Enter Description."></textarea>
      </div>
    </div>


    <div class="row">
      <div class="col-25">
         <label for="description">Life Expectancy</label>
      </div>

      <div class="col-75">
        <select name="life" id="life" type="life">
         <option value="Choose A Type">Choose A Type</option>
           <option value="[0-1 Year]">[0-1 Year]</option>
           <option value="[1-5 Year]">[1-5 Year]</option>
           <option value="[5-10 Year]">[5-10 Year]</option>
           <option value="[10+ Year]">[10+ Year]</option>
        </select>
        </div>
      </div>   
   <div class="row">
    <div class="g-recaptcha" data-sitekey="6LfvurccAAAAAEtiSJEUmg0wTj5tulTNLoe9Zs2y"></div>

   </div>

  
   <div class="row">
      <div class="button">
        <input type="submit" name="submit" value="Submit">
     </div>
   </div>
  </div></form>
</div>
</div>
<?php include('footer.php') ?>
 <?php  
include 'connection.php';

if(isset($_POST['submit']))
{
$name1 = $_POST['name'];  
$animal1 = $_POST['animal'];  
 
$file=$_FILES["image"]["name"];
                $location="image/ ";
                if(move_uploaded_file($_FILES["image"]["tmp_name"], $location.$file))
              {
                
                $image1=$location.$file;}
$description1 = $_POST['description'];  
$life1 = $_POST['life'];

if (isset($_POST['g-recaptcha-response'])) {
  $recaptcha=$_POST['g-recaptcha-response'];

  if (!$recaptcha) {
    echo '<script>alert("Please go back and check recaptcha box")</script>';
    exit;
  }
else{
  $secret="6LfvurccAAAAAFHtq3aoh7FoKOdxFEXfuX3uHW7M";
  $url='https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$recaptcha;

  $response=file_get_contents($url);
  $responseKeys=json_decode($response,true);
  if ($responseKeys['success']) {
    
$insert = "INSERT INTO `category`(`name`, `animal`, `image`, `description`, `life`) 
VALUES ('$name1','$animal1','$image1','$description1','$life1')";


$res=mysqli_query($conn,$insert);
 if ($res) {
  ?>
  <script >
    alert("data inserted properly");
  </script>
<?php echo "<script type='text/javascript'> window.location.href='home.php'</script>";?>
  <?php
 }else{
  ?>
  <script>
    alert("data not inserted");
  </script>
  <?php

  }

}  
}
 }

    }

 ?>
<?php include('footer.php')?>;