let clave = true;
function pass() {
    if (clave) {
        document.getElementById("contraseña").type = "password";
        document.getElementById("icono-pass").src ="bootstrap/iconos/eye-fill.svg";
        clave = false;
    }else{
        document.getElementById("contraseña").type = "text";
        document.getElementById("icono-pass").src ="bootstrap/iconos/eye-slash-fill.svg";
        clave = true;
    }
}

