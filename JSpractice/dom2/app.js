window.onload = function() {

var lista = document.querySelector('ul');

var hijosLista = lista.children;

for (var i = 0; i < hijosLista.length; i++) {
  console.log(hijosLista[i]);
}

console.log(hijosLista[0].parentElement);

var titulo = document.querySelector('h1');

titulo.innerHTML = '<em>Javascript is the best my friends!</em>';

var parrafos = document.querySelectorAll('p');

for (var i = 0; i < parrafos.length; i++) {
  if (i % 2) {
    parrafos[i].innerHTML = 'Párrafo número '+i+': <a href="#">enlace generado desde JS</a>';
  }
}



}
