window.onload = function() {

  var regExEmail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
  var regExPass = /^[a-zA-Z]\w{3,100}$/;
  var email = document.querySelector('#email');
  var phone = document.querySelector('#phone');
  var password = document.querySelector('#password');
  var rePassword = document.querySelector('#rePassword');
  var form = document.querySelector('form');
  var formArray = Array.from(form.elements);
  formArray.pop();
  form.onsubmit = function(event) {
    event.preventDefault();
    formArray.forEach( function(element) {
      switch (element.id) {
        case email:
          if (regExEmail.test(this.value) == false || this.value == '') {
            this.classList.add('is-invalid');
            this.parentElement.querySelector('div').innerHTML = '<p> Debe ingresar un email válido </p>';
          } else {
            this.classList.remove('is-invalid');
            this.parentElement.querySelector('div').innerHTML = '';
          }
          break;
        case phone:
          if (this.value == '' || isNaN(this.value)) {
            this.classList.add('is-invalid');
            this.parentElement.querySelector('div').innerHTML = '<p> Debe ingresar un teléfono válido </p>';
          } else {
            this.classList.remove('is-invalid');
            this.parentElement.querySelector('div').innerHTML = '';
          }
          break;
        case password:
          if (this.value == '' || regExPass.test(this.value) == false) {
            this.classList.add('is-invalid');
            this.parentElement.querySelector('div').innerHTML = '<p> La contraseña debe contener al menos 4 caracteres, iniciar con una letra y no pude contener símbolos especiales excepto "_" </p>';
          } else {
            this.classList.remove('is-invalid');
            this.parentElement.querySelector('div').innerHTML = '';
          }
          break;
      }
  })

    var container = document.querySelector('.container');
    form.style.display = 'none';
    document.querySelector('h2').innerText = 'Gracias por registrarte!';
    var dataList = document.createElement('ul');
    container.append(dataList);
    var finalName = document.createElement('li');
    container.append(finalName);
    finalName.innerText = document.querySelector('#fullName').value;
    var finalEmail = document.createElement('li');
    container.append(finalEmail);
    finalEmail.innerText = email.value;
    var finalPhone = document.createElement('li');
    container.append(finalPhone);
    finalPhone.innerText = phone.value;
    var finalCountry = document.createElement('li');
    container.append(finalCountry);
    finalCountry.innerText = document.querySelector('select').selectedIndex;
 }

 phone.addEventListener('blur', function(){
   if (this.value == '' || isNaN(this.value)) {
     this.classList.add('is-invalid');
     this.parentElement.querySelector('div').innerHTML = '<p> Debe ingresar un teléfono válido </p>';
   } else {
     this.classList.remove('is-invalid');
     this.parentElement.querySelector('div').innerHTML = '';
   }
 })
 password.addEventListener('blur', function(){
   if (this.value == '' || regExPass.test(this.value) == false) {
     this.classList.add('is-invalid');
     this.parentElement.querySelector('div').innerHTML = '<p> La contraseña debe contener al menos 4 caracteres, iniciar con una letra y no pude contener símbolos especiales excepto "_" </p>';
   } else {
     this.classList.remove('is-invalid');
     this.parentElement.querySelector('div').innerHTML = '';
   }
 })
 rePassword.addEventListener('blur', function(){
   if (rePassword.value == '' || rePassword.value != password.value) {
     this.classList.add('is-invalid');
     this.parentElement.querySelector('div').innerHTML = '<p> La contraseña debe coincidir con el la ingresada en el campo anterior </p>';
   } else {
     this.classList.remove('is-invalid');
     this.parentElement.querySelector('div').innerHTML = '';
   }
 })
 email.addEventListener('blur', function(){
   if (regExEmail.test(this.value) == false || this.value == '') {
     this.classList.add('is-invalid');
     this.parentElement.querySelector('div').innerHTML = '<p> Debe ingresar un email válido </p>';
   } else {
     this.classList.remove('is-invalid');
     this.parentElement.querySelector('div').innerHTML = '';
   }
 })



}
