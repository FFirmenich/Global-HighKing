<?php
# REQUIRE FILES
require_once 'src/php/SearchResult.php';
require_once 'src/php/HighscoreRow.php';

# COOKIE HANDLING
### wireframe or demo
$show = 'wireframe';
if(!isset($_COOKIE['show'])) {
    setcookie('show','wireframe',time() + (10 * 365 * 24 * 60 * 60));
} else {
    $show = $_COOKIE['show'];
}
### logged in or not
$username = null;
if(isset($_COOKIE['username'])) {
    $username = $_COOKIE['username'];
} 
#PAGE
if(isset($_GET['p'])) {
    $page = $_GET['p'];
    #Pagetitle
    $page_title = str_replace("_ar"," AR",$page);
    switch($page_title) {
        case 'liked':
            $page_title = 'Favoriten';
            break;
        case 'profile':
            $page_title = 'Profil';
            break;
        case 'detail';
            $page_title = 'Kilpisjärvi';
            break;
        case 'settings';
            $page_title = 'Einstellungen';
            break;
    }
    $page_title = ucfirst($page_title);
}
#USERNAME FOR PROFILE PAGE
if(isset($_GET['u'])) {
    $user = $_GET['u'];
}
#SEARCH
if(isset($_GET['s'])) {
    $search = $_GET['s'];
}
?>
<!doctype html>
<html>
    <?php include "src/header/head.php"; ?>
    <body>
        <?php include "src/header/header.php"; ?>
        <main>
            <?php
                switch($page) {
                    case "search":
                        include "src/pages/search.php";
                        break;
                    case "radar":
                        include "src/pages/radar.php";
                        break;
                    case "radar_ar":
                        include "src/pages/radar_ar.html";
                        break;
                    case "highscore":
                        include "src/pages/highscore.php";
                        break;
                    case "liked":
                        include "src/pages/liked.php";
                        break;
                    case "route":
                        include "src/pages/route.html";
                        break;
                    case "route_ar":
                        include "src/pages/route_ar.html";
                        break;
                    case "settings":
                        include "src/pages/settings.html";
                        break;
                    case "detail":
                        include "src/pages/detail.php";
                        break;
                    case "profile":
                        include "src/pages/profile.php";
                        break;
                    case "login":
                        include "src/pages/login.html";
                        break;
                    default:
                        include "src/pages/start.html";
                        break;
                }
            ?>
        </main>
        <?php include "src/footer/footer.html"; ?>
    </body>
</html>