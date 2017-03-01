/*
* based on tutorial and demo by James Hibbard - @jchibbard
* http://www.sitepoint.com/creating-simple-style-switcher/
* http://jsfiddle.net/hibbard_eu/QBW79/4/light/
* Cross browser addEvent function by John Resig
* http://ejohn.org/blog/flexible-javascript-events/
*/
function addEvent(obj, type, fn) {
  "use strict";
  if (obj.attachEvent) {
    obj['e' + type + fn] = fn;
    obj[type + fn] = function () {
      obj['e' + type + fn](window.event);
    };
    obj.attachEvent('on' + type, obj[type + fn]);
  } else { obj.addEventListener(type, fn, false); }
}

function trigger(action, el){
  "use strict";
  if (document.createEvent) {
    var event = document.createEvent('HTMLEvents');
    event.initEvent(action, true, false);
    el.dispatchEvent(event);
  } else {
    el.fireEvent('on' + action);
  }
}

function switchStyles(){
  "use strict";
  var selectedOption = this.options[this.selectedIndex],
      className = selectedOption.value;

  document.body.className = className;
  localStorage.setItem("bodyClassName", className);

  // var linkTag = document.getElementsByTagName('link')[0],
  var linkTag = document.getElementById('styleLink'),
      currentStylesheet = linkTag.href.replace(/^.*[\\\/]/, ''),
      newStylesheet = this.options[this.selectedIndex].value + '.css';

  linkTag.href = linkTag.href.replace(currentStylesheet, newStylesheet);
}

var styleSwitcher = document.getElementById("styleSwitcher");
addEvent(styleSwitcher, "change", switchStyles);

var storedClassName = localStorage.getItem("bodyClassName");
if (storedClassName){
  for(var i=0; i < styleSwitcher.options.length; i++){
    if (styleSwitcher.options[i].value === storedClassName){
      styleSwitcher.selectedIndex = i;
      trigger("change", styleSwitcher);
    }
  }
}
