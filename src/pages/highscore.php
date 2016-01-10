<section id="highscoresection">
    <div id="tabs">
        <div onclick="showWorld();" id="world_button" class="switch_tab selected">
            <i class="icon ion-earth"></i>
        </div>
        <div onclick="showFacebook();" id="facebook_button" class="switch_tab">
            <i class="icon ion-social-facebook"></i>
        </div>
    </div>

    <div id="world">
        <div class="headline">Top 20 - Global</div>
        <?php
        $row = new HighscoreRow(1, 'Michael', 36.246);
        $row->show();
        $row = new HighscoreRow(2, 'Dieter', 33.541);
        $row->show();
        $row = new HighscoreRow(3, 'Sandra', 32.731);
        $row->show();
        $row = new HighscoreRow(4, 'Sven', 31.936);
        $row->show();
        $row = new HighscoreRow(5, 'Louis', 30.326);
        $row->show();
        $row = new HighscoreRow(6, 'Fritz', 29.462);
        $row->show();
        $row = new HighscoreRow(7, 'Peter', 28.023);
        $row->show();
        $row = new HighscoreRow(8, 'Jochen', 27.021);
        $row->show();
        $row = new HighscoreRow(9, 'Philipp', 26.019);
        $row->show();
        $row = new HighscoreRow(10, 'Nico', 25.017);
        $row->show();
        $row = new HighscoreRow(11, 'Heiko', 24.015);
        $row->show();
        $row = new HighscoreRow(12, 'Maria', 23.013);
        $row->show();
        $row = new HighscoreRow(13, 'Kevin', 22.011);
        $row->show();
        $row = new HighscoreRow(14, 'Robert', 21.009);
        $row->show();
        $row = new HighscoreRow(15, 'Bert', 20.007);
        $row->show();
        $row = new HighscoreRow(16, 'Jörg', 19.005);
        $row->show();
        $row = new HighscoreRow(17, 'Karl', 18.003);
        $row->show();
        $row = new HighscoreRow(18, 'Jörg', 17.005);
        $row->show();
        $row = new HighscoreRow(19, 'KaFu', 16.246);
        $row->show();
        $row = new HighscoreRow(20, 'Chris', 12.731);
        $row->show();
        ?>
    </div>
    <div id="facebook">
        <div class="headline">Top 20 - Facebook Freunde</div>
        <?php
        $row = new HighscoreRow(1, 'KaFu', 16.246);
        $row->show();
        $row = new HighscoreRow(2, 'Chris', 12.731);
        $row->show();
        $row = new HighscoreRow(3, 'Jens', 11.936);
        $row->show();
        $row = new HighscoreRow(4, 'Oliver', 8.396);
        $row->show();
        $row = new HighscoreRow(5, 'Florian', 5.462);
        $row->show();
        ?>
    </div>
</section>