<?php
include "config.php";

// SAFE session start (fixes your warning)
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// redirect if already logged in
if(isset($_SESSION['admin'])){
    header("Location: dashboard.php");
    exit;
}

$error = "";

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    // (basic version - you can upgrade to password_hash later)
    $stmt = $conn->prepare("SELECT * FROM admin WHERE username=? AND password=?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows > 0){
        $_SESSION['admin'] = $username;
        header("Location: dashboard.php");
        exit;
    }else{
        $error = "Invalid Username or Password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Segoe UI, Arial;
        }

        body{
            height:100vh;
            width:100%;
            display:flex;
            justify-content:center;
            align-items:center;
            background:#f4f6f9;
        }

        .login-box{
            width:350px;
            background:white;
            padding:30px;
            border-radius:12px;
            box-shadow:0 10px 25px rgba(0,0,0,0.15);
            text-align:center;
        }

        .login-box h2{
            margin-bottom:20px;
        }

        .login-box input{
            width:100%;
            padding:12px;
            margin:10px 0;
            border:1px solid #ccc;
            border-radius:8px;
            outline:none;
        }

        .login-box button{
            width:100%;
            padding:12px;
            background:#2563eb;
            color:white;
            border:none;
            border-radius:8px;
            cursor:pointer;
            font-size:16px;
        }

        .login-box button:hover{
            background:#1d4ed8;
        }

        .error{
            color:red;
            margin-bottom:10px;
        }

    </style>

</head>

<body>

<div class="login-box">

    <h2>Admin Login</h2>

    <?php if($error != "") echo "<div class='error'>$error</div>"; ?>

    <form method="POST">

        <input type="text" name="username" placeholder="Username" required>

        <input type="password" name="password" placeholder="Password" required>

        <button type="submit" name="login">Login</button>

    </form>

</div>

</body>
</html>