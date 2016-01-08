<?php
/**
 * @author Florian Firmenich
 * @date 2015-11-11 
 * @time 17:03 
 * OnlineDesign
 */
class HighscoreRow {
    private $position;
    private $name;
    private $points;
    
    public function __construct($position, $name, $points) {
        $this->position = $position;
        $this->name = $name;
        $this->points = $points;
    }
    
    public function show() {
        
        echo '<div class="row">';
        echo '    <div class="position">';
        echo '        <div class="inner">'.$this->position.'</div>';
        echo '    </div>';
        echo '    <div class="ep">'.$this->points.'</div>';
        echo '    <div class="name"><a href="?p=profile&u='.$this->name.'">'.$this->name.'</a></div>';
        echo '</div>';
    }
}
?>