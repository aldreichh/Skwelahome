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
    height: 350px;
    background-color: #FFF4CF;
    box-shadow: 7px 7px 15px  rgba(0,0,0,0.4);

}
.title p1{
    font-size: 50px;
    font-weight: bold;
}
.title p2{
    font-size: 50px;
    color: #FFB200;
    font-weight: bold;
}
.title p3{
    font-size: 20px;
}
.ltc{
    margin-top: 10px;
}
.logindetails{
    margin-top: 20px;
}
.name {
    width: 60%;
    height: 60px;
    margin: 0 auto;
    border: auto;
    border-radius: 10px;
    border: none;
    padding-left: 10px;
    font-size: 20px;
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
    margin-top: 10px;
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
.confirmpass {
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
.signupbtn{
    float: right;
    background-color: #277BC0;
    border: none;
    padding: 20px 50px;
    text-decoration: none;
    color: white;
    font-weight: bold;
    border-radius: 30px;
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
}
.registeras {
    width: 25%;
    height: 45px;
    margin: 0 auto;
    border: auto;
    border-radius: 10px;
    border: none;
    margin-top: 10px;
    padding-left: 8px;
    float: left;
    margin-left: 20%;
    font-size: 25px;
}
.loginbtn{
    float: right;
    width: 20%;
    height: 80px;
    margin-top: 50px;
    margin-right: 20%;
}
.backcontainer{
    float: left;
    width: 20%;
    height: 80px;
    margin-top: 50px;
    margin-left: 20%;
}   
.uspas{
    font-size: 20px;
    padding-top: 35px;
    margin-left: 150px;
    border-radius: 25px;
    text-align: center;
    width: 40%;
}
.message a{
    font-size: 25px;
}
.homephoto img{
    max-width: 35%;
    float:right;
    margin-top: -24%;
    margin-right: 8%;
    overflow: hidden;
}


</style>

<body>
    <div class="headercontainer">
		<div class="headername">
		<a>Skwelahome</a>
		</div>
	</div>
    <div class="logincontainer">
        <div class="title">
            <p1>Sign up </p1><p2>Failed</p2><br>
        </div>
        <div class="message">
            <br><br><a>Password didn't match</a>
        </div>
        <div class="loginbtn">
            <a href="index.php"><button class="signupbtn">Login</button></a><br>
        </div>
        <div class="backcontainer">
            <a href="register.php"><button class="backbtn">Retry</button></a><br>
        </div>
    </div>
    <div class="homephoto">
        <img src="images/homepagephoto.png" alt="Italian Trulli">
    </div>




</body>
</html>