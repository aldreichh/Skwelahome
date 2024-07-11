<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Skwelahome</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300&display=swap" rel="stylesheet">
</head>
<style>
    * {box-sizing: border-box; }
body {
    font-family: 'Poppins', sans-serif;
    margin: 0 auto;
}
.headercontainer {
    background-color: #FFF4CF;
    height: 70px;
    box-shadow: 0px 4px 4px rgba(0,0,0,0.3);
}
.headername a{
    float: left;
    margin-top: 10px;
    margin-left: 150px;
    font-size: 30px;
    color: #FFB200;
}
.logincontainer{
    padding-top: 35px;
    margin-left: 150px;
    border-radius: 25px;
    margin-top: 70px;
    text-align: center;
    width: 40%;
    height: 730px;
    background-color: #FFF4CF;
    box-shadow: 7px 7px 15px  rgba(0,0,0,0.4);

}
.title p1{
    font-size: 50px;
    font-weight: bold;
}
.title p2{
    font-size: 50px;
    color: #FFB200;
    font-weight: bold;
}
.title p3{
    font-size: 20px;
}
.ltc{
    margin-top: 10px;
}
.logindetails{
    margin-top: 20px;
}
.name {
    width: 60%;
    height: 60px;
    margin: 0 auto;
    border: auto;
    border-radius: 10px;
    border: none;
    padding-left: 10px;
    font-size: 20px;
}
.user {
    width: 60%;
    height: 60px;
    margin: 0 auto;
    border: auto;
    border-radius: 10px;
    border: none;
    padding-left: 10px;
    font-size: 20px;
    margin-top: 10px;
}
.email {
    width: 60%;
    height: 60px;
    margin: 0 auto;
    border: auto;
    border-radius: 10px;
    border: none;
    padding-left: 10px;
    font-size: 20px;
    margin-top: 10px;
}
.pass {
    width: 60%;
    height: 60px;
    margin: 0 auto;
    border: auto;
    border-radius: 10px;
    border: none;
    margin-top: 10px;
    padding-left: 10px;
    font-size: 20px;
}
.confirmpass {
    width: 60%;
    height: 60px;
    margin: 0 auto;
    border: auto;
    border-radius: 10px;
    border: none;
    margin-top: 10px;
    padding-left: 10px;
    font-size: 20px;
}
.secret {
    width: 60%;
    height: 60px;
    margin: 0 auto;
    border: auto;
    border-radius: 10px;
    border: none;
    margin-top: 10px;
    padding-left: 10px;
    font-size: 20px;
}
.signupbtn{
    background-color: #277BC0;
    border: none;
    padding: 20px 50px;
    text-decoration: none;
    color: white;
    font-weight: bold;
    border-radius: 30px;
    box-shadow: 7px 7px 15px  rgba(0,0,0,0.4);
    font-size: 25px;
    float: right;
}
.backbtn{
    float: left;
     background-color: #FFB200;
    border: none;
    padding: 20px 50px;
    text-decoration: none;
    color: white;
    font-weight: bold;
    border-radius: 30px;
    box-shadow: 7px 7px 15px  rgba(0,0,0,0.4);
    font-size: 25px;
}
.registeras {
    width: 25%;
    height: 45px;
    margin: 0 auto;
    border: auto;
    border-radius: 10px;
    border: none;
    margin-top: 10px;
    padding-left: 8px;
    float: left;
    margin-left: 20%;
    font-size: 25px;
}
.loginbtn{
    float: right;
    width: 20%;
    height: 80px;
    margin-top: 75px;
    margin-right: 20%;
}
.backcontainer{
    float: left;
    width: 20%;
    height: 80px;
    margin-top: 20px;
    margin-left: 20%;
}   
.uspas{
    font-size: 20px;
    padding-top: 35px;
    margin-left: 150px;
    border-radius: 25px;
    text-align: center;
    width: 40%;
}
.homephoto img{
    max-width: 35%;
    float:right;
    margin-top: -36%;
    margin-right: 8%;
    overflow: hidden;
}


</style>

<body>
    <div class="headercontainer">
		<div class="headername">
		<a>Skwelahome</a>
		</div>
	</div>
    <div class="logincontainer">
        <div class="title">
            <p1>Sign </p1><p2>Up</p2><br>
        </div>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="logindetails">
                <div class="userpass">
                    <input class="name" type="text" name="full_name" placeholder="Full Name" required/> <br>
                    <input class="user" type="text" name="uname" placeholder="Username" required/> <br>
                    <input class="email" type="text" name="emailadd" placeholder="Email Address" required/> <br>
                    <input class="pass" type="password" name="pword" placeholder="Password" required/> <br>   
                    <input class="confirmpass" type="password" name="confirmpword" placeholder="Confirm Password" required/> <br>  
                     <input class="secret" type="text" name="secretcode" placeholder="Secret Code" required/> <br>
                </div>

                <select name="register" id="register" class="registeras" required>
                    <option value=""disabled selected hidden>Register as</option>
                    <option>Teacher</option>
                    <option>Student</option>
                </select>

                <div class="loginbtn">
                    <input class="signupbtn"type="submit" value="Sign-up" name="btn"/> <br>
                </div>
            </div>
        </form>
        <div class="backcontainer">
            <a href="index.php"><button class="backbtn">Back</button></a><br>
        </div>
    </div>
    <div class="homephoto">
        <img src="images/homepagephoto.png" alt="Italian Trulli">
    </div>


    
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "appname";

    if(isset($_POST['btn'])&&isset($_POST['full_name'])&&isset($_POST['uname'])&&isset($_POST['pword'])&&isset($_POST['confirmpword'])&&isset($_POST['register'])&&isset($_POST['emailadd'])&&isset($_POST['secretcode'])){

        $conn = mysqli_connect($servername, $username, $password, $dbname);

        if ($conn->connect_error) 
        {
            die("Connection failed: " . $conn->connect_error);
        } 
        $name = $_POST['full_name'];
        $uname = $_POST['uname']; 
        $emailadd = $_POST['emailadd'];
        $pword = $_POST['pword']; 
        $confirmpword = $_POST['confirmpword'];
        $secretcode = $_POST['secretcode'];
        $register = $_POST['register'];

        if($pword == $confirmpword){
            $sql = "SELECT * FROM users WHERE username='$uname'";
            $sql2 = "SELECT * FROM users WHERE email_address ='$emailadd'";

            $result = $conn->query($sql) or die ("Query error: " . $conn->error);
            $result2 = $conn->query($sql2) or die ("Query error: " . $conn->error);

            if($result->num_rows > 0)
            {       
                echo "<div class='uspas'>";
                echo "Username already exists";
                echo "</div>";            
            }
            else if($result2->num_rows > 0)
            {
                echo "<div class='uspas'>";
                echo "Email address already exists";
                echo "</div>";   
            }



            else{
                $sql2 = "INSERT INTO users (full_name, username, email_address, password, role, secret_code) VALUES ('$name','$uname','$emailadd','$pword','$register','$secretcode')";


                if ($conn->query($sql2) === TRUE){
                echo "<script>location.href='success.php'</script>";
                    }
                else{
                    echo "Error: " . $sql . "<br>" . $conn->error;
            }
            $conn->close();
            } 
        }
        else{
            echo "<div class='uspas'>";
            echo "Password doesn't match";
            echo "</div>";   
        }
    }
    ?>


</body>
</html>