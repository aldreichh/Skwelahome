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
.deletebtn{
    background-color: #277BC0;
    border: none;
    padding: 20px 0px;
    text-decoration: none;
    color: white;
    font-weight: bold;
    border-radius: 30px;
    float: right;
    width: 50%;
    box-shadow: 7px 7px 15px  rgba(0,0,0,0.4);
    font-size: 25px;
    margin-top: 30px;
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
    margin-top: 30px;
}

.selection {
    width: 100%;
    height: 45px;
    margin: 0 auto;
    border: auto;
    border-radius: 10px;
    border: none;
    margin-top: 10px;
    padding-left: 5wwpx;
    float: left;
    font-size: 25px;
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
        <img src="../../images/teacherhomephoto.png" alt="Italian Trulli">
    </div>
    <div class="formContainer">
        <div class="Form">
            <?php 
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "appname";
            $uname = $_SESSION["uname"];
            $length = 0;

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 

            $sql = "SELECT subject_id, sub_name, created_by FROM subjects WHERE created_by = '$uname'";
            
            $result = $conn->query($sql);
            $array = array();

            if ($result->num_rows > 0) 
            {
                while($row = $result->fetch_assoc()) 
                {
                    $array[]=$row['sub_name'];
                }
                $length = count($array);
            }

            echo "<form method='post'>";
            echo "<select name='subject' id='subject' class='selection' required>";
                    echo "<option value='' disabled selected hidden>";
                    echo 'Select a Subject';
            if($length != 0)
            {
                
                for($i=0; $i<=$length-1;$i++)
                {
                        
                        echo "<option>";
                        echo $array[$i];
                        echo "</option>";

                }
                    echo "</option>";
               
            }
            echo "</select>";
            echo "<div class='deletebutton'>";
                    echo "<input class='deletebtn' type='submit' value='Delete' name='btn'/>";
                    echo "<br>";
                    echo "</div>"; 
            echo "</form>"; 


            if(isset($_POST['subject'])&&isset($_POST['btn']))
            {
                $selected = $_POST["subject"];
                $sql = "DELETE FROM subjects WHERE sub_name = '$selected' AND created_by = '$uname'";

                if ($conn->query($sql) === TRUE)
                    echo "<script>location.href='deleteSubject.php'</script>";
                else
                    echo "Error: " . $sql . "<br>" . $conn->error;


                echo $selected;
            }

            ?>
        </div>
        <div class="backcontainer">
            <a href="../teacherSettings.php"><button class="backbtn">Back</button></a><br>
        </div>
    </div>
</body>
</html>