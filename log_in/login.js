function validateEmail(){
    const email = document.getElementById('email').value;

    if(!email.match(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/)){
    alert('Enter a valid email');
    }
    else{
        return email;
    }
    
}

function validatPassword(){
    const password = document.getElementById('password').value;

    if(!password.match(/^[(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}]+)*$/)){
    alert('Enter a valid password');
    }
    else{
        return password;
    }
    
}