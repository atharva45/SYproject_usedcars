<?php
    session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewpoint" content="with=device-width , initial-scale = 1.0">
    <link rel="stylesheet" href="home.css">

    <style>
        .image {
        opacity: 1;
        display: block;
        width: 100%;
        height:40vh;
        transition: .5s ease;
        backface-visibility: hidden;
        }
        
        
        .middle {
        transition: .5s ease;
        opacity: 0;
        position: absolute;
        top: 30%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        text-align: center;
        }

        
        .container:hover .image {
        opacity: 0.3;
        }

        .container:hover .middle {
        opacity: 1;
        }

        .text {
        background-color: #04AA6D;
        color: white;
        font-size: 16px;
        padding: 16px 32px;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <section class="navbar">
        <div class="navbar sticky">
            <div class="navbar-content">
              <a href="C:\KJ Somaiya\SY\SEM 4\Mini Project\Experiment Website\index.html"><i class="fa fa-fw fa-home"></i> Home</a>
              <a href="#companies"><i class="fa fa-fw fa-car"></i> Cars</a>
              <a href="#types"><i class="fa fa-fw fa-sort"></i>About Us</a>
              <a href="#news"><i class="far fa-fw fa-newspaper"></i> Contact Us</a>
              <a href="#news"><i class="far fa-fw fa-newspaper"></i> Login</a>
              <!-- <a href="#" id="company-name">Six Wheels</a> -->
            </div>
          </div>        
    </section>

    <h1 style="margin:5px 0px 90px 0px">BidYourCars</h1>



<div class="margin" style="margin: 10px;">
    <div class="row row-cols-1 row-cols-md-3 g-4">              
        <?php

            $fname1= $_SESSION['fname'];
            $location1= $_SESSION['location'];
            $phone1= $_SESSION['number'];
            $server = "localhost";
            $username = "root";
            $password = "";
            $database = "test";

            $conn = mysqli_connect($server, $username, $password, $database);
            $conn = new mysqli($server, $username, $password, $database);
            //only submit when click on submit
            // if(isset($_POST['submit']))
            // {
            //     $CarBrand = $_POST["CarBrand"];
            //     $CarBrand= strtoupper($CarBrand);
            //     $CarName = $_POST["CarName"];
            //     $CarName= strtoupper($CarName);
            //     $Year = $_POST["Year"];
            //     $Fuel = $_POST["Fuel"];
            //     $Trans = $_POST["trans"];
            //     $ownerno = $_POST["noofowners"];
            //     $kms = $_POST["kms"];
            //     $reg_no = $_POST['reg_no'];
            //     $reg_no= strtoupper($reg_no);
            //     $files = $_FILES["my_image"];
            //     $price= $_POST["price"];

            //     $filename= $files['name'];
            //     $fileerror= $files['error'];
            //     $filetmp= $files ['tmp_name'];

            //     //to check only jpg jpeg png input
            //     $fileext=explode('.',$filename);
            //     $filecheck= strtolower(end($fileext));  //55.jpg tp jpg

            //     $fileextstored=array('png','jpg','jpeg');

            //     if(in_array($filecheck,$fileextstored))
            //     {
            //         $destinationfile='uploads/'.$filename;
            //         move_uploaded_file($filetmp,$destinationfile);

            //         $sqlquery = "INSERT into addcar(Carbrand, Carname ,
            //          Year1 , Fuel , Trans , Ownerno , Kms , Reg_no, image, location , phone ,
            //          name , price) VALUES
            //         ('$CarBrand', '$CarName' , '$Year' , '$Fuel' , '$Trans' ,
            //          '$ownerno' , '$kms','$reg_no', '$destinationfile', '$location1','$phone1',
            //          '$fname1','$price' )";

            //         $query=mysqli_query($conn,$sqlquery);

                    $displayquery="SELECT * FROM addcar ORDER BY id DESC";
                    $querydisplay = mysqli_query($conn,$displayquery);

                    if (mysqli_num_rows($querydisplay) > 0) 
                    {
                        while ($result = mysqli_fetch_array($querydisplay)){
                            // $idno= $result['id'];
                            // $idn="individual.phpid=".$idno;
                            // echo $idn;
                        ?>
                                <div class="col">
                                    <a href="individual.php?pid=<?php echo $result['id']; ?>" style="text-decoration:none; color:black;">
            
                                    <div class="card" >
                                        <div class="container">
                                            <img src="<?php echo $result['image']?>" class="image" class="card-img-top" alt="...">
                                            <div class="middle">
                                                <div class="text">BUY
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                            </div>
                        <?php
                        }
                    } 
                
            ?>
                <!-- else
                {
                    echo '<script>alert("File should be jpg, jpeg, png")</script>';
                    //should not redirect 
                } -->
            

</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>