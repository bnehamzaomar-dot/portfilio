<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oussama Laaziz | Portfolio</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --accent: #00d2ff;
            --accent-dark: #3a7bd5;
            --bg-dark: #0f172a;
            --card-bg: rgba(30, 41, 59, 0.7);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg-dark);
            color: #f8fafc;
            overflow-x: hidden;
            min-height: 100vh;
        }

        /* Moving Background Canvas */
        #bg-canvas {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            background: radial-gradient(circle at center, #1e293b 0%, #0f172a 100%);
        }

        .container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 80px 20px;
        }

        header {
            text-align: center;
            margin-bottom: 80px;
        }

        header h1 {
            font-size: 3.5rem;
            font-weight: 700;
            background: linear-gradient(to right, #fff, var(--accent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 10px;
        }

        header p {
            font-size: 1.2rem;
            color: #94a3b8;
            letter-spacing: 1px;
        }

        /* Portfolio Grid */
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 30px;
        }

        .card {
            background: var(--card-bg);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 16px;
            padding: 40px;
            backdrop-filter: blur(12px);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            display: flex;
            flex-direction: column;
            position: relative;
            overflow: hidden;
        }

        .card::before {
            content: "";
            position: absolute;
            top: 0; left: 0; width: 100%; height: 4px;
            background: linear-gradient(90deg, var(--accent), var(--accent-dark));
            opacity: 0;
            transition: opacity 0.3s;
        }

        .card:hover {
            transform: translateY(-10px);
            border-color: rgba(0, 210, 255, 0.5);
            box-shadow: 0 20px 40px rgba(0,0,0,0.4);
        }

        .card:hover::before {
            opacity: 1;
        }

        .card h2 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: var(--accent);
        }

        .card p {
            color: #94a3b8;
            line-height: 1.6;
            margin-bottom: 30px;
            flex-grow: 1;
        }

        /* Action Buttons */
        .links {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .btn {
            text-decoration: none;
            padding: 10px 22px;
            border-radius: 8px;
            font-size: 0.9rem;
            font-weight: 600;
            transition: 0.3s;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .btn-primary {
            background: var(--accent);
            color: #0f172a;
        }

        .btn-primary:hover {
            background: #fff;
            transform: scale(1.05);
        }

        .btn-secondary {
            background: rgba(255,255,255,0.05);
            color: #fff;
            border: 1px solid rgba(255,255,255,0.2);
        }

        .btn-secondary:hover {
            background: rgba(255,255,255,0.1);
        }

        /* Footer Section */
        footer {
            margin-top: 100px;
            padding: 60px 20px;
            text-align: center;
            border-top: 1px solid rgba(255,255,255,0.05);
            background: rgba(15, 23, 42, 0.9);
        }

        .badge {
            display: inline-block;
            padding: 4px 12px;
            border-radius: 20px;
            background: rgba(0, 210, 255, 0.1);
            color: var(--accent);
            font-size: 0.8rem;
            font-weight: bold;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

    <canvas id="bg-canvas"></canvas>

    <div class="container">
        <header>
            <div class="badge">DISPONIBLE POUR PROJETS</div>
            <h1>Oussama Laaziz</h1>
            <p>Développeur Digital Junior | Portfolio 2026</p>
        </header>

        <main class="grid">
            <div class="card">
                <h2>Atelier 1</h2>
                <p>Exploration des concepts fondamentaux du web et structures algorithmiques de base.</p>
                <div class="links">
                    <a href="partie1" class="btn btn-primary">Explorer</a>
                </div>
            </div>

            <div class="card">
                <h2>Atelier 2</h2>
                <p>Conception d'une interface d'inscription dynamique connectée à une infrastructure API.</p>
                <div class="links">
                    <a href="api/Inscription" class="btn btn-primary">Voir Démo</a>
                </div>
            </div>

            <div class="card">
                <h2>Atelier 3</h2>
                <p>Gestion avancée des formulaires incluant le traitement d'images et la validation côté serveur.</p>
                <div class="links">
                    <a href="Inscription" class="btn btn-primary">Accéder</a>
                    <a href="https://github.com/Oussama-Laaziz07/Atelier_3.git" class="btn btn-secondary">Source Code</a>
                </div>
            </div>

            <div class="card">
                <h2>Atelier 4</h2>
                <p>Système de persistance de données via fichiers textes et génération de rapports techniques PDF.</p>
                <div class="links">
                    <a href="/Rapport4.pdf" target="_blank" class="btn btn-primary">Rapport PDF</a>
                    <a href="https://github.com/Oussama-Laaziz07/Atelier-4.git" class="btn btn-secondary">GitHub</a>
                </div>
            </div>
            <div class="card">
                <h2>Atelier 5</h2>
                <p>Système de persistance de données via fichiers textes et génération de rapports techniques PDF.</p>
                <div class="links">
                    <a href="/Rapport4.pdf" target="_blank" class="btn btn-primary">Rapport PDF</a>
                    <a href="https://github.com/Oussama-Laaziz07/Atelier-4.git" class="btn btn-secondary">GitHub</a>
                </div>
            </div>
            <div class="card">
                <h2>Atelier 6</h2>
                <p>Système de persistance de données via fichiers textes et génération de rapports techniques PDF.</p>
                <div class="links">
                    <a href="/Rapport4.pdf" target="_blank" class="btn btn-primary">Rapport PDF</a>
                    <a href="https://github.com/Oussama-Laaziz07/Atelier-4.git" class="btn btn-secondary">GitHub</a>
                </div>
            </div>
            <div class="card">
                <h2>Atelier 7</h2>
                <p>Système de persistance de données via fichiers textes et génération de rapports techniques PDF.</p>
                <div class="links">
                    <a href="/Rapport4.pdf" target="_blank" class="btn btn-primary">Rapport PDF</a>
                    <a href="https://github.com/Oussama-Laaziz07/Atelier-4.git" class="btn btn-secondary">GitHub</a>
                </div>
            </div>
        </main>
    </div>

    <footer>
        <p><strong>Oussama Laaziz</strong> — Stagiaire en Développement Digital</p>
        <p style="margin-top: 10px; font-size: 0.9rem; color: #64748b;">Propulsé par PHP & Modern CSS</p>
    </footer>

    <script>
        // Particle Background Logic
        const canvas = document.getElementById('bg-canvas');
        const ctx = canvas.getContext('2d');
        let particles = [];

        function init() {
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
            particles = [];
            for (let i = 0; i < 100; i++) {
                particles.push({
                    x: Math.random() * canvas.width,
                    y: Math.random() * canvas.height,
                    vx: (Math.random() - 0.5) * 0.5,
                    vy: (Math.random() - 0.5) * 0.5,
                    size: Math.random() * 2
                });
            }
        }

        function draw() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            ctx.fillStyle = 'rgba(0, 210, 255, 0.5)';
            ctx.strokeStyle = 'rgba(0, 210, 255, 0.05)';
            
            particles.forEach((p, i) => {
                p.x += p.vx;
                p.y += p.vy;

                if (p.x < 0 || p.x > canvas.width) p.vx *= -1;
                if (p.y < 0 || p.y > canvas.height) p.vy *= -1;

                ctx.beginPath();
                ctx.arc(p.x, p.y, p.size, 0, Math.PI * 2);
                ctx.fill();

                for (let j = i + 1; j < particles.length; j++) {
                    const p2 = particles[j];
                    const dist = Math.hypot(p.x - p2.x, p.y - p2.y);
                    if (dist < 150) {
                        ctx.lineWidth = 1 - dist / 150;
                        ctx.beginPath();
                        ctx.moveTo(p.x, p.y);
                        ctx.lineTo(p2.x, p2.y);
                        ctx.stroke();
                    }
                }
            });
            requestAnimationFrame(draw);
        }

        window.addEventListener('resize', init);
        init();
        draw();
    </script>
</body>
</html>