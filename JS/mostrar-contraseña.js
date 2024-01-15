function togglePasswordVisibility(){
    var contraseña = document.getElementById('pass');
    var icono = document.querySelector('.bi');

    if(contraseña.type === 'password'){
        contraseña.type = 'text';
        icono.classList.remove('')
        icono.classList.add('bi-eye');
    }else{
        contraseña.type = 'password';
    }
}