<?php
 session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        
        @import url("https://fonts.googleapis.com/css2?family=Poppins&display=swap");

        
            * {
                margin: 0;
                padding: 0;
                font-family: "Poppins", sans-serif;

            }

            .loginpage {
                padding: 9vh 30vw 9vh 30vw;
                background: #e5e5e5;
                background-color: #ded4d4;
                background-image: linear-gradient(180deg, #ded4d4 0%, #6284FF 50%, #f47070 100%);
            
                /* background-color: rgba(0, 89, 141, 0.096); */
  /* background-color: #d8d2d2; */
                height: 170vh;
            }

            .container {
                /* margin: 9vh auto; */
                /*width: 25rem;                height: 30rem; */
                width: 40vw;
                height: 130vh;
                border-radius: 10px;
                border: 0.125rem solid rgb(100, 100, 222);
                background-color: rgb(170, 170, 170);

            }
            .button {
                border: none;
                /* color: rgb(0, 107, 168); */
                text-align: center;
                background-color:rgba(0, 89, 141, 0.651);
                text-decoration: none;
                display: inline-block;
                transition-duration: 0.4s;
                cursor: pointer;
                border-radius: 30px;
            }
            .button:hover {
                background-color: #4CAF50;
                color: white;
            }

        
    </style>
</head>
<body>

<?php
if(isset($_POST['submit']))
{
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "test";

    $conn = mysqli_connect($server, $username, $password, $database);
    // Create connection
    $conn = new mysqli($server, $username, $password, $database);


    $fname=$_POST['f_name'];
    $lname=$_POST['l_name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $location=$_POST['Location'];
    $password=$_POST['password'];
    $password1=$_POST['password1'];

    $pass =password_hash($password, PASSWORD_BCRYPT);
    $pass1 = password_hash($password1, PASSWORD_BCRYPT);

    $emailquery="select * from signup where email='$email'";
    $query= mysqli_query($conn,$emailquery);
    $emailcount= mysqli_num_rows($query);

    if($emailcount>0)
    {?>
        <script>
            alert("email already exists");
        </script>
        <?php
    }
    else{
        if($password === $password1)
        {
            $insertquery="INSERT INTO `signup`(Firstname, 
            lastname, location, phone, email, password, 
            cpassword)
             VALUES ('$fname','$lname','$location',
            '$phone','$email','$pass','$pass1')";

            $iquery= mysqli_query($conn,$insertquery);

            if($iquery)
            {

                ?>
                <script>
                    alert("Sign Up Successfull");
                </script>
                <?php
            }else
            {
                ?>
                <script>
                    alert("failed");

                </script>
                <?php
            }

        }
        else{
            echo "Password are different";
        }
    }
}

?>
    <div class="loginpage">
        <div class="container">

            <p style="margin: 2vh 0 0 2vw; font-size:7vh; color:rgb(0, 107, 168);">BidYourCars</p>
            <!-- <p style="margin:4% 10% 0% 7%;">Sell Your car at the right price</p> -->
            <form name="myform" action="" method="post" onsubmit="return validate()";>

                <p div=signup-text"
                    style="padding: 3vh 4vh; font-size: 5vh;">
                    SignUp
                </p>


                
                <div class="name-text">              
                    <div class="FName" style="display: flex; flex-direction: row;">
                        <div class="firstname-text" style="margin: 2vh 0 0 2vw; ">
                            <span
                                style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:3.9vh; color:rgb(0, 107, 168);">
                                First Name
                            </span>
                        </div>


                        <div class="Lname-text" style="margin: 2vh 0 0 11vw; ">
                            <span
                                style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:3.9vh; color:rgb(0, 107, 168);">
                                Last Name
                            </span>
                        </div>
                    </div>
                </div>

                <div class="name-input">
                        <div class="name-input"  style="display: flex;">
                            <div class="firstname-input" style="margin:1vh 0 0 2vw;">
                                <input type="text" name="f_name" required
                                    style="width:12vw; height: 7vh;border: 1px solid white;  border-radius: 0.7rem;padding-left:1.5%;"
                                    placeholder="John" >
                            </div>

                            <div class="lastName-input" style="margin:1vh 0 0 7vw;">
                                <input type="text" name="l_name" required
                                    style="width:12vw; height: 7vh;border: 1px solid white;  border-radius: 0.7rem;padding-left:1.5%;"
                                    placeholder="Smith" >
                            </div>
                        </div>
                </div>

                <div class="Location_phone-text" style="display: flex;" >
                    <div class="location-text" style="margin: 2vh 0 0 1.9vw; ">
                        <span
                            style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:3.9vh; color:rgb(0, 107, 168);">
                            Location
                        </span>
                    </div>


                    <div class="Phone-text" style="margin: 2vh 0 0 13vw; 
                        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:3.9vh; 
                        color:rgb(0, 107, 168);">
                        Phone
                    </div>
                </div>


                <div class="location_phone-input" style="display: flex;">

                    <div class="location-input" style="margin:1vh 0 0 2vw;">
                        <select name="Location" id="location" required style="width: 12.5vw; height: 7.5vh;
                        border: 0.3vh solid rgb(180, 176, 176); border-radius: 0.7vw; 
                         padding-left: 0.5vw; font-size: 2.3vh; cursor:pointer; color:rgb(140,140,140);">


                            <option value="" disabled selected hidden style="background-color: rgba(128, 126, 126, 0.139); font-size: 2.2vh; color:gray;">Select Location</option>
                            <option value="Mumbai" style="background-color: rgba(222, 237, 245, 0.53); font-size: 2.2vh; font-weight: 200; color: black; ">Mumbai</option>
                            <option value="Pune" style="background-color: rgba(128, 126, 126, 0.139); font-size: 2.2vh; color:black; font-weight: 200;">Pune</option>
                                
                        </select>
                    </div>

                    <div class="phoneno-input" style="margin:1vh 0 0 6.5vw;">
                        <input type="number" name="phone" required
                            style="width:12vw; height: 7vh;border: 1px solid white;  border-radius: 0.7rem;padding-left:1.5%;"
                            placeholder="1234567890" >
                    </div>
                </div>



                <div class="email">
                    <div class="emailid-text" style="margin: 2vh 0 0 1.9vw; ">
                        <span
                            style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:3.9vh; color:rgb(0, 107, 168);">
                            Email
                        </span>
                    </div>

                    <div class="emailid-input" style="margin:1vh 0 0 1.9vw;">
                        <input type="email" name="email" required
                            style="width:90%; height: 7vh;border: 1px solid white;  border-radius: 0.7rem;padding-left:1.5%;"
                            placeholder="email@mail.com" >
                    </div>
                </div>

                <div class="password">
                    <div class="password-text" style="margin: 5vh 0 0 1.9vw;">
                        <span
                            style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 3.9vh; color:rgb(0, 107, 168);">
                            Password
                        </span>

                    </div>

                    <div class="password-input" style="margin:1vh 0 0 1.9vw;">
                        <input type="password" name="password" required
                            style="width:90%; height: 7vh;  border-radius: 0.7rem; border: 1px solid rgb(0, 107, 168);  padding-left:1.5%;"
                            placeholder="6-20(a-z,A-Z,1-9)">
                    </div>
                </div>

                <div class="password1">
                    <div class="password-text" style="margin: 5vh 0 0 1.9vw;">
                        <span
                            style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 3.9vh; color:rgb(0, 107, 168);">
                            Re-enter Password
                        </span>

                    </div>

                    <div class="password-input" style="margin:1vh 0 0 1.9vw;">
                        <input type="password" name="password1" required
                            style="width:90%; height: 7vh; border: 1px solid white;  border-radius: 0.7rem; padding-left:1.5%;"
                            placeholder="6-20(a-z,A-Z,1-9)">
                    </div>
                </div>

                <!-- <button type="submit" style="width: 15%; height:4vh; margin: 1.9vw; font-size: 2vh; background-color: rgb(0, 107, 168); color: azure;">Submit</button> -->
                <button type="submit" class="button" name="submit" style="width: 7vw; height:7vh; margin: 7vh 1.9vw; font-size: 2vh;" onclick="return validate()">LogIn</button>
            </form>

        </div>
    </div>
</body>

<script>

    function validate(){
        var email = document.myform.email.value;
        var password = document.myform.password.value;
        var password1=document.myform.password1.value;
        var phone=document.myform.phone.value;

        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        var passw = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;

        
        if(email == null || email == "") {
            alert("Email can't be blank");
            return false;
        }

        else if(!filter.test(email)) {
            alert('Please provide a valid email address');
            return false;
        }

        else if(!password.match(passw)) {
            alert('Password should have 6-20 characters. Min 1 lowercase, 1uppercase, 1 digit')
            return false;
        }
        else if(password!=password1)
        {
            alert("Both Password Should Match")
            return false;
        }
        else if(phone.length!=10)
        {
            alert("Please Check Mobile Number");
            return false;
        }
    }

</script>

</html>