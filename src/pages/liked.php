<section id="searchsection">
<div id="searchbody">
<?php
$result = new SearchResult('Kilpisjärvi (Lappland)', 2);
$result->show();
for($i = 1; $i <= 5; $i++) {
    $result = new SearchResult('Favorisierte Wanderung ' . ($i+1), rand(1,3));
    $result->show();
}
?>
</div>
</section>