<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Index</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            margin: 40px;
        }
        h1 {
            text-align: center;
            color: #2c3e50;
        }

        /* Partie 1 card */
        .card-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 40px;
            flex-wrap: wrap; /* ✅ Responsive */
        }
        .card {
            background: #fff;
            width: 300px;
            padding: 30px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 6px 12px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 20px rgba(0,0,0,0.2);
        }
        .card h2 {
            margin-bottom: 15px;
            color: #3498db;
        }
        .card p {
            color: #555;
            margin-bottom: 20px;
        }
        .card a {
            display: inline-block;
            background: #3498db;
            color: #fff;
            text-decoration: none;
            padding: 12px 25px;
            border-radius: 8px;
            font-weight: bold;
            transition: background 0.3s ease;
        }
        .card a:hover {
            background: #2c3e50;
        }

        /* Portfolio section */
        .portfolio {
            margin: 60px auto;
            max-width: 700px;
            text-align: center;
            background: linear-gradient(135deg, #3498db, #2ecc71);
            padding: 40px;
            border-radius: 16px;
            color: #fff;
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
            animation: fadeIn 1.5s ease;
        }
        .portfolio h2 {
            font-size: 28px;
            margin-bottom: 10px;
        }
        .portfolio p {
            font-size: 18px;
            margin-bottom: 20px;
        }
        .portfolio::after {
            content: "";
            display: block;
            margin: 20px auto 0;
            width: 60px;
            height: 4px;
            background: #fff;
            border-radius: 2px;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <h1>Welcome To My Portfolio</h1>
    <div class="card-container">
        <div class="card">
            <h2>Atelier 1</h2>
            <p>Découvrez les exercices de la première partie.</p>
            <a href="partie1">Voir l'atelier</a>
        </div>
        <div class="card">
            <h2>Atelier 2</h2>
            <p>La création d'une inscription Web.</p>
            <a href="Inscription">Voir l'atelier</a>
        </div>
        <div class="card">
            <h2>Atelier 3</h2>
            <p>L'ajout des photos</p>
            <a href="Inscription">Voir l'atelier</a>
        </div>
    </div>
    <div class="portfolio">
        <h2>Oussama Laaziz</h2>
        <p>Stagiaire de Première année Développement Digital</p>
    </div>
</body>
</html>