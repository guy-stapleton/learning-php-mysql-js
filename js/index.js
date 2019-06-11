function validateForm(e) {
    console.log('Validating');
    let forminputs = e.target.querySelectorAll(`input[type="text"]`);
    e.preventDefault();
    for (let i = 0; i < forminputs.length; i++) {
        forminputs[i].value.trim() == "" ? console.log('Cannot be blank') : true;
    }
    checkFilledIn(e.target['firstname'].value, forminputs)
    return false;
}

function checkFilledIn(name, error) {
    return name == "" ? document.querySelector('.fnerror').innerText = "Form must contain a name; it cannot be left blank" : true;
}

document.querySelector('#account').addEventListener('submit', validateForm)