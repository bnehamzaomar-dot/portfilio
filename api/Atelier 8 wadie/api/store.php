<?php
include_once 'fruit.php';
include_once 'panier.php';
session_start();
if (!isset($_SESSION["spanier"])) {
    $_SESSION["spanier"] = new Panier();
    $_SESSION["sid"] = 1;
}
$f = $_SESSION["spanier"];

if (isset($_POST["add"])) {
    $pommes = (int)$_POST["pomme"];
    $poires = (int)$_POST["poires"];
    $bananes = (int)$_POST["banana"];
    for ($i = 0; $i < $pommes; $i++){
        $f->ajouter(new Fruit($_SESSION["sid"]++, "pomme", 12, "images/pomme.jpg"));
    }
    for ($i = 0; $i < $poires; $i++){
        $f->ajouter(new Fruit($_SESSION["sid"]++, "poire", 9, "images/poire.jpg"));
    }
    for ($i = 0; $i < $bananes; $i++){
        $f->ajouter(new Fruit($_SESSION["sid"]++, "banane", 11, "images/banane.jpg"));
    }
    header("Location: store.php");
    exit;
}
if (isset($_GET["actionsup"])) {
    $f->supprimer((int)$_GET["actionsup"]);
    header("Location: store.php?actionlist=all");
    exit;
}
if (isset($_GET["actiondec"])) {
    session_destroy();
    header("Location: connexion.php");
    exit;
}
$content = count($f->getTable_fruit());
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Fruit Vault</title>
    <style>
        @keyframes float {
            0%, 100% { transform: translate(0, 0) rotate(0deg); }
            33% { transform: translate(30px, -50px) rotate(15deg); }
            66% { transform: translate(-20px, 20px) rotate(-10deg); }
        }
        body {
            font-family: 'Inter', sans-serif;
            background: #020617;
            color: #f8fafc;
            margin: 0;
            padding: 40px 20px;
            min-height: 100vh;
            overflow-x: hidden;
        }
        .bg-deco {
            position: fixed;
            font-size: 60px;
            z-index: -1;
            filter: blur(2px);
            animation: float 15s ease-in-out infinite;
            opacity: 0.2;
        }
        .container {
            max-width: 900px;
            margin: 0 auto;
            background: rgba(15, 23, 42, 0.8);
            border: 1px solid rgba(255, 255, 255, 0.05);
            border-radius: 40px;
            padding: 40px;
            box-shadow: 0 0 80px rgba(0,0,0,0.5);
        }
        .header-section { text-align: center; margin-bottom: 40px; }
        .header-section h1 { font-size: 40px; margin: 0; font-weight: 900; letter-spacing: -1px; }
        .cart-pill { background: #818cf8; color: #fff; padding: 5px 20px; border-radius: 100px; font-size: 16px; margin-top: 10px; display: inline-block; }
        
        .grid-inputs {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }
        .card-input {
            background: rgba(30, 41, 59, 0.5);
            padding: 20px;
            border-radius: 24px;
            text-align: center;
            border: 1px solid rgba(255,255,255,0.05);
        }
        .card-input label { display: block; margin-bottom: 10px; color: #94a3b8; }
        input[type="number"] {
            width: 80%;
            background: #0f172a;
            border: 1px solid #334155;
            padding: 10px;
            color: white;
            border-radius: 12px;
            text-align: center;
        }
        .main-btn {
            background: linear-gradient(135deg, #6366f1, #a855f7);
            color: white;
            border: none;
            padding: 20px;
            border-radius: 18px;
            width: 100%;
            font-size: 18px;
            font-weight: 800;
            cursor: pointer;
            transition: 0.3s;
        }
        .main-btn:hover { box-shadow: 0 0 30px rgba(99, 102, 241, 0.4); transform: scale(1.01); }
        
        .nav-bar { display: flex; justify-content: center; gap: 20px; margin: 30px 0; }
        .nav-bar a { text-decoration: none; color: #94a3b8; font-weight: 600; padding: 10px 20px; border-radius: 12px; background: rgba(255,255,255,0.03); transition: 0.3s; }
        .nav-bar a:hover { color: white; background: rgba(255,255,255,0.08); }

        table { width: 100%; border-collapse: collapse; margin-top: 30px; border-radius: 20px; overflow: hidden; background: rgba(255,255,255,0.02); }
        th { text-align: left; padding: 20px; color: #64748b; font-size: 12px; text-transform: uppercase; }
        td { padding: 20px; border-top: 1px solid rgba(255,255,255,0.05); }
        .total-box { margin-top: 30px; padding: 30px; background: linear-gradient(to right, #1e1b4b, #312e81); border-radius: 24px; display: flex; justify-content: space-between; align-items: center; }
        .total-box h2 { margin: 0; font-size: 32px; color: #818cf8; }
        .btn-del { color: #f87171; text-decoration: none; font-size: 12px; border: 1px solid rgba(248, 113, 113, 0.2); padding: 5px 10px; border-radius: 8px; }
    </style>
</head>
<body>
    <div class="bg-deco" style="top:5%; left:5%;">🍎</div>
    <div class="bg-deco" style="bottom:10%; right:10%; animation-delay: -5s;">🍌</div>
    <div class="bg-deco" style="top:50%; left:80%; animation-delay: -2s;">🍐</div>

    <div class="container">
        <div class="header-section">
            <h1>Vault Market</h1>
            <div class="cart-pill"><?= $content ?> items in storage</div>
        </div>

        <form action="store.php" method="post">
            <div class="grid-inputs">
                <div class="card-input">
                    <label>Apples</label>
                    <input type="number" name="pomme" min="0" value="0">
                </div>
                <div class="card-input">
                    <label>Pears</label>
                    <input type="number" name="poires" min="0" value="0">
                </div>
                <div class="card-input">
                    <label>Bananas</label>
                    <input type="number" name="banana" min="0" value="0">
                </div>
            </div>
            <input type="submit" name="add" class="main-btn" value="UPDATE INVENTORY">
        </form>

        <div class="nav-bar">
            <a href="store.php?actionlist=all">VIEW ASSETS</a>
            <a href="store.php?actiondec=1" style="color:#f87171;">CLOSE VAULT</a>
        </div>

        <?php if (isset($_GET["actionlist"])): ?>
            <table>
                <thead>
                    <tr><th>Asset</th><th>Value</th><th>Preview</th><th>Management</th></tr>
                </thead>
                <tbody>
                <?php foreach ($f->getTable_fruit() as $fruit): ?>
                    <tr>
                        <td style="font-weight:700; color:#e2e8f0;"><?= strtoupper($fruit->getNom()) ?></td>
                        <td><?= $fruit->getprix() ?> DH</td>
                        <td><img src="<?= $fruit->getPhoto() ?>" width="40" height="40" style="border-radius:8px; border: 1px solid rgba(255,255,255,0.1);"></td>
                        <td><a href="store.php?actionsup=<?= $fruit->getId() ?>" class="btn-del">Eject</a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
            <div class="total-box">
                <span style="color:#94a3b8;">TOTAL PORTFOLIO</span>
                <h2><?= $f->prix_total() ?> DH</h2>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>