const axios = require('axios').default
const button = document.querySelector('#button.button');

function login_post() {
    const username = document.getElementById('name').value;
    const password = document.getElementById('password').value;

    axios.post('/login', {
        username: username,
        password: password,
    }
    )
        .then(function (response){
            if (response.status === 200) {
                window.location.replace('http://plantmap.ru/');
            }
        })
        .catch(function (error) {
            switch (error.response.status){
                case 401: console.log('Такого пользователя нет');
                break;
                case 422: console.log('Поля пароль и логин не могут быть пустыми');
                break;
            };
                // modal.open();
                // if (error.response.data.errors.username[0] == 'The username field is required.') {
                //     console.log('Поле "Имя пользователя" не может быть пустым!');
                // }
            // console.log(errors);
        })
    }

button.addEventListener('click', function (){
    login_post();
});

