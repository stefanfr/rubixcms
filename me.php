<?php
    define('USERNAME_REQUIRED', TRUE);
    include"global.php";
    $username = $_SESSION['username']
?>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="include/style/css/bootstrap.css" type="text/css"/>
    <link rel="stylesheet" href="include/style/css/style.css" type="text/css"/>
    <script src="include/style/js/bootstrap.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <title>ME.PHP</title>
</head>
<body>
    <div class="banner global" role="banner">
        <div role="navigation" class="nav-primary nav-right">
            <div class="logo">
                <a class="logo-ubuntu" onclick="showLoginContent(); return false;" href="/index.php">
                </a>
            </div>
            <div id="box-search">
                <div id="useronline"><b><?php echo $users->UsersOnline();?></b> Rubix online</div>
            </div>
        </div>
    </div>
    <div class="container">
        <?php
            require_once("include/nav.php")
        ?>
        <div class="hidden-xs">
            <div class="me col-md-8 col-sm-12">
                <img class="col-md-1 col-sm-1 user" src="http://www.habbo.nl/habbo-imaging/avatarimage?figure=hr-115-42.hd-190-1.ch-215-62.lg-285-91.sh-290-62&amp;action=wlk,wav&amp;head_direction=3&amp;gesture=sml">
                <p class="col-md-5 col-sm-5 username"><b>Username:</b><br /><?php echo $users->UserInfo($username, 'username'); ?></p>
                <p class="col-md-5 col-sm-5 Motto"><b>Motto:</b><br /><?php echo $users->UserInfo($username, 'motto'); ?></p>
                <p class="col-md-3 col-sm-3 enter"><a href="#">Ga naar Rubix</a></p><span class="col-md-1 col-sm-1 close"></span>
                <div class="col-md-4 col-sm-4 credits yellow"><a><b>Credits:</b> <?php echo $users->UserInfo($username, 'credits'); ?></a></div>
                <div class="col-md-4 col-sm-4 credits purple"><a><b>Duckets:</b> <?php echo $users->UserInfo($username, 'activity_points'); ?></a></div>
                <div class="col-md-4 col-sm-4 credits blue"><a><b>Belcredits:</b> <?php echo $users->UserInfo($username, 'belcredits'); ?></a></div>
            </div>
            <div class="article col-md-4 col-sm-4">
                <div class="title blue">
                    <a>Nieuws</a>
                </div>
                <a>blalbalblballalablabl</a>
            </div>
        </div>
    </div>
    <footer>
        <div class="copyright">Copyright <span class="glyphicon glyphicon-copyright-mark"></span> 1998 - 2014 Rubix. Alle rechten voorbehouden.</div>
    </footer>
</body>
</html>