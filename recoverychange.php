<?php
session_start(); 
?>
<?php
$uname = $_SESSION["uname"];
if($uname == ""){
    echo "<script>location.href='../index.php'</script>";
}
?>
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
    margin-top: 115px;
    text-align: center;
    width: 40%;
    height: 450px;
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
.password {
    width: 60%;
    height: 60px;
    margin: 0 auto;
    margin-top: 20px;
    border: auto;
    border-radius: 10px;
    border: none;
    padding-left: 10px;
    font-size: 20px;
}
.confirmpassword {
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
.code {
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
.confirmbtn{
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
    margin-top: 23px;
    margin-right: 20%;
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
    margin-top: -25%;
    margin-right: 8%;
    overflow: hidden;
}
.uspas2{
    font-size: 20px;
    padding-top: px;
    margin-left: 150px;
    border-radius: 25px;
    text-align: center;
    width: 40%;
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
            <p1>Account </p1><p2>Recovery </p2><br>
        </div>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

            <input class="password" type="password" name="pword" placeholder="New Password" required/> <br>    

            <input class="confirmpassword" type="password" name="confirmpword" placeholder="Confirm Password" required/> <br> 
        <div class="confirmbutton">
        <input class="confirmbtn"type="submit" value="Confirm" name="btn"/> <br>
        </div>  
        </form>
        <div class="backcontainer">
            <a href="recover.php"><button class="backbtn">Back</button></a><br>
        </div>
    </div>
        </form>
    <div class="homephoto">
        <img src="images/homepagephoto.png" alt="Italian Trulli">
    </div>


   <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "appname";
    $uname = $_SESSION["uname"];

    if(isset($_POST['pword']) && isset($_POST['confirmpword']))
    {
        $conn = new mysqli($servername, $username, $password, $dbname);

        $pword = $_POST['pword'];
        $confirm = $_POST['confirmpword'];

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 

        $sql = "SELECT user_id, username, password FROM users WHERE username = '$uname'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) 
        {
            if($pword == $confirm){
                $sql = "
                UPDATE users 
                SET password = '$pword' 
                WHERE username = '$uname'";

                if ($conn->query($sql) === TRUE)
                {   
                    echo "<script>location.href='recoverysuccess.php'</script>";
                }
                else
                    echo "Error: " . $sql . "<br>" . $conn->error;
            }
            else
            {
                echo "<div class='uspas2'>";
                echo "<br>"."Password doesn't match!";
                echo "</div>";
            }
            
        } 
        
    }
    ?>


</body>
</html>