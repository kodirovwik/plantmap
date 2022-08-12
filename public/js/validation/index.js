const axios = require('axios');
const button = document.querySelector('#button.button');
const username = document.getElementById('name');
const password = document.getElementById('password');

function login_post() {
    axios.get('/suggestions')
        .then(function (response){
            console.log(response);
        })
        .catch(function (error) {
            console.log(error);
        })
}

button.addEventListener('click', login_post);
