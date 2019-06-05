// USE THIS CODE FOR IMPORTING JQUERY IN CHROME
var jq = document.createElement('script');
jq.src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js";
document.getElementsByTagName('head')[0].appendChild(jq);
// ... give time for script to load, then type (or see below for non wait option)
// needs Jquery
function getRandomColor() {
    var letters = '0123456789ABCDEF'.split('');
    var color = '#';
    for (var i = 0; i < 6; i++ ) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}
function wireframeIt(color){
    $('div').each(function (index, div) {
    var myColor = color? color : getRandomColor();
    console.log(myColor);
    $(div).attr('style', 'border: 1px solid ' + myColor + " !important");
    $(div).css('style','box-sizing: border-box');
    });
}
