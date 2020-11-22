function validateFirstName(){
    const fname = document.getElementById('fname').value;
    
    if(!fname.match(/^[A-Za-z]/)){
    alert('Enter a valid name');
    }
    else{
        return fname;
    }
    
    }
    
    function validateMiddleName(){
        const midname = document.getElementById('midname').value;
    
    if(!midname.match(/^[A-Za-z]/)){
    alert('Enter a valid name');
    }
    else{
        return midname;
        }
    
    }
    
    function validateLastName(){
        const sname = document.getElementById('lname').value;
    
        if(!lname.match(/^[A-Za-z]/)){
        alert('Enter a valid name');
        }
        else{
            return lname;
        }
    }

    function validateGender(){
        const gender = document.getElementById('').value;
    if(!gender.match(/^[A-Za-z]/)){
        alert('Enter a valid gender');
        }
        else{
            return gender;
        }
        
    }
    
    function validateEmail(){
        const memail = document.getElementById('email').value;
    
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

   