window.onload = function() {

var ironMan = {

  nombre: 'Iron Man',
  equipo: 'Avengers',
  poderes: ['Volar', 'Lanzar misiles', 'Disparar láser'],
  energia: 100,
  getPoder: function() {

    var num = Math.round(Math.random() * 2);
    if (num == 0) {
      this.energia -= 20;
    } else if (num == 1) {
      this.energia -= 45;
    } else if (num == 2) {
      this.energia -= 75;
    }
    return this.poderes[num];

  }


}

var hulk = {

  nombre: 'Hulk',
  equipo: 'Avengers',
  poderes: ['Aplastar', 'Gritar', 'Golpear'],
  energia: 100,
  getPoder: function() {

    var num = Math.round(Math.random() * 2);
    if (num == 0) {
      this.energia -= 45;
    } else if (num == 1) {
      this.energia -= 15;
    } else if (num == 2) {
      this.energia -= 25;
    }
    return this.poderes[num];

  }

}

var botonDePrueba = document.getElementById('miBoton');
botonDePrueba.onclick = function(){ alert("Testeando el click") }


}
