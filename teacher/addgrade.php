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
    <title>ASkwelahome</title>
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
.assignmentscontainer{
    background-color: #E8E9ED;
    height: 100%;
    width: 70%;
    float: left;
    border-radius: 50px;
    box-shadow: 7px 7px 15px  rgba(0,0,0,0.4);
}
.addcontainer{
    height: 45%;
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
    background-color: #F13867;
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
    height: 40%;
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
    max-height: 100%;
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
    font-size: 30px;
    margin-top: -20px;
}
.deadlinetext{
    color:  #ED2939;
    text-align: right;
    font-size: 25px;
    border-radius: 30px;
    font-weight: bold;
}
.responsebox{
    color:  #32CD32;
    font-size: 25px;
    font-weight: bold;
}
.responsecontainer{
    margin-left: 0px;
    font-size: 20px;
}
.userbox{
    font-weight: bold;
}
.answerbox{
    margin-left: 50px;
}
.datebox{
    font-weight: bold;
    color:  #32CD32;
    float: right;
}
.addgradecontainer{
    text-align: center;
    font-weight: bold;
    font-size: 50px;
    margin-top: -70px;
}
.gradecontainer{
    color: green;
    text-align: center;
    font-weight: bold;
    font-size: 50px;
    padding-bottom: 55px;
}
.containerofall{
    color: ;
    margin-top: 250px;

    margin-left: -50px;

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
                <a href="leaderboard.php"><button class="groupchat">Leaderboard</button></a><br>
            </div>
            <div class="backbtn">
                <a href="mySections.php"><button class="back">Back</button></a><br>
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
                $assignment = $_SESSION["selectedview"];
                $studentname = $_SESSION["studentname"];
                $assignmentnum = $_SESSION["assignmentnum"];
                $length = 0;
                $length2 = 0;

                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                } 

                $sql = "SELECT assignment_id, answer, answered_by, answered_on, grade FROM student_answers WHERE answered_by = '$studentname' AND assignment_id = '$assignmentnum'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) 
                {
                    while($row = $result->fetch_assoc()) 
                    {
                        if($row['grade']==0)
                        {
                            $sql = "SELECT assignment_id, answer, answered_by, answered_on, grade FROM student_answers WHERE answered_by = '$studentname' AND assignment_id = '$assignmentnum'";
                            $result = $conn->query($sql);

                            echo "<div class='container'>";
                            if ($result->num_rows > 0) 
                            {
                                echo "<form method='post'>";
                                echo "<div class='responsecontainer'>";
                                // output data of each row
                                while($row = $result->fetch_assoc()) 
                                {
                                    echo "<div class='userbox'>";
                                    echo "Name: ".$row['answered_by'];
                                    echo "</div>";
                                    echo "<div class='answerbox'>";
                                    echo $row['answer'];
                                    echo "</div>";
                                    echo "<div class='datebox'>";
                                    echo "Passed on: ".$row['answered_on']."<br>";
                                    echo "</div>";
                                    echo "<br>";
                                    echo '<input class="grade" type="grade" name="grade" placeholder="Input Grade" required/>';  
                                    echo '<input class="confirmbtn"type="submit" value="Confirm" name="btn"/>';
                                    echo "</form>";  
                                }
                                echo "</div>";
                            } 
                            echo "</div>";
                            if(isset($_POST["grade"])&&isset($_POST["btn"]))
                            {
                                $input = $_POST["grade"];
                                if(is_numeric($input)){
                                    $sql = "UPDATE student_answers
                                   SET grade = '$input'
                                   WHERE answered_by = '$studentname' AND assignment_id = '$assignmentnum'";
                                    
                                    if ($conn->query($sql) === TRUE)
                                    {
                                        $sql2 = "SELECT name, grade, subject_id FROM student_grades WHERE name = '$studentname' AND subject_id = '$subjectid'";
                                        $result2 = $conn->query($sql2);

                                        if ($result2->num_rows > 0) 
                                        {
                                            while($row2 = $result2->fetch_assoc()) 
                                            {
                                                $value = $row2['grade'];
                                            }
                                            $value = $value + $input;

                                            $sql3 = "UPDATE student_grades SET grade = '$value' WHERE name = '$studentname' AND subject_id = '$subjectid'";
                                            if ($conn->query($sql3) === TRUE)
                                            {
                                                echo "success";
                                                echo "<script>location.href='addgrade.php'</script>";
                                            }
                                            
                                        }
                                        else
                                        {
                                            $sql4 = "INSERT INTO student_grades (name, grade, subject_id)
                                            VALUES ('$studentname', '$input', '$subjectid')";
                                            if ($conn->query($sql4) === TRUE)
                                            {
                                                 echo "success";
                                                echo "<script>location.href='addgrade.php'</script>";
                                            }
                                           
                                        }
                                         
                                    }
                                    else
                                    echo "Error: " . $sql . "<br>" . $conn->error;
                                }
                                else{
                                    echo "Please input a valid value!";
                                }
                            }
                        }
                        else
                        {
                            echo "<div class='containerofall'>";
                            echo "<div class='addgradecontainer'>";
                            echo "<br>"."Already been graded"."<br>";
                            echo "</div>";
                            echo "<div class='gradecontainer'>";
                            echo "Grade: ".$row['grade'];
                            echo "</div>";
                            echo "</div>";
                        }
                    }
                }




                
                
                
                $conn->close();
                ?>
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

    if(isset($_POST['btn'])&&isset($_POST['class_assignment'])&&isset($_POST['deadline']))
    {
        $class_assignment = $_POST['class_assignment'];
        $deadline = $_POST['deadline'];
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) 
        {
            die("Connection failed: " . $conn->connect_error);
        }   

        $sql = "INSERT INTO assignment (subject_id, assignment, deadline, posted_by, posted_on) VALUES ('$subjectid', '$class_assignment', '$deadline', '$uname', CURRENT_TIMESTAMP)";

        if ($conn->query($sql) === TRUE)
        {
            echo "<script>location.href='assignments.php'</script>"; 
            echo "<br>"."Successfully added";
        }
        else
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    

    ?>
</body>
</html>