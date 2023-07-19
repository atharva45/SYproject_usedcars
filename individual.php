<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        
        @import url("https://fonts.googleapis.com/css2?family=Poppins&display=swap");
      *{
        margin: 0;
        padding: 0;
      }  
      
      pre{
        
        font-weight:800;
        font-size:1vw;
      }
    </style>
    
  </head>
  <body>

  <?php
      $server = "localhost";
      $username = "root";
      $password = "";
      $database = "test";
        
      $conn = mysqli_connect($server, $username, $password, $database);
        // Create connection
      $conn = new mysqli($server, $username, $password, $database);
  ?>
    
    <div class="container" style="display: flex;background-image: linear-gradient(180deg, #ded4d4 0%, #6284FF 50%, #f47070 100%); height:120vh;">

      <div class="left" style="width: 55vw; height: 70vh; margin:10vh 0 0 2vw;background-color: black; display: flex; align-items: center; justify-content: center; ">
      <?php
        $id=$_GET['pid'];
        $sql="SELECT * FROM addcar where id='$id'";
        $rs=mysqli_query($conn,$sql);
        $row=mysqli_fetch_array($rs);
      ?>
      
      <img src="<?php echo $row['image'] ?>" height="70%"; alt="">
    </div>


      <div class="right" style="margin: 10vw 0vw 0 10vw;">
      <pre>CarName             : <?php echo $row['Carbrand']?> <?php echo $row['Carname']?></pre>  
      <br>
      <pre>Registration Number : <?php echo $row['Reg_no']?></pre>
      <br>
      <pre>Year                : <?php echo $row['Year1']?></p>
      <pre>Driven              : <?php echo $row['Kms']?></pre>
      <pre>Transmission        : <?php echo $row['Trans']?></pre>
      <pre>Number of owners    : <?php echo $row['Ownerno']?></pre>
      <pre>Location            : <?php echo $row['location']?></pre>
      <pre>Name of Owner       : <?php echo $row['name']?></pre>
      <pre>Contact Number      : <?php echo $row['phone']?></pre>

      </div>
    </div>
  </body>
</html>