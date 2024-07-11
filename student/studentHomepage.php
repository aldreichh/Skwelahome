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
.addsub{
    background-color: #277BC0;
    border: none;
    color: white;
    padding: 30px 130px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 40px;
    border-radius: 35px;
    box-shadow: 7px 7px 15px  rgba(0,0,0,0.4);
    width: 550px;
    font-weight: bold;
}
.mysub{
    background-color: #277BC0;
    border: none;
    color: white;
    padding: 30px 130px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 40px;
    border-radius: 35px;
    box-shadow: 7px 7px 15px  rgba(0,0,0,0.4);
    width: 550px;
    margin-top: 35px;
    font-weight: bold;
}
.settings{
    background-color: #277BC0;
    border: none;
    color: white;
    padding: 30px 130px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 40px;
    border-radius: 35px;
    box-shadow: 7px 7px 15px  rgba(0,0,0,0.4);
    width: 550px;
    margin-top: 35px;
    font-weight: bold;
}
.logout{
    background-color: #277BC0;
    border: none;
    color: white;
    padding: 30px 130px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 40px;
    border-radius: 35px;
    box-shadow: 7px 7px 15px  rgba(0,0,0,0.4);
    width: 550px;
    margin-top: 35px;
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
        <img src="../images/studenthomephoto.png" alt="Italian Trulli">
    </div>
    <div class="homeButtons">
        <a href="addSubject.php"><button class="addsub">Join Class</button></a><br>
        <a href="mySubjects.php"><button class="mysub">My Subjects</button></a><br>
        <a href="studentSettings.php"><button class="mysub">Settings</button></a><br>
        
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="post">
            <a type="submit"><button class="logout" name="logoutbtn">Log-out</button></a><br>
        </form>
    </div>

    <?php 
    if(isset($_POST['logoutbtn'])){
        session_destroy();
        echo "<script>location.href='../index.php'</script>";
    }
    ?>

</body>
</html>