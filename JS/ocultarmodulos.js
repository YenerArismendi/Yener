function ocultar(){
    document.getElementById('contenedor-padre-productos').style.display= 'none';
    document.getElementById('contenedor-padre-proveedores').style.display = 'block';
    document.getElementById('proveedores').style.backgroundColor='green';
    document.getElementById('proveedores').style.color='white';
    document.getElementById('proveedores').style.opacity='1';
    document.getElementById('proveedores').style.height='6%';
    document.getElementById('proveedores').style.top='17%';
    document.getElementById('productos').style.opacity='.3';
    document.getElementById('productos').style.height='5.3%';
    document.getElementById('productos').style.top='17.8%';
}

function mostrar(){
    document.getElementById('contenedor-padre-proveedores').style.display = 'none';
    document.getElementById('contenedor-padre-productos').style.display= 'block';
    document.getElementById('proveedores').style.opacity='.3';
    document.getElementById('proveedores').style.height='5.3%';
    document.getElementById('proveedores').style.top='17.8%';
    document.getElementById('productos').style.height='6%';
    document.getElementById('productos').style.opacity='1';
    document.getElementById('productos').style.top='17%';

}
