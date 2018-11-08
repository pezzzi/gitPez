window.onload = function() {

    fetch('http://localhost/pezzi/JSpractice/json-ajax/get.php')
        .then(function(response) {
            return response.json();
        })
        .then(function(data) {
            let numberOfMovies = data.length;
            let text = document.querySelector('span');
            text.innerText = `aqui va el ${numberOfMovies} de pelis`;
            var ul = document.querySelector('ul');
            for (var i = 0; i < data.length; i++) {
              ul.innerHTML += '<li>' + data[i].title + '</li>';
            }
        })
        .catch(function(error) {
            console.log('The error was: '+error);
        })

        let form = document.querySelector('form');
        form.onsubmit = function(event) {
            event.preventDefault();
            let datos = {
              title: '',
              rating: '',
              awards: '',
              release_date:''
            }

            let datosFormulario = new FormData();
            let formData = document.querySelector('form').elements;
            datos.title = formData[0].value;
            datos.rating = formData[1].value;
            datos.awards = formData[2].value;
            datos.release_date = formData[3].value;

            datosFormulario.append('data', JSON.stringify(datos));

            fetch('http://localhost/pezzi/JSpractice/json-ajax/post.php', {
                method: 'POST',
                body: datosFormulario
            })
            .then(function(response) {
                return response;
            })
            .catch(function(error) {
                console.log('The error was: ' + error);
            });
        }
}
