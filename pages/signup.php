<?php
include '../include/connexion.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        html {
  height: 100%;
}
body {
  margin:0;
  padding:0;
  font-family: sans-serif;
  background: linear-gradient(#55ebff, #B0E0E6);
}

.login-box {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 400px;
  padding: 40px;
  transform: translate(-50%, -50%);
  background: rgba(0,0,0,.5);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.6);
  border-radius: 10px;
}

.login-box h2 {
  margin: 0 0 30px;
  padding: 0;
  color: #fff;
  text-align: center;
}

.login-box .user-box {
  position: relative;
}

.login-box .user-box input {
  width: 100%;
  padding: 5px 0;
  font-size: 16px;
  color: #fff;
  margin-bottom: 30px;
  border: none;
  border-bottom: 1px solid #fff;
  outline: none;
  background: transparent;
}
.login-box .user-box label {
  position: absolute;
  top:0;
  left: 0;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  pointer-events: none;
  transition: .5s;
}

.login-box .user-box input:focus ~ label,
.login-box .user-box input:valid ~ label {
  top: -20px;
  left: 0;
  color: #03e9f4;
  font-size: 12px;
}

.login-box form .sub {
  position: relative;
  display: inline-block;
  padding: 10px 20px;
  color: #03e9f4;
  font-size: 16px;
  text-decoration: none;
  text-transform: uppercase;
  overflow: hidden;
  transition: .5s;
  margin-top: 20px;
  letter-spacing: 4px;
  background-color: transparent;
  border: none;
}
.login-box form a{
  position: relative;
  display: inline-block;
  padding: 10px 20px;
  color: #03e9f4;
  font-size: 16px;
  text-decoration: none;
  text-transform: uppercase;
  overflow: hidden;
  transition: .5s;
  margin-top: 30px;
  letter-spacing: 4px;
}

.login-box .sub:hover , .login-box a:hover {
  background: #03e9f4;
  color: #fff;
  border-radius: 5px;
  box-shadow: 0 0 5px #03e9f4,
              0 0 25px #03e9f4,
              0 0 50px #03e9f4,
              0 0 100px #03e9f4;
}

.login-box .sub span , .login-box a span{
  position: absolute;
  display: block;
}

.login-box .sub span:nth-child(1), .login-box a span:nth-child(1) {
  top: 0;
  left: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(90deg, transparent, #03e9f4);
  animation: btn-anim1 1s linear infinite;
}

@keyframes btn-anim1 {
  0% {
    left: -100%;
  }
  50%,100% {
    left: 100%;
  }
}

.login-box .sub span:nth-child(2), .login-box a span:nth-child(2) {
  top: -100%;
  right: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(180deg, transparent, #03e9f4);
  animation: btn-anim2 1s linear infinite;
  animation-delay: .25s
}

@keyframes btn-anim2 {
  0% {
    top: -100%;
  }
  50%,100% {
    top: 100%;
  }
}

.login-box .sub span:nth-child(3), .login-box a span:nth-child(3) {
  bottom: 0;
  right: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(270deg, transparent, #03e9f4);
  animation: btn-anim3 1s linear infinite;
  animation-delay: .5s
}

@keyframes btn-anim3 {
  0% {
    right: -100%;
  }
  50%,100% {
    right: 100%;
  }
}

.login-box .sub span:nth-child(4) , .login-box a span:nth-child(4){
  bottom: -100%;
  left: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(360deg, transparent, #03e9f4);
  animation: btn-anim4 1s linear infinite;
  animation-delay: .75s
}

@keyframes btn-anim4 {
  0% {
    bottom: -100%;
  }
  50%,100% {
    bottom: 100%;
  }
}


/* ::-webkit-datetime-edit-text { display: none; }
::-webkit-datetime-edit-month-field { display: none; }
::-webkit-datetime-edit-day-field { display: none; }
::-webkit-datetime-edit-year-field { display: none;} */
::-webkit-inner-spin-button { display: none; }


    </style>
</head>
<?php
if(isset($_POST['submit'])){
  $username=$_POST['username'];
  $pwd=$_POST['password'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $last=$_POST['lastname'];
  $birth=$_POST['birth'];
  $gender=$_POST['gender'];
  
  $sql="insert into users VALUES (null,'$username','$last','$birth','$email','$phone','$gender','$pwd',4)";
  $result=mysqli_query($conn,$sql);
  if($result){
    session_start();
    $sql="select * from users where email='$email'";
    $result=mysqli_query($conn,$sql);
    while($res=mysqli_fetch_assoc($result)){
      $_SESSION['id']=$res['id'];
      $_SESSION['role']=$res['id_role'];
    }
    header('location: ../index.php');
  }else{
    
    header('refresh:1');
  }
}


?>
<body>
    
<div class="login-box">
  <h2>register</h2>
  <form method="POST">
    <div class="user-box">
      <input type="text"  required="" name="username">
      <label>Username</label>
    </div>
    <div class="user-box">
      <input type="text"  required="" name="lastname">
      <label>lastname</label>
    </div>
    <div class="user-box">
      <input type="email"  required="" name="email">
      <label>Email</label>
    </div>
    <div class="user-box">
      <input type="number" required="" name="phone">
      <label>Phone number</label>
    </div>
    <div class="user-box">
      <input type="date"  required="" name="birth">
      <label>date of birth</label>
    </div>
    <div class="user-box">
      <input type="password"  required="" name="password">
      <label>Password</label>
    </div>
    <div class="user-box">
      <input type="password"  required="">
      <label>Verfiy Password</label>
    </div>
    <div class="user-box">
      <input type="text"  required="" name="gender">
      <label>gender</label>
    </div>
    <button type="submit" name="submit"  class="sub">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      SIGN UP
    </button>
  </form>
</div>
</body>
</html>