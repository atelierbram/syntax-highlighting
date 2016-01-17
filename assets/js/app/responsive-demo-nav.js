/**
 * RESPONSIVE NAV JS
 * http://jsfiddle.net/csswizardry/ev598/
 * http://jsfiddle.net/shanomurphy/zp376/
 * http://codepen.io/atelierbram/pen/ALzCs
 * =================
*/

/* The target nav */
var nav = document.getElementById('nav');

/* Insert <a> element for toggle button inside the <nav> element */
var navBtn = document.createElement('a');
navBtn.setAttribute('href', '#');
navBtn.setAttribute('class', 'nav_toggle');
navBtn.insertAdjacentHTML('beforeend', '<span class="btn-text">menu</span>');
nav.insertBefore(navBtn, nav.firstChild);
nav.classList.add('nav-closed');

/* Has Class Function */
function hasClass(e,t){return(new RegExp(' '+t+' ')).test(' '+e.className+' ');}

/* Toggle Class Function */
function toggleClass(e,t){var n=' '+e.className.replace(/[\t\r\n]/g,' ')+' ';if(hasClass(e,t)){while(n.indexOf(' '+t+' ')>=0){n=n.replace(' '+t+' ',' ');}e.className=n.replace(/^\s+|\s+$/g,'');}else{e.className+=' '+t;}}

/* Toggle 'responsive-nav--open' when button is clicked */
navBtn.onclick = function() {
    toggleClass(this.parentNode, 'nav-open');
    toggleClass(this.parentNode, 'nav-closed');
    // nav2.classList.remove('responsive-nav-open');
};

/* Add a class of 'js' to the HTML element */
var root = document.documentElement;
root.className = root.className + ' js';

/* wanneer geklikt op desbetreffende menu link, krijgt de achtergrond van het secondary menu een corresponderende achtergroundkleur via php in template-parts/navigation-secondary.php */

