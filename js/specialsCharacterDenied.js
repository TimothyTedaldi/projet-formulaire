function validate(input) {
    const element = document.getElementById(input);
    if(input==="email" || input==="inputmessage"){
        element.value = element.value.replace(/[^a-zA-Z0-9@.]+/, '');
    }
    else{
        element.value = element.value.replace(/[^a-zA-Z.]+/, '');
    }
};