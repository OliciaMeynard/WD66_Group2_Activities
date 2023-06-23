"use strict"

//////SELECT DOM ELEMENTS
const statusDiv = document.querySelector('.divStatusErrors')
const logInBtn = document.getElementById('logInBtn')
const userNameInput = document.getElementById('username')
const passwordInput = document.getElementById('password')
const divStatusErrors = document.querySelector('.divStatusErrors')

const username = 'admin'
const password = 'password'

const login = (e) =>{
    e.preventDefault()
    if (userNameInput.value === username && passwordInput.value === password) {    
        statusMsg('Successfully Login', 'text-success')
    } else if(userNameInput.value === '' && passwordInput.value === '') {
        statusMsg('Please input email and password', 'text-warning')
    } else {
        statusMsg('Wrong email and password', 'text-danger')

    }

   
}


const statusMsg = (message, className) => {

    const del = divStatusErrors.querySelector('.h5El')
    
    if(del){
        del.remove()
    }
    
    const h5El = document.createElement('h5')
    h5El.classList.add(className, 'bg-light')
    divStatusErrors.appendChild(h5El)
    h5El.classList.add('h5El')
    h5El.textContent = message
    setTimeout( () =>{
        h5El.remove()
    }, 3000
    )
    
}





logInBtn.addEventListener('click', login)