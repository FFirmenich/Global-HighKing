<div id="searchhead">
    <form action="" method="get">
        <?php if(!$search) {
            $placeholder = 'Suchbegriff...';
        } else {
            $placeholder = $search;
        }
        ?>
        <div id="searchfield"><input type="Text" name="s" placeholder="<?php echo $placeholder  ?>" /></div>
        <input type="hidden" name="p" value="search" />
        <button id="searchbutton"><i class="icon ion-ios-search-strong"> </i></button>
        <div id="filter" onclick="toggleFilter();">
            <i class="icon ion-ios-settings-strong"> </i>
        </div>
    </form>
</div>