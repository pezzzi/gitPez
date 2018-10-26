window.onload = function() {

var confirmation = confirm('Iniciar?');

if (confirmation == false) {
  location.href = 'https://netflix.com';
} else {
  do {
    var cant_fam = prompt('Cantidad de integrantes en la familia:');
    if (isNaN(cant_fam) || cant_fam < 3) {
      alert('Ingrese la cantidad de integrantes de su familia');
    }
  } while (isNaN(cant_fam) || cant_fam < 3);
    var familia = [];
    for (var i = 0; i < cant_fam; i++) {
      do {
        var name = prompt('Nombre del familiar:');
        if (name == false) {
          alert('Ingrese un nombre');
        }
      } while (name == false);
      do {
        var gastos = prompt('Gastos del familiar:');
        if (gastos == false || isNaN(gastos)) {
          alert('Ingrese los gastos del familiar');
        }
      } while (gastos == false || isNaN(gastos));
      var integrante = {
        nombre: name,
        gastos: gastos,
      }
      familia.push(integrante);
    }
  }


console.log(familia);

var maxgasto = 0;
var maxname = '';

var mingasto = familia[0].gastos;
var minname = '';

familia.forEach(function(integrante){
  if (integrante.gastos > maxgasto) {
    maxgasto = integrante.gastos;
    maxname = integrante.nombre;
  }
});

familia.forEach(function(integrante){
  if (integrante.gastos < mingasto && integrante.gastos > 0) {
    mingasto = integrante.gastos;
    minname = integrante.nombre;
  }
});

console.log('El familiar que mas gasto fue:'.maxname);
console.log('El familiar que menos gasto fue:'.minname);
}
