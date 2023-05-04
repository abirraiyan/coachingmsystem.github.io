<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <style>
        body
{
    margin: 0;
    padding: 0;
    background-color: aqua;
    font-family: 'Arial';
}
.login{
        width: 382px;
        overflow: hidden;
        margin: auto;
        margin: 20 0 0 450px;
        padding: 80px;
        background: #23463f;
        border-radius: 15px ;

}
h1{
    text-align: center;
    color: #277582;
    padding: 20px;
}
label{
    color: #08ffd1;
    font-size: 17px;
}
#Uname{
    width: 300px;
    height: 30px;
    border: none;
    border-radius: 17px;
    padding-left: 7px;
}
#Pass{
    width: 300px;
    height: 30px;
    border: none;
    border-radius: 17px;
    padding-left: 7px;

}
#log{
    width: 100px;
    height: 30px;
    border: none;
    border-radius: 17px;
    padding-left: 7px;
    color: black;
    background-color:green;


}

#back{
    width: 100px;
    height: 30px;
    border: none;
    border-radius: 17px;
    padding-left: 7px;
    color: black;
    background-color:green;


}
span{
    color: white;
    font-size: 17px;
}
a{
    float: left;
    color: black;
}

.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  border-radius: 50%;
  border: 3px solid #555;
  width: 50%;
}
    </style>
    <h1>Login</h1>
    <div class="login">
    <img src="login.png" class="center"><br>
    <form id="login" method="POST" action="login_Check.php">
        <label><b>User Name
        </b>
        </label>
        <input type="text" name="Uname" id="Uname" placeholder="Username">
        <br><br>
        <label><b>Password</b>
        </label>
        <input type="Password" name="Pass" id="Pass" placeholder="Password">
        <br><br>
        <a href="admin.php"><input type="button" name="log" id="log" value="Login" onclick="admin.php"></a>
        <a href="index.php"><input type="button" name="back" id="back" value="Go back!" onclick="index.php"></a>
        <br><br>
        <input type="checkbox" id="check">
        <span>Remember me</span>
        <br><br>
        <a href="#"><b>Forgot Password</b></a>
    </form>
</div>
</body>
</html>
