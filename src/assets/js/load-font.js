var font = new FontFaceObserver('brando', {
  weight: 400
});
font.load().then(function () {
  console.log('Font is available');
  document.documentElement.className = document.documentElement.className.replace(/\bwf-inactive\b/g, '') + ' wf-active '; }, function () {
    console.log('Font is not available');
});
