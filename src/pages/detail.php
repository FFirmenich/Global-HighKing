<section id="detailsection">
    <div id="detailhead">
        <div id="detailmenu">
            <div class="element <?php if($_GET['s'] == "info"){echo "selected";} ?>"><a href="index.php?p=detail&s=info">INFO</a></div>
            <div class="element <?php if($_GET['s'] == "map"){echo "selected";} ?>"><a href="index.php?p=detail&s=map">KARTE</a></div>
            <div class="element <?php if($_GET['s'] == "height"){echo "selected";} ?>"><a href="index.php?p=detail&s=height">HÖHENPROFIL</a></div>
        </div>
    </div>
    <div id="detailbody">
        <?php
            switch($_GET['s']) {
                case "info":
                    include "detail/info.html";
                    break;
                case "map":
                    include "detail/map.html";
                    break;
                case "height":
                    include "detail/height.html";
                    break;
            }
        ?>
        <div class="buttonarea" onmousedown="buttonareaClick('-80px');">
            <div class="layer"></div> 
            <a href="index.php?p=liked"><div id="heart" class="round_button"><i class="icon ion-ios-heart"></i></div></a>
            <a href="index.php?p=route"><div id="play" class="round_button"><i class="icon ion-play"></i></div></a>
        </div>
    </div>
</section>