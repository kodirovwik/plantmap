const axios = require('axios').default
const button = document.querySelector('#button.button');
const username = document.getElementById('name').value;
const password = document.getElementById('password').value;


function login_post() {
    axios.post('/suggestions')
        .then(function (response){
            console.log(response);
        })
        .catch(function (error) {
            console.log(error);
        })
}

button.addEventListener('click', login_post());
