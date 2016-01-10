<?php
/**
 * @author Florian Firmenich
 * @date 2015-11-21 
 * @time 16:24 
 * OnlineDesign
 */
class SearchResult {
    private $name;
    private $length = '12km';
    private $height = '200m';
    private $level = '2';
    private $time = '2h 10m';
    
    public function __construct($name, $num) {
        $this->name = $name;
        $this->num = $num;
        $this->length = $this->randomLength();
        $this->height = $this->randomHeight();
        $this->level = $this->randomLevel();
        $this->time = $this->randomTime();
    }
    
    public function show() {
        echo '<div class="searchresult">';
        echo '    <a href="index.php?p=detail&s=info">';
        echo '        <div class="main">';
        echo '            <img src="../image/demo/route'.$this->num.'_1.jpg" />';
        echo '            <div>';
        echo '                <div class="name">'.$this->name.'</div>';
        echo '                <div class="attributes">';
        echo '                    <div class="length">';
        echo '                        <span class="distance_arrows"><i class="icon ion-arrow-resize"></i></span>';
        echo '                        <span class="text">'.$this->length.'</span>';
        echo '                    </div>';
        echo '                    <div class="height">';
        echo '                        <span><i class="icon ion-arrow-graph-up-right"></i></span>';
        echo '                        <span class="text">'.$this->height.'</span>';
        echo '                    </div>';
        echo '                    <div class="difficulty">';
        echo '                        <span><img src="'.$this->getLevelIcon().'" class="icon_difficulty" /></span>';
        echo '                        <span class="text">'.$this->level.'</span>';
        echo '                    </div>';
        echo '                    <div class="time">';
        echo '                        <span><i class="icon ion-ios-stopwatch-outline"></i></span>';
        echo '                        <span class="text">'.$this->time.'</span>';
        echo '                  </div>';
        echo '                </div>';
        echo '            </div>';
        echo '        </div>';
        echo '    </a>';
        echo '</div>';
    }
    
    private function randomLength() {
        return rand(1,30) . "km";
    }
    
    private function randomHeight() {
        return rand(100,1000) . "hm";
    }
    
    private function randomLevel() {
        switch(rand(1,3)) {
            case 1:
                return 'Anfänger';
            case 2:
                return 'Fortgeschritten';
            case 3:
                return 'Gipfelstürmer';
        }
    }
    
    private function randomTime() {
        $string = '';
        $hours = rand(0,12);
        if($hours > 0) {
            $string .= $hours . "h";
        }
        $minutes = rand(0,60);
        if($minutes > 0) {
            if($hours > 0) {
                $string .= " ";
            }
            $string .= $minutes . "min";
        }
        
        return $string;
    }

    private function getLevelIcon() {
        $level = $this->level;
        switch($level) {
            case 'Anfänger':
                return 'image/icon_schwierigkeitsgrad/1.svg';
                break;
            case 'Fortgeschritten':
                return 'image/icon_schwierigkeitsgrad/2.svg';
                break;
            case 'Gipfelstürmer':
                return 'image/icon_schwierigkeitsgrad/3.svg';
                break;
        }
    }
}
?>