<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include 'panier.php';
    session_start();
    if(isset($_SESSION["spanier"])){
        $f=$_SESSION["spanier"];
        $id=$_SESSION["sid"];
        $content=count($f->getTable_fruit());
    }
    else{
        $content=0;
    }
    ?>
    <form action="store.php" method="post">
        <fieldset>
        <legend>Liste des produits</legend>
            <h1>Votre contenu de panier est : <?=$content?> fruits</h1>
            Nombre de pommes : <input type="number" name="pomme" id="">
            Nombre de poirs : <input type="number" name="poirs" id="">
            Nombre de Bananes : <input type="number" name="banana" id="">
            <input type="submit" name="add" value="Ajouter au panier">
        </fieldset>
        </form>
    <a href="store.php?actionlist=all"><h1 style="text-decoration:none;">Contenu de panier</h1></a>
    <a href="store.php?actiondec=dec"><h1 style="text-decoration:none;">Déconnexion</h1></a>
    <?php
    if(!empty($_POST["add"])){
        $pommes=$_POST["pomme"];
        $poirs=$_POST["poirs"];
        $bananes=$_POST["banana"];
        for($pm=0;$pm<$pommes;$pm++){
            $pomme=new Fruit($_SESSION["cid"],"pomme",12,"images/pomme.jpg");
            $f->ajouter($pomme);
            $_SESSION["sid"]++;
        }
        for($pr=0;$pr<$poirs;$pr++){
            $poir=new Fruit($_SESSION["sid"],"poir",9,"images/poire.jpg");
            $f->ajouter($poir);
            $_SESSION["sid"]++;
        }
        for($bn=0;$bn<$bananes;$bn++){
            $banane=new fruit($_SESSION["sid"],"banane",11,"images/banane.jpg");
            $f->ajouter($banane);
            $_SESSION["sid"]++;
        }
        header("Location : store.php");
    }
    if(isset($_GET["actionlist"])){
        $content=$f->getTable_fruit();
        echo "<table border='2'>";
        echo "<tr>";
                echo "<th>Nom</th>";
                echo "<th>Prix</th>";
                echo "<th>Photo</th>";
        echo "</tr>";
        foreach($content as $fruit){
            echo "<tr>";
            $id=$fruit->getId();
            $nom=$fruit->getNom();
            $prix=$fruit->getPrix();
            $photo=$fruit->getPhoto();
                    echo "<td>$nom</td>"
                    echo "<td>$$prix</td>"
                    echo "<td><img src='$photo' width='50' height='50'></td>";
                    echo "<td><a href='store.php?actionsup=$id'>Supprimer</a></td>";
            echo "</tr>";
        }
        echo "</table>";
        $total=$f->Prix_total();
        echo "<h1>Total à payer : $total DH</h1>";
    }
    //For Log out
    if(isset($_GET["actiondec"])){
        session_destroy();
        header("Location : connexion.php");
    }
    //For deleting
    if(isset($_GET["actionsup"])){
        $id=$_GET["actionsup"];
        $f->supprimer($id);
        $_SESSION["cid"];
    }
    ?>
</body>
</html>