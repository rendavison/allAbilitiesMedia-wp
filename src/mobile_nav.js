var hamburger = document.getElementById('mobile-nav');
var links = document.getElementById('mobile-links');

hamburger.addEventListener('click', function(){
  if (links.classList.contains('show')) {
    links.classList.remove('show')
  } else {
    links.classList.add('show')
  }
});
