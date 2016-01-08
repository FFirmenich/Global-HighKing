<header>
    <a id="a_home" href="index.php"></a>
    <?php
    switch($page) {}
    if(!$page || $page == 'login') {
        echo '<a id="a_logo" href="index.php"><div id="logo"></div></a>';
    } elseif ($page == 'search') {
        include 'searchhead.php';
    } 
    else {
        echo '<div id="title">' . $page_title . '</div>';
    }
    ?>
    <div id="user_box">
        <?php
        if($username) {
            echo '<a href="index.php?p=profile&u='.$username.'">';
            echo '<div id="user_name">'.$username.'</div>';
            echo '<div id="user_photo">';
            if($show == 'demo') {
                $image = 'image/demo/'.$username.'.jpg';
                if(is_file($image)) {
                    echo '<img src="'.$image.'" />';
                } else {
                    echo '<img src="image/demo/user.jpg" />';
                }
            } else {
                echo '<img src="image/user.jpg" />';
            }
            echo '</div>';
            echo '</a>';
        } else {
            echo '<a href="index.php?p=login"><span id="login">Login</span></a>';
        }
        ?>
    </div>
</header>