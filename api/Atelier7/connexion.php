<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include 'panier.php'
if(!empty($_POST["action1"])){
    $login=$_POST["login"];
    $password=$_POST["pass"];
    $e=0;
    if($login=="DEV101"&& $password=="123"){
        $e=1;
        session_start();
        $panier=new Panier();
        $_SESSION["spanier"]=$panier;
        $_SESSION["sid"]=0;
        header("Location : store.php");
    }
    else{
        echo "<h1 style='color:red;'>Login ou password incorrect!!</h1>"
    }
}

?>
   <form action="connexion.php" method="POST">
    Login : <input type="text" name="login" id="">
    Password : <input type="text" name="pass" id="">
    <input type="submit" name="action1" value="Connexion">
    <input type="reset" value="Annuler">
   </form> 
</body>
</html>