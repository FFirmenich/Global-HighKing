<section id="searchsection">
    <?php
    include 'filter.html';
    ?>
    <div id="searchbody" onclick="hideFilter();">
        <?php
        if($search) {
            $result = new SearchResult('Kilpisjärvi (Lappland)', 2);
            $result->show();
            for($i = 0; $i < 15; $i++) {
                $result = new SearchResult('Alpen Wanderung ' . ($i+1), rand(1,3));
                $result->show();
            }
        }
        ?>
    </div>
</section>