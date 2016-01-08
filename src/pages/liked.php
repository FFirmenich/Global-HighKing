<section id="searchsection">
<div id="searchbody">
<?php
$result = new SearchResult('Kilpisjärvi (Lappland)');
$result->show();
for($i = 0; $i < 15; $i++) {
    $result = new SearchResult('Gemerkte Wanderung ' . ($i+1));
    $result->show();
}
?>
</div>
</section>