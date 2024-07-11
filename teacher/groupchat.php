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
.messagecontainer{
	width: 100%;
    margin: 0 auto;
	overflow: auto;
    background-color: #E8E9ED;
    height: 95%;
    width: 70%;
    text-align: center;
    border-radius: 50px;
    box-shadow: 7px 7px 15px  rgba(0,0,0,0.4);
}
.addcontainer{
    height: 20%;
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
.leaderboard{
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
    padding: 27px;
    text-decoration: none;
    color: white;
    font-weight: bold;
    border-radius: 30px;
    width: 25%;
    box-shadow: 7px 7px 15px  rgba(0,0,0,0.4);
    font-size: 25px;
    float: left;
    margin-left: 20px;
    margin-top: 10px;
}
.messageinput textarea{
	float: left;
	margin-left: 10%;
    height: 30%;
    width: 50%;
    font-size: 27px;
    font-family: 'Poppins', sans-serif;
    border-radius: 30px;
    border: none;
    padding-left: 20px;
    resize: none;
    margin-top: 10px;
    box-shadow: 7px 7px 15px  rgba(0,0,0,0.4);
}

.message_text{
	background-color: #FFC759;
    color: black;
    font-size: 40px;
    width: 60%;
    margin: 0 auto;
    margin-top: -20px;
    border-radius: 30px;
}

.container{
    margin-top: 20px;
    text-align: center;
}

.createdon{
    font-size: 20px;
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

        <div class="messagecontainer">
            <div class="messagecontainer2">
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

                $sql = "SELECT subject_id, group_message, full_name, sent_on FROM groupchat WHERE subject_id = '$subjectid'";
                $result = $conn->query($sql);

                // check if the number of rows in the result set is greater than 0 which means that record(s) exist
                if ($result->num_rows > 0) 
                {
                    // output data of each row
                    while($row = $result->fetch_assoc()) 
                    {
                        $array[] = $row['group_message'];
                        $array2[] = $row['full_name'];
                        $array3[] = $row['sent_on'];
                    }
                    $length = count($array);
                } 
                else 
                {
                    //echo "0 results";
                }

                if(!$length==0){
	                echo "<div class='container'>";
	                    for($i=0;$i<=$length-1;$i++)
	                    {
	                    	echo "<div class='createdon'>";
	                            echo "Sent by: ".$array2[$i]." | "."$array3[$i]";
	                        echo "</div>";
	                        
	                        echo "<br>";
	                        echo "<div class='message_text'>";
	                            echo $array[$i];
	                        echo "</div>";
	                        echo "<br>";
	                    }
	                echo "</div>";
            	}	
                $conn->close();
                ?>
            </div>
        </div>

        <div class="addcontainer">
            <div class="addcontainer2">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="textfields">
                    <div class="messageinput">
                        <textarea 
                          id="text" 
                          cols= "100%"
                          rows="2" 
                          name="message_text" 
                          placeholder="Write a message" required></textarea>
                    </div>
                <div class="buttons">
                <input type="submit" class="addbtn" value="Send" name="btn"/> <br>
                </form>
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
    $name = $_SESSION["full_name"];

    if(isset($_POST['btn'])&&isset($_POST['message_text']))
    {
        $message = $_POST['message_text'];

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) 
        {
            die("Connection failed: " . $conn->connect_error);
        }   

        $sql = "INSERT INTO groupchat (subject_id, full_name, group_message, sent_by, sent_on) VALUES ('$subjectid','$name', '$message', '$uname', CURRENT_TIMESTAMP)";

        if ($conn->query($sql) === TRUE)
        {
            echo "<script>location.href='groupchat.php'</script>"; 
            echo "<br>"."Successfully reported";
        }
        else
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    

    ?>
    
</body>
</html>