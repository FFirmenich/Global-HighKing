<section id="radarsection">
    <a onclick="goBack();"><div class="exit_button"><i class="icon ion-close-round"></i></div></a>
    <canvas id="radar_circle"></canvas>
    <div id="radar_position"><i class="icon ion-location"></i></div>
    <a href="index.php?p=radar_ar"><div id="ar" class="round_button">AR</div></a>
    <input id="radar_range" type="range" oninput="document.querySelector('#radar_range_label2').innerHTML = document.querySelector('#radar_range').value + 'km';"/>
    <div id="radar_range_label2">20km</div>
</section>
<?php
if($show != 'demo') {
    echo '<script type="text/javascript" src="src/js/radar_wireframe.js"></script>';
} else {
    echo '<script type="text/javascript" src="src/js/radar_demo.js"></script>';
}
?>