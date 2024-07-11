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
    margin-top: 160px;
    text-align: center;
    width: 40%;
    height: 500px;
    background-color: #E8E9ED;
    box-shadow: 7px 7px 15px  rgba(0,0,0,0.4);
}
.title p1{
    font-size: 50px;
    font-weight: bold;
}
.title p2{
    font-size: 50px;
    color: #FF7B9C;
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
    background-color: #607196;
    border: none;
    padding: 20px 50px;
    text-decoration: none;
    color: white;
    font-weight: bold;
    border-radius: 30px;
    margin-top: 50px;
    float: right;
    margin-right:20%;
    box-shadow: 7px 7px 15px  rgba(0,0,0,0.4);
    font-size: 25px;
}
.register{
    margin-left:20.2%;
    margin-top: 15px;
    float: left;
    font-weight: bold;
    font-size: 25px;
}
.register a:link{
    color: black;
}
.register a:visited{
    color: black;
}
.container{
    text-align: center;
    width: 90%;
    margin: 0 auto;
    margin-top: 0px;
}
.subjectbtn{
    text-align:center ;
    background-color: #277BC0;
    color: white;
    width: 85%;
    height: 200px;
    margin-top: 25px;
    border-radius: 30px;
    box-shadow: 7px 7px 15px  rgba(0,0,0,0.4);
    font-size: 50px;
    border: none;
    text-decoration: none;
    font-weight: bold;
}
.subjectbtn a:hover{
    color: green;
}
.iconcontainer{
    background-color: #E8E9ED;
    height: 700px;
    width: 50%;
    margin: 0 auto;
    margin-top: 50px;
    overflow: auto;
    border-radius: 30px;
    box-shadow: 7px 7px 15px  rgba(0,0,0,0.4);
}
.backcontainer{
    width: 50%;
    height: 80px;
    margin: 0 auto;
    margin-top: 15px;
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
.messagecontainer{
    text-align: center;
    margin-top: 100px;
    font-size: 30px;
}

</style>

<body>
    <div class="headercontainer">
		<div class="headername">
		<a>Skwelahome</a>
		</div>
	</div>
    <div class="iconcontainer">
    <?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "appname";
    $uname = $_SESSION["uname"];
    $a = 0;
    $length = 0;

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    // SQL to select records from Profile table
    $sql = "SELECT subject_id, student_username FROM student_subjects WHERE student_username = '$uname'";
    
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            $array[] = $row['subject_id'];
        }
        $length = count($array);
    }
    else 
    {
        echo "<div class='messagecontainer'>";
            echo "You are not enrolled in any subject.";
        echo "</div>";        //echo "0 results";
    }
    $sql2 = "SELECT subject_id, sub_name FROM subjects";
    $result2 = $conn->query($sql2);

        while($row2 = $result2->fetch_assoc()) 
        {
            for($i = 0; $i < $length; $i++)
            {
                if($row2['subject_id']==$array[$i]){
                    echo "<form method='post'>";  
                        echo "<div class='container'>";
                            echo '<button name="subjectbtn" class="subjectbtn" value='.$row2["subject_id"].' type="submit">'.$row2["sub_name"].'</button>';
                        echo "</div>";   
                    echo "</form>";  
                    $a += 1;
                }
            }
            if($a==$length)
            {
                break;
            }
        }
        if(isset($_POST["subjectbtn"]))
        {
            $selected = $_POST["subjectbtn"];
            $_SESSION["subject"] = $selected;
            echo "<script>location.href='studentAnnouncement.php'</script>"; 
        }

         
    

    $conn->close();
    

    ?>
    </div>
    <div class="backcontainer">
        <a href="studentHomepage.php"><button class="backbtn">Back</button></a><br>
    </div>
</body>
</html>