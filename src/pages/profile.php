<section id="profilesection">
    <?php
    if(!$user) {
        echo '<div style="text-align: center; padding: 30px 0 0 0;">Kein Nutzer angegeben</div></section>';
        return;
    }
    ?>
    <div id="profilehead">
        <div id="profileimage">
            <div class="img">
                <?php
                if($show == 'demo') {
                    $image = 'image/demo/'.$user.'.jpg';
                    if(is_file($image)) {
                        echo '<img src="'.$image.'" />';
                    } else {
                        echo '<img src="image/demo/user.jpg" />';
                    }
                } else {
                    echo '<img src="image/user.jpg" />';
                }
                ?>
            </div>
        </div>
        <div id="profiledetails">
            <div id="profilename">
                <?php echo $user ?>
            </div>
            <div id="profilelevel">
                Level 4
            </div>
            <div id="profileepbar">
                <div class="inner"></div>
            </div>
            <div id="profileeptext">
                5462 EP
            </div>
        </div>
    </div>
    <div id="profilebody">
        <div id="achievements" onclick="toggleAchievement();">
            <div class="achievement">
                <div id="ach_1" class="inner">
                    <div class="type">W</div>
                    <div class="value">1</div>
                </div>
                <div class="text">
                    <div class="b">Geschafft</div>
                    <div>Sie haben eine Wanderung gemeistert.</div>
                </div>
            </div>
            <div class="achievement">
                <div id="ach_2" class="inner">
                    <div class="type">W</div>
                    <div class="value">10</div>
                </div>
                <div class="text">
                    <div class="b">Wanderlust</div>
                    <div>Sie sind 10 Strecken gewandert.</div>
                </div>
            </div>
            <div class="achievement">
                <div id="ach_3" class="inner">
                    <div class="type">G</div>
                    <div class="value">1500</div>
                </div>
                <div class="text">
                    <div class="b">Gipfelkreuz Bronze</div>
                    <div>Sie haben ein Gipfelkreuz auf 1500m erreicht.</div>
                </div>
            </div>
            <div class="achievement">
                <div id="ach_4" class="inner">
                    <div class="type">FR</div>
                    <div class="value"></div>
                </div>
                <div class="text">
                    <div class="b">Frankreich Abzeichen</div>
                    <div>Eine Wanderung in Frankreich</div>
                </div>
            </div>
            <div class="achievement">
                <div id="ach_5" class="inner">
                    <div class="type">G</div>
                    <div class="value">2000</div>
                </div>
                <div class="text">
                    <div class="b">Gipfelkreuz Silber</div>
                    <div>Sie haben ein Gipfelkreuz auf 2000m erreicht.</div>
                </div>
            </div>
            <div class="progress">
                <label for="progressbar">5 von 110</label>
                <div id="progressbar"><div></div></div>
            </div>
        </div>
    </div>
    <div class="buttonarea" onmousedown="buttonareaClick(0);">
        <div class="layer"></div>
        <a href="index.php?p=highscore"><div id="highscore" class="round_button"><i class="icon ion-ribbon-a"></i></div></a>
        <a href="index.php?p=liked"><div id="liked" class="round_button"><i class="icon ion-ios-heart"></i></div></a>
        <a href="index.php?p=locked"><div id="locked" class="round_button"><i class="icon ion-ios-locked"></i></div></a>
    </div>
</section>