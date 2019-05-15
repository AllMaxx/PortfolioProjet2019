<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="Portfolio2.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <meta charset="utf-8">
    <title>Portfolio</title>
    <script   src="https://code.jquery.com/jquery-3.3.1.js"></script>

</head>
<body>
<?php include 'database.php'; ?>
<aside>
    <nav>
        <img src="drake.jpeg" alt="drakee">
        <a href="#Accueil"><i class="material-icons md-36">home</i>
            <p>Accueil</p>
        </a>
        <a href="#Projet"><i class="material-icons md-36">desktop_mac</i>
            <p>Projet</p>
        </a>
        <a href="#Competence"><i class="material-icons md-36">poll</i>
            <p>Compétence</p>
        </a>
        <a href="#Contact"><i class="material-icons md-36">mail</i>
            <p>Contact</p>
        </a>
        <button class="themeButton">MODE JOUR / MOODE NUIT</button>
        <div class="headi">
            <div class="progress-container">
                <div class="progress-bar" id="myBar"></div>
            </div>
    </nav>

</aside>



<main>

    <header class="Accueil" id="Accueil">
        <h1 style="font-size:8vw;">Maxence Monnier</h1>
        <h5 style="font-size:5vw;">Etudiant en informatique</h5>

    </header>

</main>

<section class="Projet" id="Projet">
    <h2>Mes projets</h3>
        <p>En ce moment je travaille sur un projet nommné Agility Project, c'est une application web destiné aux professionels. Elle permet de faciliter la gestion d'un projet grâce à un système de planning et de drive, une messagerie instantanée et de la visio conférence. Ce projet est inclus de le cadre de ma formation.</p>
        <img src="agility.png" alt="projet">

</section>

<section class="Competence" id="Competence">
    <h2>Compétences</h2>
    <p>HTML/CSS</p>
    <div class="container">
        <div class="htmlskill">10%</div>
    </div>
    <p>Langage C</p>
    <div class="container">
        <div class="cskill">5%</div>
    </div>
    <p>Javascript</p>
    <div class="container">
        <div class="javascriptskill">7%</div>
    </div>
    <p>Je suis actuellement en première année en école informatique (YNOV Nantes, j'étudie plusieurs langages comme le javascript, le langage C, le HTML / CSS et le python).</p>
    <p>J'aimerais dans un futur proche travailler dans le domaine du développement web.</p>
</section>

<section class="Contact" id="Contact">
    <h2>Contact</h2>
    <form>
        Nom / Prénom:<br>
        <input type="text" name="name" required /><br>
        E-mail:<br>
        <input type="email" name="email" required /><br>
        Message:<br>
        <textarea></textarea><br><br>
        <input type="submit" value="Envoyer">
    </form>

</section>

<script>
    function toggleTheme(){
        document.body.classList.toggle('dark');
    }
    document.querySelector('.themeButton').addEventListener('click', toggleTheme);
</script>
<script>
    window.onscroll = function() {myFunction()};

    function myFunction() {
        var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
        var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        var scrolled = (winScroll / height) * 100;
        document.getElementById("myBar").style.width = scrolled + "%";
    }
</script>
</body>
</html>