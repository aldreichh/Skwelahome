<?php
session_start(); 
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
    margin-top: 160px;
    text-align: center;
    width: 40%;
    height: 500px;
    background-color: #FFF4CF;
    box-shadow: 7px 7px 15px rgba(0,0,0,0.4);
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
    font-size: 30px;
}
.ltc{
    margin-top: 10px;
}
.logindetails{
    margin-top: 35px;
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
.btn{
    background-color: #277BC0;
    border: none;
    padding: 20px 50px;
    text-decoration: none;
    color: white;
    font-weight: bold;
    border-radius: 30px;
    margin-top: 25px;
    float: right;
    margin-right:20%;
    box-shadow: 7px 7px 15px  rgba(0,0,0,0.4);
    font-size: 25px;
}
.register{
    margin-left:21%;
    margin-top: 10px;
    float: left;
    font-size: 25px;
}
.register a:link{
    color: black;
}
.register a:visited{
    color: black;
}
.register a:hover{
    color: #277BC0;
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
    margin-top: -29%;
    margin-right: 8%;
    overflow: hidden;
}
.recover{
    margin-right:20%;
    margin-top: 10px;
    float: right;
    font-size: 25px;
}
.recover a:link{
    color: black;
}
.recover a:visited{
    color: black;
}
.recover a:hover{
    color: #277BC0;
}

</style>

<body>
    <div class="headercontainer">
		<div class="headername">
		<a>Skwelahome</a>
		</div>
	</div>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <div class="logincontainer">
        <div class="title">
            <p1>Welcome to </p1><p2>Skwelahome</p2><br>
            <p3 class="ltc">Login to continue</p3>
        </div>
        <div class="logindetails">
            <div class="userpass">
                <input class="user" type="text" name="uname" placeholder="Username" required/> <br>
                <input class="pass" type="password" name="pword" placeholder="Password" required/> <br>    
            </div>
            <div class="register"><a href="register.php" style="text-decoration:none"> Register </a>
            </div>
            <div class="recover"><a href="recover.php" style="text-decoration:none"> Forgot password? </a>
            </div>
            <div class="loginbtn">
                <input class="btn"type="submit" class= "loginbutton"value="Log-in" name="btn"/> <br>
            </div>
        </div>
    </div>


    </form>
    <div class="homephoto">
        <img src="images/homepagephoto.png" alt="Italian Trulli">
    </div>
    <?php
    
    if($_POST && isset($_POST['uname']) && isset($_POST['pword']))
    {
        $uname = $_POST['uname'];
        $pword = $_POST['pword'];

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "appname";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) 
            {
                die("Connection failed: " . $conn->connect_error);
            } 

        $sql = "SELECT user_id, full_name, username, password, role FROM users WHERE username='$uname' AND password='$pword'";

        $result = $conn->query($sql) or die ("Query error: " . $conn->error);

        if($result->num_rows > 0)
        {       
            while($row = $result->fetch_assoc()) 
            {
                if($row['role']=='Teacher')
                {
                    $_SESSION["uname"] = "$uname";
                    $_SESSION["full_name"] = $row['full_name'];
                    echo "<script>location.href='teacher/teacherHomepage.php'</script>";
                }
                else
                {
                    $_SESSION["uname"] = "$uname";
                    $_SESSION["full_name"] = $row['full_name'];
                    echo "<script>location.href='student/studentHomepage.php'</script>";
                }
            }

        }
        else
        {
            echo "<div class='uspas'>";
            echo "<br>"."Username or Password doesn't exists";
            echo "</div>";
        }
    }
        
    ?>
</body>
</html>