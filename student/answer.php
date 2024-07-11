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
.assignmentscontainer{
    background-color: #E8E9ED;
    height: 90%;
    width: 70%;
    float: left;
    border-radius: 50px;
    box-shadow: 7px 7px 15px  rgba(0,0,0,0.4);
}
.addcontainer{
    height: 25%;
    width: 95%;
    margin: 0 auto;
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
    margin-top: 10px;
}
.announceinput textarea{
    height: 25%;
    width: 100%;
    font-size: 27px;
    font-family: 'Poppins', sans-serif;
    border-radius: 30px;
    border: none;
    padding-left: 20px;
    resize: none;
    margin-top: 10px;
    box-shadow: 7px 7px 15px  rgba(0,0,0,0.4);
}
.deadline{
    float: left;
    height: 50px;
    padding-right: 20px;
    padding-left: 20px;
    font-size: 20px;
    font-family: 'Poppins', sans-serif;
    border-radius: 30px;
    border: none;
    margin-top: -15px;
    box-shadow: 7px 7px 15px  rgba(0,0,0,0.4);
}
.assignmentscontainer2{
    width: 100%;
    margin: 0 auto;
    overflow: auto;
    height: 50%;
    padding-left: 50px;
    scrollbar-color: dark;
}
.container{
    margin-top: 20px;
    text-align: justify;
    padding-right: 70px;
}

.postedon{
    font-size: 35px;
    font-weight: bold;
}
.assignment{
    width: 95%;
    font-size: 30px;
    margin-top: -20px;
}
.deadlinetext{
    color:  #ED2939;
    text-align: right;
    font-size: 25px;
    border-radius: 30px;
    font-weight: bold;
    margin-right: 55px;
}
.respond{
    text-align: center;
    float: right;
    font-size: 30px;
    width: 50%;
    margin-right:20px;
    margin-top: -50px;
}
.youranswerbox{
    font-size: 30px;
    font-weight: bold;
}
.answerbox{
    padding-left: 50px;
    font-size: 25px;
}
.backcontainer{
    width: 20%;
}   
.backbtn2{
    height: 50px;
    float: left;
    background-color: #FFB200;
    border: none;
    width: 100%;
    text-decoration: none;
    color: white;
    font-weight: bold;
    border-radius: 30px;
    box-shadow: 7px 7px 15px  rgba(0,0,0,0.4);
    font-size: 25px;
    margin-top: -13px;
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
                <a href="studentannouncement.php"><button class="announcements">Announcements</button></a><br>
            </div>
            <div class="Lecturesbtn">
                <a href="studentlectures.php"><button class="lectures">Lectures</button></a><br>
            </div>
            <div class="Assignments">
                <a href="studentassignment.php"><button class="assignments">Assignments</button></a><br>
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

        <div class="assignmentscontainer">
            <div class="assignmentscontainer2">

                <?php 
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "appname";
                $uname = $_SESSION["uname"];
                $subject = $_SESSION["subject"];
                $subjectid = $_SESSION["subject"];
                $length = 0;
                $answer = $_SESSION["answerbtn"];

                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                } 

                $sql = "SELECT assignment_id, subject_id, assignment, deadline, posted_by, posted_on FROM assignment WHERE assignment_id = '$answer'";
                $result = $conn->query($sql);

                // check if the number of rows in the result set is greater than 0 which means that record(s) exist
                if ($result->num_rows > 0) 
                {
                    // output data of each row
                    while($row = $result->fetch_assoc()) 
                    {
                        echo "<div class='postedon'>";
                            echo 'Posted on: '.$row['posted_on'];
                        echo "</div>";
                        echo "<br>";

                        echo "<div class='assignment'>";
                            echo $row['assignment'];
                        echo "</div>";

                        echo "<div class='deadlinetext'>";
                            echo 'Deadline on: '.$row['deadline'];
                        echo "</div>";
                        echo "<br>";
                    }
                } 
                else
                {
                    //echo "0 results";
                }

                $sql = "SELECT answers_id, assignment_id, answer FROM student_answers WHERE answered_by = '$uname' AND assignment_id = '$answer'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) 
                {
                    while($row = $result->fetch_assoc()) 
                    {
                        $array[]=$row['answer'];
                    }   
                    $length = count($array);
                }

                for($i=0;$i<$length;$i++)
                {
                    echo "<div class='youranswerbox'>";
                        echo "Your answer: "."<br>";
                    echo "</div>";
                    echo "<div class='answerbox'>";    
                        echo $array[$i];
                    echo "</div>";
                }
                
                
                $conn->close();
                ?>
            </div>
            <div class="addcontainer">
                <div class="addcontainer2">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="textfields">
                        <div class="announceinput">
                            <textarea 
                              id="text" 
                              cols= "100%"
                              rows="5" 
                              name="assignment_answer" 
                              placeholder="Write your answer here" required></textarea>
                        </div>
                    </div>
                    <div class="buttons">
                        <input type="submit" class="addbtn" value="Answer" name="btn"/> <br>
                    </div>
                    </form>
                    <div class="backcontainer">
                        <a href="studentAssignment.php"><button class="backbtn2">Back</button></a><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "appname";
    $uname = $_SESSION["uname"];
    $subject = $_SESSION["subject"];
    $subjectid = $_SESSION["subject"];

    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "SELECT assignment_id, answer, answered_by FROM student_answers WHERE answered_by = '$uname' AND assignment_id = '$answer'";

    $result = $conn->query($sql);

   
    if ($result->num_rows > 0) 
    {
        echo "<div class='respond'>";
            echo "You've already responded to this question.";
        echo "</div>";  
    } 
    else 
    {
        if(isset($_POST['btn'])&&isset($_POST['assignment_answer']))
        {
        $assignment_answer = $_POST['assignment_answer'];
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) 
        {
            die("Connection failed: " . $conn->connect_error);
        }   

        $sql = "INSERT INTO student_answers (assignment_id, subject_id, answer, answered_by, answered_on) VALUES ('$answer', '$subjectid','$assignment_answer', '$uname', CURRENT_TIMESTAMP)";

        if ($conn->query($sql) === TRUE)
        {
            echo "<script>location.href='answer.php'</script>"; 
            echo "<br>"."Successfully added";
        }
        else
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        }
    }
    ?>
</body>
</html>