window.onload = function() {

  do {
    var tareas = prompt('Cantidad de tareas que desea agregar:');
  } while (isNaN(tareas) || tareas < 3);

  var confirmacion = confirm('La cantidad de tareas deseadas es: '+tareas);

  if (confirmacion == false) {
    do {
      var tareas = prompt('Cantidad de tareas que desea agregar:');
    } while (isNaN(tareas) || tareas < 3);
  }

  var alltasks = [];
  for (var i = 1; i <= tareas; i++) {
    do {
      var task = prompt('Ingrese la tarea número '+i);
      if (task == false) {
        alert('Ingrese una tarea por favor');
      }
    } while (task == false);
    alltasks.push(task);
  }

  var container = document.querySelector('.container');

  var title = document.createElement('h2');
  title.innerText = 'To Do List - Cantidad total: '+tareas;
  container.append(title);

  var tasklist = document.createElement('ul');
  container.append(tasklist);

  alltasks.forEach(function(task){
    var listItem = document.createElement('li');
    listItem.setAttribute('class', 'tareaItem');
    listItem.innerHTML = '<a href="javascript:;">'+task+'</a>';
    tasklist.append(listItem);
  });

  var completed = document.createElement('p');
  var completedTasks = 0;
  completed.innerHTML = 'Tareas completadas: '+'<span id="completedTasks">'+completedTasks+'</span>';
  container.append(completed);

  var taskItems = document.querySelectorAll('.tareaItem');
  for (var i = 0; i < taskItems.length; i++) {
      taskItems[i].onclick = function() {
        var self = this;
        setTimeout(function(){self.style.visibility = 'hidden';}, 500);
        completedTasks = completedTasks + 1;
        document.getElementById('completedTasks').innerText = completedTasks;
    }
  }

  var timer = document.createElement('h1');
  container.append(timer);
  var counter = 6;
  var check = setInterval(function() {
  if (completedTasks == tareas) {
    clearInterval(check);
    var success = document.createElement('p');
    success.innerText = '¡Felicitaciones, estás al día con tus tareas!';
    container.append(success);
    console.log(success);
    var interval = setInterval(function(){
      counter = counter - 1;
      timer.innerText = counter;
      if (counter == 0) {
        clearInterval(interval);
        location.href = 'https://netflix.com'}
      }, 1000)
  }
 }, 2000);
}
