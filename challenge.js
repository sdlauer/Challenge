/**
 *  Author     : Dr. Susan Lauer   sdlauer@gmail.com
 */

function initialize(n, min, max) {
    var rn;
    var div = '';
    for (i = 1; i < n; i++) {
        rn = Math.random() * (max - min) + min;
        div += '<li><p>' + rn.toFixed(0) + '</p></li>';
    }
    document.getElementById("root").innerHTML +=
            '<li class="container" onclick ="namer();"><p>Factory </p>' +
            '<ul>' +
            div +
            '</ul>' +
            '</li>';
}
function namer(name) {
    
}
function generateFactory(n, min, max) {
    initialize(n, min, max);
    initialize(n + 3, min, max);
}

function newFactory(n, min, max) {
    initialize(n, min, max);
    initialize(n + 3, min, max);
}