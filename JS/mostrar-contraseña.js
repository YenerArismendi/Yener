function togglePasswordVisibility(){
    var contraseña = document.getElementById('pass');
    var icono = document.querySelector('.bi');

    if(contraseña.type === 'password'){
        contraseña.type = 'text';

    }else{
        contraseña.type = 'password';
    }
}