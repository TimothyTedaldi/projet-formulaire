document.getElementById('run').addEventListener("click", () => {
    if(document.getElementById('name').value !== ''){
        alert("Les robots ne sont pas les bien venu ici !");
        document.getElementById('inputmessage').value = '';
    }
    else{
        validateInputString('inputcountries')
        validateInputString('inputfirstname');
        validateInputString('inputlastname');
        validateInputString('email');
        validateInputString('inputmessage');
    }
    
});


function validateInputString(idReceived) {
    const el = document.getElementById(idReceived);
  
    if (el.value === '' || el.value === 'Select a subject' || el.value == 'Select a country'){
        el.style.borderColor = 'red';
    }
    else{
        el.style.borderColor = 'green';
    }
}

