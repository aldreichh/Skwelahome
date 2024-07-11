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
    background-color: #E8E9ED;
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
    float: left;
    width: 50%;
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
    color: #FFB200;
    font-size: 30px;
}
.details{
    font-size: 20px;
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
        <img src="../images/teacherhomephoto.png" alt="Italian Trulli">
    </div>
    <div class="formContainer">
        <div class="message">
            <a>Subject has been successfully created!</a>
        </div>  
        <?php
        $subname = $_SESSION['subname'];
        $pword = $_SESSION['password']; 
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "appname";
        $uname = $_SESSION["uname"];

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 

        $sql = "SELECT subject_id, sub_name, sub_password, created_by, created_on FROM subjects WHERE created_by = '$uname' AND sub_name = '$subname'";
    
        $result = $conn->query($sql);

        if ($result->num_rows > 0) 
        {               
            while($row = $result->fetch_assoc()) 
            {
                $subid = $row['subject_id'];
                $date = $row['created_on'];
            }
        } 
        echo "<div class=cred>";
            echo "<br>"."Subject Information";
        echo "</div>";

        echo "<div class='details'>";
            echo "Subject: ".$subname."<br>";
            echo "Subject Code: ".$subid."<br>";
            echo "Password: ".$pword."<br>";
            echo "Created on: ".$date;
        echo "</div>";
        ?>     
        <div class="backbtn">
            <a href="teacherHomepage.php"><button class="btn">Back</button></a><br>
        </div>

    </div>
</body>
</html>