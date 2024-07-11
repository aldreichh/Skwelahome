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
    height: 750px;
    margin: 0 auto;
    margin-top: 60px;
}
.selectioncontainer{
    height: 100%;
    width:30% ;
    float: left;
}
.lecturecontainer{
    background-color: #E8E9ED;
    height: 100%;
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
    background-color: #F13867;
    border: none;
    padding: 10px 10px;
    text-decoration: none;
    color: white;
    font-weight: bold;
    border-radius: 25px;
    margin-top: 5px;
    width: 20%;
    box-shadow: 7px 7px 15px  rgba(0,0,0,0.4);
    font-size: 25px;
    float: right;
}
.topicinput textarea{
    margin-top: 10px;
    width: 100%;
    font-size: 27px;
    font-family: 'Poppins', sans-serif;
    border-radius: 30px;
    border: none;
    padding-left: 20px;
    resize: none;
    box-shadow: 7px 7px 15px  rgba(0,0,0,0.4);
}
.linkinput textarea{
    margin-top: 10px;
    width: 100%;
    font-size: 27px;
    font-family: 'Poppins', sans-serif;
    border-radius: 30px;
    border: none;
    padding-left: 20px;
    resize: none;
    box-shadow: 7px 7px 15px  rgba(0,0,0,0.4);
}
.lecturecontainer2{
    width: 100%;
    margin: 0 auto;
    overflow: auto;
    max-height: 100%;
    padding-left: 50px;
    scrollbar-color: dark;
}
.linkcontainer{
    margin-top: 20px;
    text-align: justify;
    padding-right: 70px;
}

.link{
    background-color: #FFC759;
    text-align: center;
    font-size: 20px;
    width: 70%;
    margin: 0 auto;
    border-radius: 30px;
    padding: 20px;
    box-shadow: 7px 7px 15px  rgba(0,0,0,0.4);
}
.link a:visited, a:link, a:visited, a:active{
    color: black;
    text-decoration: none;
}
.link a:hover{
    color: #FF7B9C;
}
.postedon{
    font-size: 35px;
    font-weight: bold;
}
.topic{
    text-align: center;
    font-size: 30px;
    margin-top: -20px;
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
                <a href="studentAnnouncement.php"><button class="announcements">Announcements</button></a><br>
            </div>
            <div class="Lecturesbtn">
                <a href="studentLectures"><button class="lectures">Lectures</button></a><br>
            </div>
            <div class="Assignments">
                <a href="studentAssignment.php"><button class="assignments">Assignments</button></a><br>
            </div>
            <div class="GroupChatbtn">
                <a href="studentGroupchat.php"><button class="groupchat">Group Chat</button></a><br>
            </div>
            <div class="GroupChatbtn">
                <a href="leaderboard.php"><button class="groupchat">Leaderboard</button></a><br>
            </div>
            <div class="backbtn">
                <a href="mySubjects.php"><button class="back">Back</button></a><br>
            </div>
        </div>

        <div class="lecturecontainer">
            <div class="lecturecontainer2">
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

                $sql = "SELECT subject_id, topic, link, posted_by, posted_on FROM lectures WHERE subject_id = '$subjectid'";
                $result = $conn->query($sql);

                // check if the number of rows in the result set is greater than 0 which means that record(s) exist
                if ($result->num_rows > 0) 
                {
                    // output data of each row
                    while($row = $result->fetch_assoc()) 
                    {
                        $array[] = $row['topic'];
                        $array2[] = $row['link'];
                        $array3[] = $row['posted_on'];
                    }
                    $length = count($array);
                } 
                else 
                {
                    //echo "0 results";
                }

                
                if(!$length==0){
                    echo "<div class='linkcontainer'>";
                        for($i=$length-1;$i>=0;$i--)
                        {
                            echo "<div class='postedon'>";
                                echo "Posted on: ".$array3[$i];
                            echo "</div>";
                            echo "<br>";
                            echo "<div class='topic'>";
                                echo $array[$i];
                            echo "</div>";
                            echo "<div class='link'>";
                                echo "<a href='$array2[$i]' target='_blank'>$array2[$i]</a>";
                            echo "</div>";
                            echo "<br>";
                        }
                    echo "</div>";
                }
                $conn->close();
                ?>
            </div>
        </div>
    </div>
</body>
</html>