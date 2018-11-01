window.onload = function() {

var parrafos = document.querySelectorAll('p');

var maxlength = 0;
var maxp = '';
var numberOfMatches = 0;
for (var i = 0; i < parrafos.length; i++) {
  if (parrafos[i].innerText.length > maxlength) {
    maxlength = parrafos[i].innerText.length;
    maxp = parrafos[i];
    var matches = parrafos[i].innerText.match(/ECMA/g);
    numberOfMatches = numberOfMatches + matches.length;
  }
  parrafos[i].innerText = parrafos[i].innerText.replace('ActionScript', 'XXXXXXX');

}

maxp.style.background = 'red';



}
