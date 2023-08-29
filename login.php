<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        
        .form-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
            padding: 40px;
            width: 400px;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        .login-title {
            margin: 0 0 20px;
            color: #111;
        }
        
        .login-input {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        
        .login-button {
            background-color: #ff9900;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 12px 20px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
            width: 100%; /* Added this to make the button width 100% */
        }
        
        .login-button:hover {
            background-color: #e68a00;
        }
        
        .link {
            color: #555;
            margin-top: 15px;
        }
        
        .link a {
            color: #007bff;
            text-decoration: none;
        }
        
        .link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<?php
    require('db.php');
    session_start();
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . $password . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
           // header("Location: dashboard.php");
           header("Location: index.php");
        } else {
            echo "<div class='form-container'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form-container" method="post" name="login">
        <h1 class="login-title">Login</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"/>
        <input type="password" class="login-input" name="password" placeholder="Password"/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link">Don't have an account? <a href="registration.php">Register Now</a></p>
    </form>
<?php
    }
?>
</body>
</html>
