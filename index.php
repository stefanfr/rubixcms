<?php
define('USERNAME_REQUIRED', FALSE);
include"global.php";
?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="include/style/css/bootstrap.css" type="text/css"/>
        <!--<link rel="stylesheet" href="include/style/css/frontpage.css" type="text/css"/>-->
        <link rel="stylesheet" href="include/style/css/frontpagec6e6.css" type="text/css"/>
        <link rel="stylesheet" href="include/style/css/style_ix2b4a6.css" type="text/css"/>
        <title>Rubix ~ Welkom op Rubix</title>
        <script src="include/style/js/bootstrap.js"></script>
        <script src="include/style/js/jquery-1.11.0.js"></script>
    </head>
    <body>
        <?php
            $cms->CheckError();
        ?>
        <div class="banner global" role="banner">

            <div role="navigation" class="nav-primary nav-right">
                <div class="logo">
                    <a class="logo-ubuntu" onclick="showLoginContent(); return false;" href="/index.php">
                    </a>
                </div>

                <div id="box-search">
                    <form action="include/function/login.php" method="post">

                        <div id="logincon">
                            <input maxlength="255" name="username" id="login-username" class="form-text" placeholder="Gebruikersnaam" type="text" autocomplete="off">&nbsp;
                            <input maxlength="255" name="password" id="login-password" class="form-text" placeholder="Wachtwoord" type="password" autocomplete="off">&nbsp;
                            &nbsp;	<input style="color: White;"  name="login" value="Login" class="button_style" type="submit">

                        </div><div class="menu_item" style="float: right;"><br>

                        </div>
                        <div id="useronline"><b>0</b> Rubix online</div>
                    </form>
                </div>
            </div>

        </div>
        <!-- Begin Wrapper-->
        <div class="wrapper">
            <div id="login" class="inner-wrapper">
                <div class="hero2">
                    <div style="width:40%;">
                        <p style="font-size:18px; font-weight:300; margin-top:-182px;"></p><h2>Nieuw op <strong>Rubix</strong>?</h2>
                        <p style="font-weight:300;">
                            Dus registreer snel om lid te worden van <strong>het leukste hotel van Nederland</strong><img alt="Muziek" src="include/style/images/achicon_music.png" align="left">
                            In slechts 2 minuten, maak een account en je zult snel genieten van alle voordelen! Als welkomstgeschenk krijg je
                            <strong>9 Miljoen Credits Gratis</strong>, En krijg wekelijks badges en doe mee aan de leukste events.
                            </p>
                    </div>
                    <div id="join-now-button-container" style="left:45%; margin-top:-40px;">
                        <div id="join-now-button-wrapper">
                            <div class="join-now-button">
                                <a href="register.php" class="join-now-link" id="register-link">
                                    <span class="join-now-text-big">Meld je aan</span>
                                <span class="join-now-text-small">(Het is gratis)<span>
                                </span></span></a>
                                <span class="close"></span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div id="loginContent" class="inner-wrapper" style="margin-top:-18px;">
                <div id="desc" style="position: relative; left: 5px;">
                    <div class="row equal-height no-border">
                        <br><br>

                        <div class="four-col box box-textured box-feature-one">
                            <h2>Wat is Rubix ?</h2>
                            <p><img alt="Explore" src="include/style/images/explore.png" align="left">Rubix is een virtuele wereld die is gemaakt voor u en waar u en uw vrienden kunnen ontspannen en deelnemen aan spelletjes en wedstrijden en evenementen!</strong></p>
                        </div>

                        <div class="four-col box box-textured box-feature-two">
                            <h2>Een hele nieuwe sensatie!</h2>
                            <p><img alt="Bouwer" src="include/style/images/builder.png" align="left">We hebben veel toepassingen in een wereld die volledig is <strong>gedefinieerd en gemaakt door jezelf.
                                    wij willen jou het beste bieden de nieuwste meubels en kleding</strong>
                            </p>
                        </div>

                        <div class="four-col box last-col box-textured box-feature-three">
                            <h2>Evenementen van het avontuur!</h2>
                            <p><img alt="Builder2" src="include/style/images/builder2.png" align="left">Speel spelletjes doen mee aan events. Vecht je een weg naar succes, helpen uw eigen naar de TOP - En concurreren tegen andere spelers <strong>Kun jij de uitdaging aan?</strong></p>
                        </div>
                    </div>
                </div>
                <div class="hero" id="#hero">
                    <div>

                        <h1>Beleef het droom hotel<strong> Rubix</strong></h1>
                        <h3 class="tagline" style="margin-top:-12px;"><p>Hier vind je een wereld waar je <strong>veel plezier, vreugde en avontuur</strong> zal beleven.</p><a href="/" style="text-decoration:none">Ontdek Rubix!</a>
                        </h3>

                    </div></div></div>


            </div>

            <!-- /.inner-wrapper -->
        <!-- end Wrapper-->
        <footer>
            <div class="copyright">Copyright <span class="glyphicon glyphicon-copyright-mark"></span> 1998 - 2014 Rubix. Alle rechten voorbehouden.</div>
        </footer>
    </body>
</html>