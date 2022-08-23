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
            window.location.replace('http://plantmap.ru/suggestions');
        })
        .catch(function (error) {
                console.log(error.response.status);
                // if (error.response.data.errors.username[0] == 'The username field is required.') {
                //     console.log('Поле "Имя пользователя" не может быть пустым!');
                // }
            // console.log(errors);
        })
    }

button.addEventListener('click', function (){
    login_post();
});

