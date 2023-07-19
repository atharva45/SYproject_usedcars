<?php
 session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SellAnyCar</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Mulish:wght@300&display=swap');
        *{
            margin: 0;
            padding: 0;
            font-family: 'Mulish', sans-serif;
        }

        .head{
            width: 100%;
            height: 320vh;
            background-color: #ded4d4;
            background-image: linear-gradient(180deg, #ded4d4 0%, #6284FF 50%, #f47070 100%);
            position: relative;
            z-index: 1;
            /* background-color: rgb(156, 156, 156);    */
            
        }

        nav{
            margin: 0;
            padding: 0;
            width: 100vw;
            height: 15vh;
            display: flex;
            justify-content: space-around;
            align-items: center;
            position: absolute;
        }

        .logo a{
            color: black;
            text-decoration: none;
            font-size: 5vh;
            /* text-transform: uppercase; */
        }

        .menu ul li{
            list-style: none;
            display: inline-block;
            
            text-transform: capitalize;

        }

        .menu ul li a{
            margin:0 2vw 0 2vw;
            font-size: 1.2vw;
            text-decoration: none;
            color: black;
            text-transform: capitalize;
        }

        .active,ul li:hover{
            border-top: 2px solid #5dade2;
            border-bottom: 2px solid #5dade2;
            transition: 0.3s;
            font-weight: 700;
        }

        .login_btn
        {
            background-color:#5dade2 ;
            font-weight: 500;
            width: 10vw;
            height: 6vh;
            border: 0.1vw solid black;
            border-radius: 0.3vw;
            text-decoration: none
            ;

            list-style: none;

        }

        .login_btn li a{
            color: white;
            text-decoration: none;
        }

        .login_btn li{
            margin-top: 1vh; 
            margin-left: 0.7vw;
            color:white;
        }

        .login_btn li a:hover{
            border-top: 2px solid #0d2678;
            transition: 0.3s;
            color:white;

            
        }

        .login_btn:hover{
            background-color: green;
            transition: 0.4s;
        }

        .text1{
            position: absolute;
            top: 15%;
            left:50%;
            transform: translate(-50%,-50%);
            text-align: center;
        }

        .text1 h1{
            color: #fff;
            font-size: 5vw;
            font-weight: 900;
            text-transform: capitalize;
            width: 60vw;
        }

        .text1 h2{
            font-size: 2vw;
            font-weight: 600;
            text-indent: 11vw;
        }

        .text1 h2::before
        {
            content:"";
            width: 15vw;
            height: 0.01vw;
            border: 0.15vw solid #fff;
            position: absolute;
            left: 0.1vw;
            bottom: 0;
            margin-bottom: 0.9vw;
        }

        .container::before
        {
            content:"";
            width: 15vw;
            height: 0.01vw;
            border: 0.15vw solid #910000;
            position: absolute;
            right: 10vw;
            margin-top: 31vh;
            align-items: right;
        }

        .fa-instagram {
        background: #ba2c0c;
        color: white;
        }
        .fa-facebook {
        background: #3B5998;
        color: white;
        }

        .fa-twitter {
        background: #55ACEE;
        color: white;
        }

        .fa-snapchat-ghost {
        background: #fffc00;
        color: white;
        text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
        }

        .fa:hover {
            opacity: 0.7;
        }

        .fa {
            padding: 1.5vw;
            width: 5vw;
            text-align: center;
            text-decoration: none;
            /* margin: 0.5vw ; */
            margin-left: 8.8vw;
        }

    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <div class="head">
        <nav class="navbar">
            <div class="logo" >
            <a href="index.html" target="_blank">  <img src="logo.png" width="50vw" style="padding-right: 2vw;" alt="">SellAnyCar</a>
            </div>
            
            <div class="menu">
                <ul>
                    
                    <li> <a href="" class="active">Home</a></li>
                    <li> <a href="" >BUY</a></li>
                    <?php

                        if(isset($_SESSION['fname']))
                        {          
                            echo "<li><a href='addacar.php'>Sell</a></li>";

                        }
                    ?>

                    <li> <a href="" >ContactUs</a></li>
                    <li> <a href="" >About Us</a></li>
                </ul>
            </div>
            <div class="login_btn" id=loginbtn>

            
            <?php 
            if(isset($_SESSION['fname']))
            {          
                echo "<li><a href='logout.php'>Logout ".$_COOKIE['name']."</a></li>";

            }
            else
            {
                echo "<li><a href='login.php'>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                Login&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a></li>";
            }
            ?>
            </div>
        
        </nav>

        <div class="text1">
            <h1> <i> Get your dream car at the best price</i></h1>
            <h2> <i> India's number ONE marketplace for cars</i></h2>
            
        </div>


        <div class="container" style="padding: 100vh 0vw 0 0vw; display: flex;">
            
            <div class="image1" style="padding-left: 0vw;">
                <img src="usedcar1.jpg"  width="110%" alt="">
            </div>
            
            <span class="text2" style="font-size: 5vw; margin:10vh 0vw 0 5vw; font-weight: 800; color: #910000;" >
                <i> Choose From Wide Range Of Cars</i>
            </span>
        </div>
        
        <div class="backgroundimg">
                <img src="bgimg-removebg.png" style="padding: 30vh 10vw 0 14vw;" width=80% alt="">
        </div>


    <div class="footer" style="margin-top: 20vh;">
        
    <hr>
    <img src="/logo.png" height=90vh; style="margin:10vh 0 0 45.3vw;"  alt="">
    <br>
    <br>
            
            <div class="logos"  style="display: flex; flex-direction: row; margin: 0 10vw 0 10vw; ">
                <a href="#" class="fa fa-instagram"  style=""></a>
                <a href="#" class="fa fa-facebook" style=""></a>
                <a href="#" class="fa fa-twitter" style=""></a>
                <a href="#" class="fa fa-snapchat-ghost" style=""></a>
            
            </div>
    <br>
    <br>
    <hr>

    </div>

    <span style="font-weight:900; font-size: 2vw; padding: 0vw 0 0 42vw;">SellAnyCar &copy</span>
    </div>

    

<?php
    echo $_COOKIE['name'];
?>
</body>
</html>