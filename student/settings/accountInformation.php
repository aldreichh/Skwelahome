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

.btn{
    background-color: #FFB200;
    border: none;
    padding: 20px 50px;
    text-decoration: none;
    color: white;
    font-weight: bold;
    border-radius: 30px;
    margin-top: 40px;

    width: 40%;
    box-shadow: 7px 7px 15px  rgba(0,0,0,0.4);
    font-size: 25px;
}
.message{
    font-weight: bold;
    margin-top: 10px;
    font-size: 25px;
}
.cred{
    margin-top: -20px;
    color: #FF7B9C;
    font-size: 30px;
}
.details{
    font-size: 20px;
}
.infocontainer{
    font-size: 20px;
    margin-top: 20px;
}
.message{
    color: #FFB200;
    font-weight: bold;
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
        <div class="message">
            <a>Account Information</a>
        </div> 
        <?php

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "appname";
        $uname = $_SESSION["uname"];

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 

        $sql = "SELECT full_name, username, role FROM users WHERE username = '$uname'";
        $result = $conn->query($sql);

        // check if the number of rows in the result set is greater than 0 which means that record(s) exist
        if ($result->num_rows > 0) 
        {
            // output data of each row
            while($row = $result->fetch_assoc()) 
            {
                echo "<div class=container>";
                    echo "<div class='infocontainer'>";
                        echo "Name: ".$row['full_name']."<br>";
                        echo "Username: ".$row['username']."<br>";
                        echo "Registered as: ".$row['role']."<br>";
                    echo "</div>";
                echo "</div>";
            }
        } 
        else 
        {
            echo "0 results";
        }
        

        ?>    
        <div class="backbtn">
            <a href="../studentSettings.php"><button class="btn">Back</button></a><br>
        </div>

    </div>
</body>
</html>