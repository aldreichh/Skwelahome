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
* {
    box-sizing: border-box; 
}
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
.homeButtons{
    padding: 100px 100px;
    float: right;
    margin-top: 90px;
    margin-right: 100px
}
.formContainer{
    background-color: #FFF4CF;
    width: 600px;
    padding: 35px 40px;
    margin-top: 200px;
    float: right;
    margin-right: 150px;
    text-align: center;
    border-radius: 30px;
    box-shadow: 7px 7px 15px  rgba(0,0,0,0.4);
}
.oldpass{
    height: 60px;
    margin: 0 auto;
    width: 100%;
    border: auto;
    border-radius: 10px;
    border: none;
    padding-left: 15px;
    margin-top: 10px;
    font-size: 20px;
}
.password{
    height: 60px;
    margin: 0 auto;
    width: 100%;
    border: auto;
    border-radius: 10px;
    border: none;
    padding-left: 15px;
    margin-top: 25px;
    font-size: 20px;
}
.confirmpassword{
    height: 60px;
    margin: 0 auto;
    width: 100%;
    border: auto;
    border-radius: 10px;
    border: none;
    padding-left: 15px;
    margin-top: 25px;
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
    margin-top: 30px;
    float: right;
    width: 50%;
    box-shadow: 7px 7px 15px  rgba(0,0,0,0.4);
    font-size: 25px;
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
    width: 230px;
}
.backcontainer{
    float: left;
    height: 80px;
    margin-top: 5px;
}   
.uspas{
    font-size: 25px;
    text-align: center;
    float: right;
    margin-top: 600px;
    margin-right: -430px;
    color: red;
}
.uspas2{
    font-size: 25px;
    text-align: center;
    float: right;
    margin-top: 600px;
    margin-right: -460px;
    color: red;
}
.homephoto img{
    width: 45%;
    float:left;
    margin-top: 140px;
    margin-left:140px;
}

</style>

<body>
    <div class="headercontainer">
        <div class="headername">
        <a>Skwelahome</a>
        </div>
    </div>
    <div class="homephoto">
        <img src="../../images/studenthomephoto.png" alt="Italian Trulli">
    </div>
    <div class="formContainer">
        <div class="Form">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <input class="oldpass" type="password" name="oldpass" placeholder="Old Password" required/> <br>

            <input class="password" type="password" name="pword" placeholder="New Password" required/> <br>    

            <input class="confirmpassword" type="password" name="confirmpword" placeholder="Confirm Password" required/> <br>   
        </div>

        <div class="confirmbutton">
            <input class="confirmbtn"type="submit" value="Confirm" name="btn"/> <br>
        </div>
        </form>
        <div class="backcontainer">
            <a href="../studentSettings.php"><button class="backbtn">Back</button></a><br>
        </div>
    </div>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "appname";
    $uname = $_SESSION["uname"];

    if(isset($_POST['oldpass']) && isset($_POST['pword']) && isset($_POST['confirmpword']))
    {
        $conn = new mysqli($servername, $username, $password, $dbname);

        $oldpass = $_POST['oldpass'];
        $pword = $_POST['pword'];
        $confirm = $_POST['confirmpword'];

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 

        $sql = "SELECT user_id, username, password FROM users WHERE username = '$uname' AND password = '$oldpass'";
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
                    $_SESSION['uname'] = $uname;
                    $_SESSION['password'] = $pword;
                    echo "<script>location.href='changedSuccessful.php'</script>";
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
        else
        {
            echo "<div class='uspas'>";
            echo "<br>"."Incorrect Password";
            echo "</div>";
        }
    }
    ?>
</body>
</html>