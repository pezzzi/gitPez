window.onload = function() {

    var form = document.querySelector('form');
    var list = document.querySelector('ul.list-group');
    list.setAttribute('style', 'list-style: none');
    form.onsubmit = function(event) {
        event.preventDefault();
        let item = document.querySelector('#insertToDo');
        list.innerHTML += `<li class = 'list-group-item-info'>${item.value}</li>`;
        let save = document.querySelector('#btnSave');
        save.innerHTML = '<button class = "save" type= "button">Save</button>';
        let forget = document.querySelector('#btnForget');
        forget.innerHTML = '<button type= "button">Forget</button>'
        var saveButton = document.querySelector('.save');
        saveButton.onclick = function() {
            localStorage.setItem('list', list.innerHTML);
        }
    }
    

}