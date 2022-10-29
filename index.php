<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bibliothèque MBDA</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
<div id="wrapper">
    <header>
        <div id="page-banner">
            <h1 class="title">Bibliothèque MBDA</h1>
            <p>Mes Livres préférés</p>
            <a href="https://github.com/OresteGabo/bibliotheque_mbda"><img src="images/GitHub-Mark/PNG/GitHub-Mark-32px.png" alt="Logo github">GitHub du projet</a>
            <address class="autheur">Par <a rel="author" href="https://www.linkedin.com/in/orestemg/">MUHIRWA GABO Oreste</a></address>
            Le <time datetime="2022-10-28" title="Le 28 Octobre 2022">28 Octobre 2022</time>

        </div>

    </header>
    <div id="book-list">
        <h2 class="title">Les livres de science, technology et histoire</h2>
        <ul id="science-books">
            <li>
                <span class="name"> The Radicalism of the American Revolution </span>
                <div class="author">Autheur: Robert t kiyosaki</div>
                <div class="date_sortie">01/01/2000</div>
                <span class="delete">supprimer</span>
            </li>
            <li>
                <span class="name"> Liberty before Liberalism </span>
                <div class="author">Autheur: Robert t kiyosaki</div>
                <div class="date_sortie">01/01/2000</div>
                <span class="delete">supprimer</span>
            </li>
            <li>
                <span class="name">Homo Deus</span>
                <div class="author">Autheur: Robert t kiyosaki</div>
                <div class="date_sortie">01/01/2000</div>
                <span class="delete">supprimer</span>
            </li>
            <li>
                <span class="name"> 21 leçons pour le XXIe siècle </span>
                <div class="author">Autheur: Robert t kiyosaki</div>
                <div class="date_sortie">01/01/2000</div>
                <span class="delete">supprimer</span>
            </li>


            <li>
                <span class="name">Things fall apart</span>
                <div class="author">Autheur: Robert t kiyosaki</div>
                <div class="date_sortie">01/01/2000</div>
                <span class="delete">supprimer</span>
            </li>
            <li>
                <span class="name">Death in the dojo</span>
                <div class="author">Sue Leather</div>
                <div class="date_sortie">01/01/2000</div>
                <span class="delete">supprimer</span>
            </li>
            <li>
                <span class="name">African child</span>
                <div class="author">Autheur: Robert t kiyosaki</div>
                <div class="date_sortie">01/01/2000</div>
                <span class="delete">supprimer</span>
            </li>
            <li>
                <span class="name">Brief history of human kind</span>
                <div class="author">Autheur: Robert t kiyosaki</div>
                <div class="date_sortie">01/01/2000</div>
                <span class="delete">supprimer</span>
            </li>
            <li>
                <span class="name">Rich dad poor dad</span>
                <div class="author">Autheur: Robert t kiyosaki</div>

                <div class="date_sortie">01/01/2000</div>
                <span class="delete">supprimer</span>
            </li>
        </ul>
        <h2 class="title">Les livres d'éducation financière</h2>
        <ul>
            <li><span class="name">Père riche Père pauvre</span>
                <div class="author">Auteur: Robert Kiyosaki</div>
                <div class="date_sortie">01/01/2000</div>
                <span class="delete">supprimer</span>
            </li>
            <li><span class="name">Why We Want You to Be Rich</span>
                <div class="author">Auteur:Donald trump</div>
                <div class="date_sortie">01/01/2000</div>
                <span class="delete">supprimer</span>
            </li>
        </ul>
    </div>
    <form id="add-book">

        <div>
            </br><input type="text" id="add-book-title-text-field" placeholder="Ajouter le titre du livre" required/>
        </div>
        <div></br><input type="text" id="add-book-author-text-field" placeholder="Ajouter l'auteur du livre" required/></div>
        <div></br><input type="date" id="add-book-release-date-field" placeholder="Date de sortie du livre" required/></div>
        <div><button onclick="ajouterLivre()">Ajouter</button></div>
    </form>
</div>
<script type="text/javascript" src="scripts/script.js"></script>
</body>
</html>