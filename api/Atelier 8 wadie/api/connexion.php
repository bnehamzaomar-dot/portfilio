<?php
// PHP Logic at the top for Vercel compatibility
include 'fruit.php';
include 'panier.php';
$error = "";

if(!empty($_POST["action1"])){
    $login=$_POST["login"];
    $password=$_POST["pass"];
    if($login=="DEV101"&& $password=="123"){
        session_start();
        $_SESSION["spanier"]=new Panier();
        $_SESSION["sid"]=0;
        header("Location:store.php");
        exit;
    } else {
        $error = "Access Denied: Invalid Credentials";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruit Store - Premium Login</title>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: #0f172a;
            background-image: 
                radial-gradient(at 0% 0%, rgba(99, 102, 241, 0.15) 0px, transparent 50%),
                radial-gradient(at 100% 100%, rgba(168, 85, 247, 0.15) 0px, transparent 50%);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            color: white;
        }
        .login-card {
            background: rgba(30, 41, 59, 0.7);
            backdrop-filter: blur(20px);
            padding: 50px;
            border-radius: 30px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
        h2 { font-size: 32px; margin-bottom: 30px; background: linear-gradient(to right, #818cf8, #c084fc); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
        .error-banner { color: #f87171; margin-bottom: 20px; font-size: 14px; padding: 10px; background: rgba(248, 113, 113, 0.1); border-radius: 8px; }
        .input-box { text-align: left; margin-bottom: 20px; }
        label { display: block; font-size: 12px; text-transform: uppercase; letter-spacing: 1px; color: #94a3b8; margin-bottom: 8px; }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 15px;
            background: rgba(15, 23, 42, 0.6);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            color: white;
            box-sizing: border-box;
            transition: 0.3s;
        }
        input:focus { outline: none; border-color: #818cf8; box-shadow: 0 0 0 4px rgba(129, 140, 248, 0.1); }
        .actions { display: flex; flex-direction: column; gap: 10px; margin-top: 30px; }
        input[type="submit"] {
            background: #6366f1;
            color: white;
            padding: 15px;
            border: none;
            border-radius: 12px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }
        input[type="submit"]:hover { background: #4f46e5; transform: translateY(-2px); }
        input[type="reset"] { background: transparent; color: #94a3b8; border: none; cursor: pointer; font-size: 14px; }
    </style>
</head>
<body>
    <div class="login-card">
        <h2>Fruit Portal</h2>
        <?php if($error) echo "<div class='error-banner'>$error</div>"; ?>
        <form action="connexion.php" method="POST">
            <div class="input-box">
                <label>Username</label>
                <input type="text" name="login" required>
            </div>
            <div class="input-box">
                <label>Password</label>
                <input type="password" name="pass" required>
            </div>
            <div class="actions">
                <input type="submit" name="action1" value="Unlock Market">
                <input type="reset" value="Clear">
            </div>
        </form>
    </div>
</body>
</html>