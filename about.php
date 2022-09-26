<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheets/style-base.css">
    <link rel="stylesheet" href="stylesheets/style-about.css">
    <script src="public/js/script-theme.js"></script>
    <title>Sobre Nos</title>
</head>
<body>

<header>

<a class="text" href="index.html">Home</a>
<a class="text" href="about.php">Sobre Nós</a>
<a class="text" href="country.html">Países</a>
</div>
<div id="hamburger-icon" onclick="toggleMobileMenu(this)">
    <div class="bar1"></div>
    <div class="bar2"></div>
    <div class="bar3"></div>
    <ul class="mobile-menu">
        <a class="text1" href="index.html">Home</a>
        <a class="text1" href="about.php">Sobre Nós</a>
        <a class="text1" href="country.html">Países</a>
    </ul>
  </div>
</header>

<?php
    $estrutura = <<<TEXT
            <div class="container">
            <h1>%s</h1>
            <div class = "person">
            <img  class="personimg" src="%s">
            <p>%s</p> 
            </div>
            <a href="github.com"><img class="git" src="public/imgs/svgs/git.svg""=></a>
            <a href="linkedin.com"><img class="link" src="public/imgs/svgs/link.svg""=></a>
            </div>
 
TEXT;
    $perfil = [
        ['Pessoa 1','public/imgs/perfil.png','Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, veritatis. Distinctio quo saepe ut repellat praesentium. Doloribus officia, accusamus eveniet inventore odio, cupiditate, ea quae explicabo velit laboriosam veniam maiores.
        '],
        ['Pessoa 2','public/imgs/perfil.png','Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, veritatis. Distinctio quo saepe ut repellat praesentium. Doloribus officia, accusamus eveniet inventore odio, cupiditate, ea quae explicabo velit laboriosam veniam maiores.
        '],
        ['Pessoa 3','public/imgs/perfil.png','Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, veritatis. Distinctio quo saepe ut repellat praesentium. Doloribus officia, accusamus eveniet inventore odio, cupiditate, ea quae explicabo velit laboriosam veniam maiores.
        '],
        ['Pessoa 4','public/imgs/perfil.png','Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, veritatis. Distinctio quo saepe ut repellat praesentium. Doloribus officia, accusamus eveniet inventore odio, cupiditate, ea quae explicabo velit laboriosam veniam maiores.
        '],
    ];
    foreach ($perfil as $p) {
        printf($estrutura, $p[0],$p[1],$p[2] );
    }
    ?>

<div class="cor" id="cor"> <!--Div da cor tema-->
        <button onclick="dark()">Dark</button> <!--Botão opção "mudar de cor tema"-->
    </div>
    <footer>
        <p>&copy; 2022</p>
    </footer>
</body>
</html>
