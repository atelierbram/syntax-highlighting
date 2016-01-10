domready(function () {

  var dtHeader = document.getElementById('demo-tilesHeader');
  var toggleBtn1 = document.createElement('button');
  var numberShades = document.getElementById('numberShades');

  toggleBtn1.innerHTML='show 16 shades';
  toggleBtn1.setAttribute('class', 'button button-16');
  toggleBtn1.setAttribute('data-text-swap', 'show orginal 7 shades');
  toggleBtn1.setAttribute('data-text-original', 'show 16 shades');

  dtHeader.insertBefore(toggleBtn1, dtHeader.firstChild);

  // https://www.jamestease.co.uk/blether/add-remove-or-toggle-classes-using-vanilla-javascript
  // First we detect the click event
  toggleBtn1.addEventListener('click', function () {
    // querySelectorAll returns all the nodes it finds with the selector
    // however, you can't iterate over querySelectorAll results (!!)
    // so this is a workaround - call Array.map and pass in the
    // list of nodes along with a function
    // technically querySelectorAll returns a NodeList not an Array so
    /// doesn't have standard array functions
    [].map.call(document.querySelectorAll('.shade-added'), function(el) {

      // classList is the key here - contains functions to manipulate
      // classes on an element
      el.classList.toggle('hidden');
    });

    [].map.call(document.querySelectorAll('.shade-original'), function(el) {
      el.classList.toggle('w-1v7');
    });

    [].map.call(document.querySelectorAll('.demo-tiles'), function(el) {
      el.classList.toggle('collapsed');
    });

    // var button = document.querySelectorAll("button")[0];
    // https://css-tricks.com/swapping-out-text-five-different-ways/
    // toggleBtn1.addEventListener('click', function() {
    if (toggleBtn1.getAttribute("data-text-swap") == toggleBtn1.innerHTML) {
      toggleBtn1.innerHTML = toggleBtn1.getAttribute("data-text-original");
    } else {
      toggleBtn1.setAttribute("data-text-original", toggleBtn1.innerHTML);
      toggleBtn1.innerHTML = toggleBtn1.getAttribute("data-text-swap");
    }

    if (numberShades.getAttribute("data-text-swap") == numberShades.innerHTML) {
      numberShades.innerHTML = numberShades.getAttribute("data-text-original");
    } else {
      numberShades.setAttribute("data-text-original", numberShades.innerHTML);
      numberShades.innerHTML = numberShades.getAttribute("data-text-swap");
    }
  }, false);

  });
