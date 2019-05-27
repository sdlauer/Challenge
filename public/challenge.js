/**
 *  Author     : Dr. Susan Lauer   sdlauer@gmail.com
 */

function initialize(n, min, max) {
    var rn;
    var div = '';
    var div2 = 'factory' + factname();
    for (i = 1; i < n; i++) {
        rn = Math.random() * (max - min) + min;
        div += '<li><p> ' + rn.toFixed(0) + '</p></li>';
    }
    div += '</br>';
    document.getElementById("root").innerHTML += 

            '<table><tr><th><li class="containerFactory"  id ="' + div2 + '" >&nbsp;' + div2 + '</th>' +
            '<th id = "minmax" >' + min + '&nbsp; :&nbsp; ' + max + '</th>' +
            '<ul>' +
            div +
            '</ul>' +
            '</p></li></tr></table>'+
    '<object style="display: show;width:350px; height: 500px"  scrolling = "no" data="generator.html">no html</object>';
    

}
function generateFactory(n, min, max) {
    initialize(n, min, max);
}

function newFactory(n, min, max) {
    n = Math.random() * (16);
    initialize(n.toFixed(0), min, max);

}
function factname() {

    if (typeof factname.c === 'undefined') {
        factname.c = 0;
    }
    factname.c++;
    return factname.c;
}

//function updater(){
//document.getElementById("root").innerHTML +=
//        '<fieldset  class = "chooser" id="factoryChoices"  style="display: show;font-size: 5px;" >' +
//        '<legend id="tiptop">&nbsp;&nbsp;Edit Factory: &nbsp;&nbsp;</legend>' +
//        '<div class="radio-item" >' +
//        '<input type="radio"  id="editName" name="editName" value="1" onclick="getClick(\'editName\');">' +
//        '<label for="editName" style="font-size: 20px" id="editName1">Edit Name</label> ' +
//        '</div> <br />' +
//        '<div class="radio-item" >' +
//        '<input type="radio"  id="newChild"  name="newChild" value="2" onclick="getClick(\'newChildren\');">' +
//        '<label  for="newChild"  id="newChild1" style="font-size: 20px">Generate New Children</label>' +
//        '</div>' +
//        '<label for= "numChildren" style="display: show; font-size: 15px" id= "numChildren1"> &nbsp;&nbsp; Number of Children: &nbsp;&nbsp;     </label>' +
//        '<input   style="display: show; " id= "numChildren" name ="numChildren" ' +
//        'type="number" min="0" max="15" step="1"' +
//        'placeholder=\'    enter a number:     0 & le; number & le; 15 \' >  ' +
//        '<label for= "minValue" style="display: show; font-size: 15px" id= "minValue1"> &nbsp;&nbsp; Minimum Value: &nbsp;&nbsp;     </label>' +
//        '<input   style="display: show; " id= "minValue" name ="minValue" ' +
//        'type="number" ' +
//        'placeholder=\'    enter the minimum value for a child \' > ' +
//        '<label for= "maxValue" style="display: show; font-size: 15px" id= "maxValue1"> &nbsp;&nbsp; Maximum Value: &nbsp;&nbsp;     </label>' +
//        '<input   style="display: show; " id= "maxValue" name ="maxValue" ' +
//        'type="number" min="1" max="50" step="1"' +
//        'placeholder=\'    enter the maximum value for a child \' >   ' +
//        '<p id ="submitEnd">' +
//        '<input type="submit" value = "PROJECT STAND--SUBMIT" /><br />' +
//        '</p>' +
//        '<input type="reset" onclick="mySetter()" value="Reset form">' +
//        '</fieldset>';
//      
//        }
        

// keeps enter from submitting form
function stopRKey(evt) {
    var evt = (evt) ? evt : ((event) ? event : null);
    var node = (evt.target) ? evt.target : ((evt.srcElement) ? evt.srcElement : null);
    if ((evt.keyCode === 13) && (node.type === "text")) {
        return false;
    }
}
//  dynamic onclick for factories
(function(){

  // querySelector, jQuery style
  var $ = function (selector) {
    return document.querySelector(selector);
  };

  // Create function outside loop
  function dynamicEvent() {
    this.innerHTML = 'Dynamic event success.';
    this.className += ' dynamic-success';
  }

  // Iterate over #links <li>
  // Use querySelector to target #links and then get tag names <li>
  var links = $('#links').getElementsByTagName('li');

  // For each <li> inside #links
  for (var i = 0; i < links.length; i++) {
    var link = links[i];

    // <li> onclick, runAlert function
    link.onclick = dynamicEvent;
  }

  // Onsubmit
  $('.generate').onsubmit = function() {

    // Grab the input value
    var dynamicValue = $('.generate-input').value;

    // If empty value
    if(!dynamicValue) {

      alert('Please enter something.');

    } else {

      // Change the submit value
      $('.generate-submit').value = 'Click your item below!';

      // Create the links with the input value as innerHTML
      var li = document.createElement('li');
      li.className = 'containerFactory';
      li.innerHTML = dynamicValue;

      // Append it and attach the event (via onclick)
      $('#links').appendChild(li);
      li.onclick = dynamicEvent;
    }

    // Prevent the form submitting
    return false;
  };
})();


document.onkeypress = stopRKey;