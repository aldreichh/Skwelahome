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
.bodycontainer{
    width: 80%;
    height: 700px;
    margin: 0 auto;
    margin-top: 60px;
}
.selectioncontainer{

    height: 100%;
    width:30% ;
    float: left;
}
.leaderboardcontainer{
    background-color: #E8E9ED;
    height: 110%;
    width: 70%;
    float: left;
    border-radius: 50px;
    box-shadow: 7px 7px 15px  rgba(0,0,0,0.4);
}
.addcontainer{

    height: 30%;
    width: 70%;
    float: left;
}
.announcements{
    background-color: #277BC0;
    border: none;
    padding: 40px 60px;
    text-decoration: none;
    color: white;
    font-weight: bold;
    border-radius: 40px;
    width: 90%;
    float: left;
    margin-left: 20px;
    box-shadow: 7px 7px 15px  rgba(0,0,0,0.4);
    font-size: 35px;
}
.assignments{
    background-color: #277BC0;
    border: none;
    padding: 40px 60px;
    text-decoration: none;
    color: white;
    font-weight: bold;
    border-radius: 40px;
    width: 90%;
    float: left;
    margin-top: 20px;
    margin-left: 20px;
    box-shadow: 7px 7px 15px  rgba(0,0,0,0.4);
    font-size: 35px;
}
.lectures{
    background-color: #277BC0;
    border: none;
    padding: 40px 60px;
    text-decoration: none;
    color: white;
    font-weight: bold;
    border-radius: 40px;
    width: 90%;
    float: left;
    margin-top: 20px;
    margin-left: 20px;
    box-shadow: 7px 7px 15px  rgba(0,0,0,0.4);
    font-size: 35px;
}
.groupchat{
    background-color: #277BC0;
    border: none;
    padding: 40px 60px;
    text-decoration: none;
    color: white;
    font-weight: bold;
    border-radius: 40px;
    width: 90%;
    float: left;
    margin-top: 20px;
    margin-left: 20px;
    box-shadow: 7px 7px 15px  rgba(0,0,0,0.4);
    font-size: 35px;
}
.leaderboard{
    background-color: #302CD0;
    border: none;
    padding: 40px 60px;
    text-decoration: none;
    color: white;
    font-weight: bold;
    border-radius: 40px;
    width: 90%;
    float: left;
    margin-top: 20px;
    margin-left: 20px;
    box-shadow: 7px 7px 15px  rgba(0,0,0,0.4);
    font-size: 35px;
}
.leaderboard2{
    text-align: center;
    font-size: 60px;
    font-weight: bold;
    color: #FFB200;
}
.back{
    background-color: #FFB200;
    border: none;
    padding: 20px 10px;
    text-decoration: none;
    color: white;
    font-weight: bold;
    border-radius: 25px;
    width: 60%;
    float: right;
    margin-top: 20px;
    margin-right: 25px;
    box-shadow: 7px 7px 15px  rgba(0,0,0,0.4);
    font-size: 25px;
}
.addcontainer2{
    padding: 10px 10px;
}
.addbtn{
    background-color: #277BC0;
    border: none;
    padding: 10px 10px;
    text-decoration: none;
    color: white;
    font-weight: bold;
    border-radius: 25px;
    width: 20%;
    box-shadow: 7px 7px 15px  rgba(0,0,0,0.4);
    font-size: 25px;
    float: right;
    margin-top: 5px;
}
.announceinput textarea{
    margin-top: 10px;
    height: 30%;
    width: 100%;
    font-size: 27px;
    font-family: 'Poppins', sans-serif;
    border-radius: 30px;
    border: none;
    padding-left: 20px;
    resize: none;
    box-shadow: 7px 7px 15px  rgba(0,0,0,0.4);
}
.leaderboardcontainer2{
    width: 100%;
    margin: 0 auto;
    overflow: auto;
    max-height: 80%;
    scrollbar-color: dark;
}
.messagecontainer{
    margin-top: 20px;
    text-align: justify;
    padding-right: 70px;
}
.createdon{
    font-size: 35px;
    font-weight: bold;
}
.message{
    font-size: 20px;
    padding-left: 50px;
    margin-top: -20px;
}
.gradecontainer{
    text-align: center;
}
.grade{
    font-size: 20px;

}
.name{
    font-size: 25px;
    font-weight: bolder;

}
.title{
    font-size: 50px;
    font-weight: bold;
}

</style>

<body>
    <div class="headercontainer">
		<div class="headername">
		<a>Skwelahome</a>
		</div>
	</div>
    <div class="bodycontainer">
        <div class="selectioncontainer">
            <div class="Announcementsbtn">
                <a href="announcements.php"><button class="announcements">Announcements</button></a><br>
            </div>
            <div class="Lecturesbtn">
                <a href="lectures.php"><button class="lectures">Lectures</button></a><br>
            </div>
            <div class="Assignments">
                <a href="assignments.php"><button class="assignments">Assignments</button></a><br>
            </div>
            <div class="GroupChatbtn">
                <a href="groupchat.php"><button class="groupchat">Group Chat</button></a><br>
            </div>
            <div class="GroupChatbtn">
                <a href="leaderboard.php"><button class="leaderboard">Leaderboard</button></a><br>
            </div>
            <div class="backbtn">
                <a href="mySections.php"><button class="back">Back</button></a><br>
            </div>
        </div>

        <div class="leaderboardcontainer">
            <div class="leaderboard2">
                <a>Leaderboard</a>
            </div>
            <div class="leaderboardcontainer2">
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "appname";
                $uname = $_SESSION["uname"];
                $subject = $_SESSION["subject"];
                $subjectid = $_SESSION["subject"];
                $length = 0;

                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                } 

                $sql = "SELECT name, grade, subject_id FROM student_grades WHERE subject_id = '$subjectid'";

                $result = $conn->query($sql);

                if ($result->num_rows > 0) 
                {
                    while($row = $result->fetch_assoc()) 
                    {
                        $array[] = array($row['grade'],$row['name']);
                        $length++;
                    }
                }
                
                echo "<div class='gradecontainer'>";
                if (empty($array)) {
                   
                }
                else{
                    rsort($array);
                    for($i = 0; $i < $length; $i++)
                    {
                        echo "<div class='title'>";
                        echo "TOP: ";
                        echo $i+1;
                        echo "</div>";
                        echo "<div class='grade'>";
                        
                        for($x = 0; $x < 2; $x++)
                        {
                            echo "<div class='name'>";
                            
                            echo $array[$i][$x];
                            echo "</div>";
                        }
                        echo "</div>";
                        echo "<br>";
                    }
                    echo "</div>";
                }
                
                ?>            
            </div>
        </div>
    </div>
</body>
</html>