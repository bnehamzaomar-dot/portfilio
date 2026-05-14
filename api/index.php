<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>OMAR BEN HAMZA — Développeur Digital</title>

<link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Mono:wght@300;400;500&display=swap" rel="stylesheet">

<style>
*,
*::before,
*::after{
  margin:0;
  padding:0;
  box-sizing:border-box;
}

:root{
  --bg:#050816;
  --surface:#0b1020;
  --border:#1e293b;
  --accent:#7c3aed;
  --accent2:#06b6d4;
  --text:#f8fafc;
  --muted:#94a3b8;
  --card:#0f172a;
}

html{
  scroll-behavior:smooth;
}

body{
  background:var(--bg);
  color:var(--text);
  font-family:'DM Mono', monospace;
  overflow-x:hidden;
  cursor:none;
  position:relative;
}

/* BACKGROUND */

body::before{
  content:'';
  position:fixed;
  inset:0;
  background-image:
    linear-gradient(var(--border) 1px, transparent 1px),
    linear-gradient(90deg,var(--border) 1px,transparent 1px);
  background-size:60px 60px;
  opacity:.2;
  z-index:0;
  pointer-events:none;
}

body::after{
  content:'';
  position:fixed;
  width:700px;
  height:700px;
  background:radial-gradient(circle, rgba(124,58,237,.18), transparent 70%);
  top:-250px;
  right:-250px;
  z-index:0;
  pointer-events:none;
}

/* CURSOR */

.cursor{
  width:10px;
  height:10px;
  background:var(--accent2);
  border-radius:50%;
  position:fixed;
  top:0;
  left:0;
  pointer-events:none;
  z-index:9999;
  mix-blend-mode:difference;
}

.cursor-ring{
  width:36px;
  height:36px;
  border:1px solid var(--accent2);
  border-radius:50%;
  position:fixed;
  top:0;
  left:0;
  pointer-events:none;
  z-index:9998;
  opacity:.5;
  transition:.2s;
}

/* NAV */

nav{
  position:fixed;
  top:0;
  left:0;
  right:0;
  padding:1.5rem 3rem;
  display:flex;
  justify-content:space-between;
  align-items:center;
  z-index:100;
  backdrop-filter:blur(20px);
  background:rgba(5,8,22,.8);
  border-bottom:1px solid rgba(255,255,255,.05);
}

.logo{
  font-family:'Syne', sans-serif;
  font-weight:800;
  font-size:1.1rem;
  letter-spacing:.05em;
}

.logo span{
  color:var(--accent2);
}

.nav-links{
  display:flex;
  gap:2rem;
}

.nav-links a{
  color:var(--muted);
  text-decoration:none;
  font-size:.75rem;
  letter-spacing:.12em;
  text-transform:uppercase;
  transition:.3s;
}

.nav-links a:hover{
  color:var(--accent2);
}

/* HEADER */

header{
  min-height:100vh;
  display:flex;
  flex-direction:column;
  justify-content:center;
  padding:8rem 3rem;
  position:relative;
  z-index:1;
}

.status-badge{
  display:inline-flex;
  align-items:center;
  gap:.6rem;
  background:rgba(124,58,237,.1);
  border:1px solid rgba(124,58,237,.2);
  padding:.5rem 1rem;
  border-radius:100px;
  font-size:.7rem;
  color:var(--accent2);
  width:fit-content;
  margin-bottom:2rem;
  animation:fadeUp .8s ease both;
}

.status-dot{
  width:7px;
  height:7px;
  border-radius:50%;
  background:var(--accent2);
  animation:pulse 2s infinite;
}

@keyframes pulse{
  0%,100%{
    opacity:1;
    transform:scale(1);
  }
  50%{
    opacity:.4;
    transform:scale(.8);
  }
}

header h1{
  font-family:'Syne', sans-serif;
  font-size:clamp(4rem,10vw,8rem);
  line-height:.9;
  font-weight:800;
  letter-spacing:-.04em;
  margin-bottom:1.5rem;
  animation:fadeUp .8s .1s ease both;
}

header h1 .stroke{
  display:block;
  -webkit-text-stroke:1px var(--accent2);
  color:transparent;
}

header p{
  max-width:550px;
  color:var(--muted);
  line-height:1.9;
  font-size:.9rem;
  animation:fadeUp .8s .2s ease both;
}

/* SECTION */

.container{
  max-width:1200px;
  margin:auto;
  padding:6rem 3rem;
  position:relative;
  z-index:1;
}

.section-label{
  font-size:.65rem;
  letter-spacing:.3em;
  text-transform:uppercase;
  color:var(--accent2);
  margin-bottom:1rem;
}

.container h2{
  font-family:'Syne', sans-serif;
  font-size:clamp(2rem,4vw,4rem);
  margin-bottom:4rem;
}

/* PROJECTS */

.projects{
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(300px,1fr));
  gap:1.8rem;
}

.card{
  background:rgba(15,23,42,.7);
  border:1px solid rgba(124,58,237,.15);
  border-radius:20px;
  overflow:hidden;
  transition:.35s ease;
  backdrop-filter:blur(12px);
  position:relative;
}

.card::before{
  content:'';
  position:absolute;
  inset:0;
  background:linear-gradient(
    135deg,
    rgba(124,58,237,.08),
    transparent,
    rgba(0,229,255,.05)
  );
  opacity:0;
  transition:.4s;
}

.card:hover::before{
  opacity:1;
}

.card:hover{
  transform:translateY(-10px);
  border-color:rgba(124,58,237,.4);
  box-shadow:
    0 10px 40px rgba(124,58,237,.15),
    0 0 20px rgba(0,229,255,.08);
}

.card-body{
  padding:2rem;
  position:relative;
  z-index:2;
}

.card-tag{
  font-size:.65rem;
  letter-spacing:.2em;
  text-transform:uppercase;
  color:var(--accent2);
  margin-bottom:1rem;
  display:block;
}

.card h3{
  font-family:'Syne', sans-serif;
  font-size:1.5rem;
  margin-bottom:1rem;
}

.card p{
  color:var(--muted);
  line-height:1.8;
  font-size:.82rem;
  margin-bottom:1.5rem;
}

/* BUTTON */

.btn{
  display:inline-flex;
  align-items:center;
  gap:.5rem;
  background:linear-gradient(135deg,#7c3aed,#06b6d4);
  color:white;
  text-decoration:none;
  padding:.8rem 1.3rem;
  border-radius:10px;
  font-size:.72rem;
  text-transform:uppercase;
  letter-spacing:.08em;
  transition:.3s ease;
  margin:.3rem;
}

.btn:hover{
  transform:translateY(-3px);
  box-shadow:0 8px 30px rgba(124,58,237,.35);
}

.btn::after{
  content:'→';
}

/* DIVIDER */

.divider{
  height:1px;
  background:linear-gradient(
    90deg,
    transparent,
    var(--border),
    transparent
  );
}

/* FOOTER */

footer{
  border-top:1px solid rgba(255,255,255,.06);
  padding:2rem 3rem;
  display:flex;
  justify-content:space-between;
  align-items:center;
  color:var(--muted);
  font-size:.75rem;
  position:relative;
  z-index:1;
}

/* ANIMATION */

@keyframes fadeUp{
  from{
    opacity:0;
    transform:translateY(30px);
  }
  to{
    opacity:1;
    transform:none;
  }
}

.reveal{
  opacity:0;
  transform:translateY(30px);
  transition:.7s ease;
}

.reveal.vis{
  opacity:1;
  transform:none;
}

/* RESPONSIVE */

@media(max-width:768px){

  nav{
    padding:1rem 1.5rem;
  }

  .nav-links{
    display:none;
  }

  header,
  .container{
    padding-left:1.5rem;
    padding-right:1.5rem;
  }

  footer{
    flex-direction:column;
    gap:1rem;
    text-align:center;
  }

  header h1{
    font-size:4rem;
  }
}
</style>
</head>

<body>

<div class="cursor" id="cursor"></div>
<div class="cursor-ring" id="ring"></div>

<!-- NAV -->

<nav>
  <div class="logo">
    O<span>.</span>BEN HAMZA
  </div>

  <div class="nav-links">
    <a href="#projects">Projets</a>
  </div>
</nav>

<!-- HEADER -->

<header>

  <div class="status-badge">
    <span class="status-dot"></span>
    Étudiant en Développement Digital
  </div>

  <h1>
    OMAR
    <span class="stroke">BEN HAMZA</span>
  </h1>

  <p>
    Passionné par la programmation et la création
    d’expériences web modernes.
    Chaque projet est une opportunité
    d’apprendre, créer et évoluer.
  </p>

</header>

<div class="divider"></div>

<!-- PROJECTS -->

<section class="container" id="projects">

  <div class="section-label">
    Mes Réalisations
  </div>

  <h2>Mes Projets</h2>

  <div class="projects">

    <!-- CARD 1 -->

    <div class="card reveal">
      <div class="card-body">

        <span class="card-tag">PHP</span>

        <h3>Atelier 1</h3>

        <p>
          Premier atelier en PHP avec découverte
          des bases du développement backend.
        </p>

        <a href="/At1.pdf" class="btn" target="_blank">
          Voir PDF
        </a>

      </div>
    </div>

    <!-- CARD 2 -->

    <div class="card reveal">
      <div class="card-body">

        <span class="card-tag">PHP</span>

        <h3>Atelier 2</h3>

        <p>
          Projet PHP dynamique avec manipulation
          des formulaires et logique backend.
        </p>

        <a href="/At2.pdf" class="btn" target="_blank">
          Voir PDF
        </a>

        <a href="atelire2.php" class="btn" target="_blank">
          Projet
        </a>

      </div>
    </div>

    <!-- CARD 3 -->

    <div class="card reveal">
      <div class="card-body">

        <span class="card-tag">PHP</span>

        <h3>Atelier 3</h3>

        <p>
          Développement d’un mini projet PHP
          avec intégration GitHub.
        </p>

        <a href="/At3.pdf" class="btn" target="_blank">
          PDF
        </a>

        <a href="https://github.com/hdvf4336-sketch/atl3.git" class="btn" target="_blank">
          GitHub
        </a>

      </div>
    </div>

    <!-- CARD 4 -->

    <div class="card reveal">
      <div class="card-body">

        <span class="card-tag">PHP</span>

        <h3>Atelier 4</h3>

        <p>
          Projet backend avancé avec organisation
          du code et gestion GitHub.
        </p>

        <a href="/At4.pdf" class="btn" target="_blank">
          Voir PDF
        </a>

        <a href="https://github.com/hdvf4336-sketch/AT4.git" class="btn" target="_blank">
          GitHub
        </a>

      </div>
    </div>

    <!-- CARD 5 -->

    <div class="card reveal">
      <div class="card-body">

        <span class="card-tag">PHP</span>

        <h3>Atelier 5</h3>

        <p>
          Atelier orienté pratique avec amélioration
          des interfaces et logique PHP.
        </p>

        <a href="/At5.pdf" class="btn" target="_blank">
          Voir PDF
        </a>

      </div>
    </div>

    <!-- CARD 6 -->

    <div class="card reveal">
      <div class="card-body">

        <span class="card-tag">PHP</span>

        <h3>Atelier 6</h3>

        <p>
          Projet final d’apprentissage PHP avec
          optimisation et structure moderne.
        </p>

        <a href="/At6.pdf" class="btn" target="_blank">
          PDF
        </a>

      </div>
    </div>

  </div>

</section>

<div class="divider"></div>

<!-- FOOTER -->

<footer>

  <span>
    © 2026 OMAR BEN HAMZA
  </span>

  <span style="color:var(--accent2);">
    Développement Digital
  </span>

</footer>

<!-- SCRIPT -->

<script>

/* CURSOR */

const cursor = document.getElementById('cursor');
const ring = document.getElementById('ring');

let mx = 0;
let my = 0;

let rx = 0;
let ry = 0;

document.addEventListener('mousemove', e => {

  mx = e.clientX;
  my = e.clientY;

  cursor.style.transform =
    `translate(${mx - 5}px, ${my - 5}px)`;

});

(function animate(){

  rx += (mx - rx) * 0.12;
  ry += (my - ry) * 0.12;

  ring.style.transform =
    `translate(${rx - 18}px, ${ry - 18}px)`;

  requestAnimationFrame(animate);

})();

/* HOVER */

document.querySelectorAll('a').forEach(el => {

  el.addEventListener('mouseenter', () => {

    ring.style.width = '60px';
    ring.style.height = '60px';
    ring.style.opacity = '.8';

  });

  el.addEventListener('mouseleave', () => {

    ring.style.width = '36px';
    ring.style.height = '36px';
    ring.style.opacity = '.5';

  });

});

/* REVEAL */

const obs = new IntersectionObserver(entries => {

  entries.forEach((e, i) => {

    if(e.isIntersecting){

      setTimeout(() => {

        e.target.classList.add('vis');

      }, i * 120);

      obs.unobserve(e.target);

    }

  });

}, {
  threshold:0.1
});

document.querySelectorAll('.reveal')
.forEach(el => obs.observe(el));

</script>

</body>
</html>