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
.subject{
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
.createbtn{
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
        <div class="Form">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <input class="subject" type="text" name="subname" placeholder="Subject Name" required/> <br>

            <input class="password" type="password" name="pword" placeholder="Password" required/> <br>    
        </div>

        <div class="createbutton">
            <input class="createbtn"type="submit" class= "createbutton"value="Create" name="btn"/> <br>
        </div>
        </form>
        <div class="backcontainer">
            <a href="teacherHomepage.php"><button class="backbtn">Back</button></a><br>
        </div>
    </div>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "appname";
    $uname = $_SESSION["uname"];

    if(isset($_POST['subname']) && isset($_POST['pword']))
    {

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        $subname = $_POST['subname'];
        $pword = $_POST['pword'];

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 

        //sql to insert data
        $sql = "INSERT INTO subjects (sub_name, sub_password, created_by, created_on)
               VALUES ('$subname','$pword', '$uname', CURRENT_TIMESTAMP)";

        if ($conn->query($sql) === TRUE)
        {   
            $_SESSION['subname'] = $subname;
            $_SESSION['password'] = $pword;
            echo "<script>location.href='addSuccess.php'</script>";
        }
        else
            echo "Error: " . $sql . "<br>" . $conn->error;

        // Close the database connection
        $conn->close();
    }
    ?>
</body>
</html>