window.onload = function() {

var fecha = new Date();

var container = document.querySelector('div');

var weekday = [];
weekday[0]="Lunes";
weekday[1]="Martes";
weekday[2]="Miercoles";
weekday[3]="Jueves";
weekday[4]="Viernes";
weekday[5]="Sabado";
weekday[6]="Domingo";
var dia  = weekday[fecha.getDay() - 1];

var month  = [];
month[0]='Enero';
month[1]='Febrero';
month[2]='Marzo';
month[3]='Abril';
month[4]='Mayo';
month[5]='Junio';
month[6]='Julio';
month[7]='Agosto';
month[8]='Septiembre';
month[9]='Octubre';
month[10]='Noviembre';
month[11]='Diciembre';
var mes = month[fecha.getMonth()];

var p = document.createElement('p');
container.append(p);
p.innerText = dia + ' ' + fecha.getDate() + ' de ' + mes + ' de ' + fecha.getFullYear();



}
