<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">

    <title>Document</title>
</head>
<body id="body">
<header>
    <nav class="navbar">
        <div class="nav-brand">
            <img src="assets/img/logo.png" alt="Logo" class="nav-logo">
        </div>
        <ul class="nav-cinema">
            <li class="active"><a title="cinéma 1" href="#">cinéma 1</a></li>
            <li><a title="cinéma 2" href="#">cinéma 2</a></li>
            <li><a title="cinéma 3" href="#">cinéma 3</a></li>
        </ul>
        <div class="nav-link-pdf">
            <a href="">PROGRAMME PDF <img src="assets/img/download.png" alt="Download pdf" class="pdf-download-img"></a>
        </div>
        <ul class="nav-header">
            <li><a title="Nos cinémas" href="#">Nos cinémas</a></li>
            <li><span class="dot"></span></li>
            <li><a title="Scolaires" href="#">Scolaires</a></li>
            <li><span class="dot"></span></li>
            <li><a title="Contact" href="#">Contact</a></li>
            <li><span class="dot"></span></li>
            <li><a title="Info pratiques" href="#">Infos pratiques</a></li>
        </ul>
        <ul class="nav-social">

            <li><a href="#"><img style="width: auto; height: 15px;" src="assets/img/twitter.png" alt="twitter"></a></li>
            <li>|</li>
            <li><a href="#"><img style="width: auto; height: 15px;" src="assets/img/fb.png" alt="facebook"></a></li>
        </ul>
        <div style="display: inline-block">
            <button class="btn-billet" id="btn-billet">BILLETTERIE</button>
            <div id="btn-dropdown">
                <div class="btn-dropdown-ul-before"></div>
                <ul class="btn-dropdown-ul">
                    <li class="active"><a title="cinéma 1" href="#">cinéma 1</a></li>
                    <li><a title="cinéma 2" href="#">cinéma 2</a></li>
                    <li><a title="cinéma 3" href="#">cinéma 3</a></li>
                </ul>
            </div>
        </div>
        <br>

        <ul class="nav-menu">
            <li class="nav-menu-item active" id="menu-trigger" ><a href="#" title="PROGRAMATION">PROGRAMATION</a>

                <div id="menu-dropdown">
                    <ul class="menu-dropdown-ul">
                        <li><a title="cinéma 1" href="#">cinéma 1</a></li>
                        <li><a title="cinéma 2" href="#">cinéma 2</a></li>
                        <li><a title="cinéma 3" href="#">cinéma 3</a></li>
                        <li><a title="cinéma 3" href="#">Calendrier general</a></li>
                    </ul>
                </div>

            </li>
            <li class="nav-menu-item" ><span class="dot"></span></li>
            <li class="nav-menu-item" ><a href="#" title="EVENEMENT">EVENEMENT</a></li>
            <li class="nav-menu-item" ><span class="dot"></span></li>
            <li class="nav-menu-item" ><a href="#" title="AVANT-PREMIÈRES">AVANT-PREMIÈRES</a></li>
            <li class="nav-menu-item" ><span class="dot"></span></li>
            <li class="nav-menu-item" ><a href="#" title="RENDEZ-VOUS">RENDEZ-VOUS</a></li>
            <li class="nav-menu-item" ><span class="dot"></span></li>
            <li class="nav-menu-item" ><a href="#" title="SORTIE NAT   IONALES">SORTIE NATIONALES</a></li>
            <li class="nav-menu-item" ><span class="dot"></span></li>
            <li class="nav-menu-item" ><a href="#" title="FENEC">SAFINIPARIC</a></li>
        </ul>

    </nav>
</header>
<section class="present-section" id="present-section">
    <div class="present">

        <div class="present-info">
            <div class="present-info-text">
                <h2>SORTIE <br>NATIONALES</h2>
                <p class="present-title">Don't Worry, He Won't Get Far On Foot</p>
                <span class="present-by">de Gus Van Sant</span><br>
                <span class="present-release">2018</span>

            </div>
            <ul id="present-slide">
                <li itemid="1" style="color: black" onclick="updateSlider(this.getAttribute('itemid'))">•</li>
                <li itemid="2" onclick="updateSlider(this.getAttribute('itemid'))">◦</li>
                <li itemid="3" onclick="updateSlider(this.getAttribute('itemid'))">◦</li>
            </ul>
        </div>

    </div>

</section>
<section class="program-section">
    <div class="program">
        <h2 class="program-title">Programmatio<span style="color: red">n</span></h2>
        <div class="program-list">

            <ul class="" id="program-ul">
                <div class="program-list-prev" id="program-prev">
                    <
                </div>
              <?php
              setlocale (LC_TIME, 'fr_FR.utf8','fra');
              include_once 'programmation.php';
              foreach ($programmationDates as $date) {
                $date_arr = explode('-', $date);
                echo '<li onclick="alert(\'test\')" class="program-ul-item">';
                echo strtoupper(strftime("%a",strtotime($date))).$date_arr[2].'/'.$date_arr[1];
                echo '</li>';
              }

              ?>
                <div class="program-list-next" id="program-next">
                    >
                </div>
            </ul>

        </div>

        <a class="calendar-link" href="#">Calendrier par semaine <img class="calendar-icon" src="assets/img/calendar.png" alt="calendar"></a>
    </div>
</section>
<script src="js/index.js" type="text/javascript"></script>
<script src="http://livejs.com/live.js" type="text/javascript"></script>

</body>
</html>