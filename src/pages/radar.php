<section id="radarsection">
    <a onclick="goBack();"><div class="exit_button"><i class="icon ion-close-round"></i></div></a>
    <canvas id="radar_circle"></canvas>
    <div id="radar_position"><i class="icon ion-location"></i></div>
    <a href="index.php?p=radar_ar"><div id="ar" class="round_button">AR</div></a>
    <input id="radar_range" type="range" oninput="document.querySelector('#radar_range_label2').innerHTML = document.querySelector('#radar_range').value + 'km';"/>
    <div id="radar_range_label2">20km</div>
    <div class="info_window" id="info_box">
		<span id="title">Kalpisjärvi Tour</span>
		<div>
			<span id="length"><i class="icon ion-arrow-resize"></i> 7 km </span>
			<span id="height"><i class="icon ion-arrow-graph-up-right"></i> 710 m </span>
		</div>
		<div>
			<span id="difficulty"><img class="icon_difficulty" src="image/icon_schwierigkeitsgrad/2.svg" /> Fortgeschritten </span>
			<span id="time"><i class="icon ion-ios-stopwatch-outline"></i> 3h 30min</span>
		</div>
	</div>
</section>
<?php
if($show != 'demo') {
    echo '<script type="text/javascript" src="src/js/radar_wireframe.js"></script>';
} else {
    echo '<script type="text/javascript" src="src/js/radar_demo.js"></script>';
}
?>