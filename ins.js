function validate(){

let nom = document.getElementById('name');
let email = document.getElementById('email');
let ticket = document.getElementById('ticket');

if(nom.value===''){
alert('Name required');
return false;}

if(email.value===''){
    alert('Email required');
    return false;}

  
if (ticket.value === '') {
    alert('Select a ticket');
    return false;}
    

if(!(/^\S+@\S+\.\S+$/.test(email.value))){
    alert('Enter a valid email');
    return false;
}
    return true;
}
