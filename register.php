<?php
define('USERNAME_REQUIRED', FALSE);
include"global.php";
?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="include/style/css/bootstrap.css" type="text/css"/>
    <link rel="stylesheet" href="include/style/css/frontpage.css" type="text/css"/>
    <link rel="stylesheet" href="include/style/css/frontpagec6e6.css" type="text/css"/>
    <link rel="stylesheet" href="include/style/css/style_ix2b4a6.css" type="text/css"/>
    <title>Rubix ~ Welkom op Rubix</title>
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
                    &nbsp;	<input style="color: White;" name="login" value="Login" class="button_style" type="submit">

                </div><div class="menu_item" style="float: right;"><br>

                </div>
                <div id="useronline"><b>0</b> Rubix online</div>
            </form>
        </div>
    </div>

</div>
<!-- Begin Wrapper-->
<div class="wrapper">
    <div id="loginContent" class="inner-wrapper" style="margin-top:-18px;">
        <div class="register">
            <a class="title">Register</a>
            <form action="include/function/register.php" method="POST">
                <span id="user-result"></span>
                <input id="username" name="username" type="text" class="form-control" placeholder="Username">
                <span id="pass-result"></span>
                <input id="password" name="password" type="password" class="form-control" placeholder="Password">
                <span id="passh-result"></span>
                <input id="passwordh" name="passwordh" type="password" class="form-control" placeholder="Herhaal password">
                <span id="mail-result"></span>
                <input id="mail" name="email" type="email" class="form-control" placeholder="Email">
                <input name="birth" type="date" class="form-control" placeholder="1996-01-01">
                <input id="register" name="register" type="submit" class="form-control" value="Registreer">
            </form>
        </div>
        <div class="hero" id="#hero">
            <div>
                <h1>Beleef het droom hotel<strong> Rubix</strong></h1>
                <h3 class="tagline" style="margin-top:-12px;"><p>Hier vind je een wereld waar je <strong>veel plezier, vreugde en avontuur</strong> zal beleven.</p><a href="/" style="text-decoration:none">Ontdek Rubix!</a>
                </h3>
            </div>
        </div>
    </div>
</div>

<!-- /.inner-wrapper -->


</div>
<!-- end Wrapper-->
<footer>
    <div class="copyright">Copyright <span class="glyphicon glyphicon-copyright-mark"></span> 1998 - 2014 Rubix. Alle rechten voorbehouden.</div>
</footer>
</body>
<script src="include/style/js/jquery-1.11.0.js"></script>
<script src="include/style/js/bootstrap.js"></script>
<script src="include/style/js/register.js"></script>
</html>