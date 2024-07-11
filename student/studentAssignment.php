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
    height: 800px;
    margin: 0 auto;
    margin-top: 60px;
}
.selectioncontainer{
    height: 90%;
    width:30% ;
    float: left;
}
.assignmentscontainer{
    background-color: #E8E9ED;
    height: 94%;
    width: 70%;
    float: left;
    border-radius: 50px;
    box-shadow: 7px 7px 15px  rgba(0,0,0,0.4);
}
.addcontainer{
    height: 30%;
    width: 20%;
    float: right;
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
.answerbtn{
    background-color: #277BC0;
    border: none;
    padding: 10px 10px;
    text-decoration: none;
    color: white;
    font-weight: bold;
    border-radius: 25px;
    width: 100%;
    box-shadow: 7px 7px 15px  rgba(0,0,0,0.4);
    font-size: 25px;
    float: right;
}
.announceinput textarea{
    background-color: blue;
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

                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                } 

                $sql = "SELECT assignment_id, subject_id, assignment, deadline, posted_by, posted_on FROM assignment WHERE subject_id = '$subjectid'";
                $result = $conn->query($sql);

                // check if the number of rows in the result set is greater than 0 which means that record(s) exist
                if ($result->num_rows > 0) 
                {
                    // output data of each row
                    while($row = $result->fetch_assoc()) 
                    {
                        $array[] = $row['assignment'];
                        $array2[] = $row['deadline'];
                        $array3[] = $row['posted_on'];
                        $array4[] = $row['assignment_id'];
                    }
                    $length = count($array);
                } 
                else 
                {
                    //echo "0 results";
                }

                if(!$length==0){
                    echo "<div class='container'>";
                        for($i=$length-1;$i>=0;$i--)
                        {
                            echo "<div class='postedon'>";
                                echo "Posted on: ".$array3[$i];
                            echo "</div>";
                            echo "<br>";
                            echo "<div class='assignment'>";
                                echo $array[$i];
                            echo "</div>";
                            echo "<div class='deadlinetext'>";
                                echo "Deadline on: "."$array2[$i]</a>";
                            echo "</div>";
                            echo "<br>";

                            echo "<div class='addcontainer'>";
					            echo "<div class='addcontainer2'>";
					                echo "<form method='post'>"; 
					                echo "<div class='buttons'>";
					                    echo '<button name="answerbtn" class="answerbtn" value='.$array4["$i"].' type="submit">'.'Answer'.'</button>'."<br>";
					                echo "</div>";
                                    echo "</form>";  
            					echo "</div>";
        					echo "</div>";
                            echo "<br>"."<br>"."<br>";
                            
                        }
                    echo "</div>";
                    if(isset($_POST["answerbtn"]))
                {
                    $selected = $_POST["answerbtn"];
                    $_SESSION["answerbtn"] = $selected;
                    echo "<script>location.href='answer.php'</script>"; 
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