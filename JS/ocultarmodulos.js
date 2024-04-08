
//codigo para el modulo de registro 

function ocultar(){
    document.getElementById('contenedor-padre-productos').style.display= 'none';
    document.getElementById('contenedor-padre-usuario').style.display='none';
    document.getElementById('contenedor-padre-proveedores').style.display = 'block';
    document.getElementById('proveedores').style.backgroundColor='green';
    document.getElementById('proveedores').style.color='white';
    document.getElementById('proveedores').style.opacity='1';
    document.getElementById('proveedores').style.height='6%';
    document.getElementById('proveedores').style.top='17%';
    document.getElementById('productos').style.opacity='.3';
    document.getElementById('productos').style.height='5.3%';
    document.getElementById('productos').style.top='17.8%';
    document.getElementById('usuario').style.opacity='.3';
    document.getElementById('usuario').style.height='5.3%';
    document.getElementById('usuario').style.top='17.8%';
}

function mostrar(){
    document.getElementById('contenedor-padre-proveedores').style.display = 'none';
    document.getElementById('contenedor-padre-productos').style.display= 'block';
    document.getElementById('contenedor-padre-usuario').style.display='none';
    document.getElementById('proveedores').style.opacity='.3';
    document.getElementById('proveedores').style.height='5.3%';
    document.getElementById('proveedores').style.top='17.8%';
    document.getElementById('productos').style.height='6%';
    document.getElementById('productos').style.opacity='1';
    document.getElementById('productos').style.top='17%';
    document.getElementById('usuario').style.opacity='.3';
    document.getElementById('usuario').style.height='5.3%';
    document.getElementById('usuario').style.top='17.8%';

}

function ocultarultimo(){
    document.getElementById('contenedor-padre-productos').style.display= 'none';
    document.getElementById('contenedor-padre-proveedores').style.display = 'none';
    document.getElementById('contenedor-padre-usuario').style.display='block';
    document.getElementById('usuario').style.backgroundColor='green';
    document.getElementById('usuario').style.color='white';
    document.getElementById('usuario').style.opacity='1';
    document.getElementById('usuario').style.height='6%';
    document.getElementById('usuario').style.top='17%';
    document.getElementById('productos').style.opacity='.3';
    document.getElementById('productos').style.height='5.3%';
    document.getElementById('productos').style.top='17.8%';
    document.getElementById('proveedores').style.opacity='.3';
    document.getElementById('proveedores').style.height='5.3%';
    document.getElementById('proveedores').style.top='17.8%';
}

//codigo para ocultar modulos de movimientos 

function ocultarcompra(){
    document.getElementById('contenedor-padre-ingreso-productos').style.display= 'none';
    document.getElementById('contenedor-padre-salida-productos').style.display = 'block';
    document.getElementById('compraProducto').style.backgroundColor='green';
    document.getElementById('compraProducto').style.color='white';
    document.getElementById('compraProducto').style.opacity='1';
    document.getElementById('compraProducto').style.height='6%';
    document.getElementById('compraProducto').style.top='17%';
    document.getElementById('ventaProducto').style.opacity='.3';
    document.getElementById('ventaProducto').style.height='5.3%';
    document.getElementById('ventaProducto').style.top='17.8%';
}

function ocultarventa(){
    document.getElementById('contenedor-padre-ingreso-productos').style.display= 'block';
    document.getElementById('contenedor-padre-salida-productos').style.display = 'none ';
    document.getElementById('ventaProducto').style.backgroundColor='green';
    document.getElementById('ventaProducto').style.color='white';
    document.getElementById('ventaProducto').style.opacity='1';
    document.getElementById('ventaProducto').style.height='6%';
    document.getElementById('ventaProducto').style.top='17%';
    document.getElementById('compraProducto').style.opacity='.3';
    document.getElementById('compraProducto').style.height='5.3%';
    document.getElementById('compraProducto').style.top='17.8%';
}