var canvas = document.getElementById('radar_circle');
var context = canvas.getContext('2d');
var radarsection = document.getElementById('radarsection');
var centerX;
var centerY;
var radius;
var sweepAngle = 270;
    
setInterval(drawCanvas, 1);
addHikeCircles(15);

function drawCanvas() {
    createCanvas();
    renderLine();
}

function createCanvas() {
    canvas.width = radarsection.offsetWidth;
    canvas.height = radarsection.offsetHeight;
    
    centerX = canvas.width / 2;
    centerY = canvas.height / 2 - 30;
    if(canvas.height < canvas.width) {
        radius = (canvas.height / 2) - 40;
    } else {
        radius = (canvas.width / 2) - 40;
    }
    document.getElementById('radar_position').style.top = 'centerY';
    
    context.beginPath();
    context.arc(centerX, centerY, radius, 0, dToR(360), false);
    context.fillStyle = 'rgba(255,255,255,0.2)';
    context.fill();
    document.getElementById('radarsection').appendChild(canvas);
}

function renderLine() {
    context.save();
    context.translate( centerX, centerY );
    context.rotate( dToR(sweepAngle) );  
    context.beginPath();
    context.moveTo( 0, 0 );
    context.arc( 0, 0, radius, 6.315, dToR(2), false );
    context.closePath();
    context.fillStyle = "#fff";
    context.fill();  
    context.restore();
    sweepAngle += 0.2;
}

function dToR( degrees ){ 
    return degrees * (Math.PI / 180);
}

function addHikeCircles(count) {
    for(var i = 0; i < count; i++) {
        var hike_circle = document.createElement('div');
        hike_circle.className = 'hike_circle';
        hike_circle.innerHTML = '<i class="icon ion-android-walk">';
        hike_circle.style.left = Math.floor((Math.random() * 95) + 1) + '%';
        hike_circle.style.top = Math.floor((Math.random() * 95) + 1) + '%';
        hike_circle.addEventListener('click',function() {showInfo(this);});
        document.getElementById('radarsection').appendChild(hike_circle);
    }
}

var info_visible = false;

function showInfo(element) {
    if(info_visible) {
        hideInfo();
    }
    var info = document.createElement('div');
    info.className = 'hike_info';
    info.innerHTML = 'Hier kommt die Info hin';
    info.style.left = element.left;
    info.style.top = element.top;
    element.appendChild(info);
    info_visible = true;
}

document.addEventListener('click',hideInfo);

function hideInfo() {
    if(info_visible) {
        elements = document.querySelector(".hike_info");
        console.log(elements);
        elements.parentNode.removeChild(elements)
    }
}