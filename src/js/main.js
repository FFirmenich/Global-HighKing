window.addEventListener("load", init);

var KEY_1 = 49;
var KEY_2 = 50;

function init() {    
    document.addEventListener('keydown', keydown);    
}

function keydown (e) {
    switch (e.keyCode) {
        case KEY_1:
            if(confirm('Auf Wireframe umschalten?')) {
                setShowWireframe();
            }
            break;
        case KEY_2:
            if(confirm('Auf Demo umschalten?')) {
                setShowDemo();
            }
            break;
    }
}

function setShowWireframe() {
    document.cookie = "show=wireframe";
    location.reload();
}

function setShowDemo() {
    document.cookie = "show=demo";
    location.reload();
}

function login(username) {
    setUserName(username);
    location.href = 'index.php';
}

function setUserName(username) {
    document.cookie = 'username='+username;
}

function logout() {
    document.cookie = 'username=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
    location.href = 'index.php';
}

function goBack() {
    window.history.back();
}

/*HIGHSCORE */
function showWorld() {
    if (window.innerWidth >= 760) {
        console.log('fail');
        return;
    }
    console.log('showWorld');
    document.getElementById('world_button').classList.add('selected');
    document.getElementById('facebook_button').classList.remove('selected');
    
    document.getElementById('world').style.display = 'block';
    document.getElementById('facebook').style.display = 'none';
}
function showFacebook() {
    if (window.innerWidth >= 760) {
        return;
    }
    console.log('showFacebook');
    document.getElementById('world_button').classList.remove('selected');
    document.getElementById('facebook_button').classList.add('selected');
    
    document.getElementById('world').style.display = 'none';
    document.getElementById('facebook').style.display = 'block';
    
}
/* SEARCH FILTER */
var is_filter_shown = false;
function toggleFilter() {
    if(!is_filter_shown) {
        showFilter()
    } else {
        hideFilter()
    }
}
function showFilter() {
    updateLength();
    updateHeight();
    updateLevel();
    updateTime();
    
    var filter_window = document.getElementById('filter_window');
    
    filter_window.style.transition = 'top 1s';
    filter_window.style.top = '50px';    
    document.getElementsByTagName('header')[0].style.boxShadow = 'none';
    filter_window.style.boxShadow = '0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24)';
    is_filter_shown = true;
}
function hideFilter() {
    var filter_window = document.getElementById('filter_window');
    filter_window.style.transition = 'top 1s';
    filter_window.style.top = '';
    setTimeout(function(){ 
        document.getElementsByTagName('header')[0].style.boxShadow = '0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24)';
        filter_window.style.boxShadow = 'none';
        filter_window.style.transition = 'none';
    }, 1000);
    is_filter_shown = false;
}
function updateLength() {
    document.getElementById('length_text').innerHTML = document.getElementById('filter_length').value + "km";
}
function updateHeight() {
    document.getElementById('height_text').innerHTML = document.getElementById('filter_height').value + "hm";
}
function updateLevel() {
    var value = document.getElementById('filter_level').value;
    var level_text = document.getElementById('level_text');
    switch(value) {
        case '1':
            level_text.innerHTML = 'Anfänger';
            break;
        case '2':
            level_text.innerHTML = 'Fortgeschritten';
            break;
        case '3':
            level_text.innerHTML = 'Gipfelstürmer';
            break;
    }
}
function updateTime() {
    document.getElementById('time_text').innerHTML = "max. " + document.getElementById('filter_time').value + "h";
}

/* MOVE BUTTONS FROM LEFT TO RIGHT AND BACK - BUTTONAREA */
var mouseMoving = true;
var buttonarea_listener = true;
var buttonarea_left = 0;

function buttonareaClick(left) {
    buttonarea_left = left;
    if(buttonarea_listener == true) {
        buttonarea_listener = false;
        if(mouseMoving) {
            toggleButtons();
        }
        setTimeout(function() {buttonarea_listener = true;}, 1000);
    }
}

var is_buttons_shown = false;
function toggleButtons() {
    if(!is_buttons_shown) {
        showButtons();
    } else {
        hideButtons();
    }
}
function showButtons() {
    var buttonarea = document.querySelector('.buttonarea');
    buttonarea.style.left = buttonarea_left;
    buttonarea.querySelector('.layer').style.zIndex = 4;
    is_buttons_shown = true;
}
function hideButtons() {
    var buttonarea = document.querySelector('.buttonarea');
    buttonarea.style.left = '';
    buttonarea.querySelector('.layer').style.zIndex = '';
    is_buttons_shown = false;
}

/* PROFILE */
var is_achievement_open = false;
function toggleAchievement() {
    if(!is_achievement_open) {
        openAchievement();
    } else {
        closeAchievement();
    }
}
function openAchievement() {
    var achievements = document.querySelector('#achievements');
    
    var children = achievements.children;
    for (var i = 0; i < children.length; i++) {
        if(children[i].className == 'achievement') {
            if(window.innerWidth > 670) {
                children[i].style.flexBasis = '50%';
            } else {
                children[i].style.flexBasis = '100%';
            }
            var inner_children = children[i].children;
            for (var j = 0; j < inner_children.length; j++) {
                if(inner_children[j].className == 'text') {
                    inner_children[j].style.display = 'block';
                }
                if(inner_children[j].className == 'inner') {
                    inner_children[j].style.width = '80px';
                    inner_children[j].style.height = '80px';
                    inner_children[j].style.lineHeight = '80px';
                    inner_children[j].style.fontSize = '28px';
                }
            }
        }
    }
    
    is_achievement_open = true;
}
function closeAchievement() {
    var achievements = document.querySelector('#achievements');
    achievements.style.flexDirection = 'row';
    achievements.style.alignItems = 'flex-start';
    
    var children = achievements.children;
    for (var i = 0; i < children.length; i++) {
        if(children[i].className == 'achievement') {
            children[i].style.flexBasis = '';
            var inner_children = children[i].children;
            for (var j = 0; j < inner_children.length; j++) {
                if(inner_children[j].className == 'text') {
                    inner_children[j].style.display = 'none';
                }
                if(inner_children[j].className == 'inner') {
                    inner_children[j].style.width = '60px';
                    inner_children[j].style.height = '60px';
                    inner_children[j].style.lineHeight = '60px';
                    inner_children[j].style.fontSize = '25px';
                }
            }
        }
    }
    is_achievement_open = false;
}

/* INFO-WINDOW */
var x = 0;
var y = 0;
var is_open = false;
var infowindowlistener = function(event) {
    closeInfoWindow();
}
function showInfoWindow(event){
    is_open = true;
    document.getElementById('radarsection_ar').addEventListener('click', infowindowlistener, true);
    x = event.clientX - 100;
    y = event.clientY - 150;

    document.getElementById('info_box').style.left = x + 'px';
    document.getElementById('info_box').style.top = y + 'px';
    document.getElementById('info_box').style.display = 'block';
}
function closeInfoWindow(){
    document.getElementById('info_box').style.display = 'none';
    is_open = false;
    document.getElementById('radarsection_ar').removeEventListener('click', infowindowlistener, true);
}

function toggleInfoWindow(event){
    if(is_open){
        closeInfoWindow();
    } else{
        showInfoWindow(event);
    }
}
