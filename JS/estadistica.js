 function eliminarRegistro(id) {
        if (confirm('¿Estás seguro de que quieres eliminar este registro?')) {
            $.ajax({
                type: 'POST',
                url: 'eliminar_registro.php', // Ruta a tu script PHP para eliminar registros
                data: { id: id },
                success: function(response) {
                    if (response === 'success') {
                        $('#fila-' + id).remove(); // Eliminar la fila de la tabla
                    } else {
                        alert('Error al eliminar el registro');
                    }
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                    alert('Error al eliminar el registro');
                }
            });
        }
    }

    function abrirModalEdicion(id) {
        // Aquí puedes implementar la lógica para cargar los datos del producto en el formulario dentro del modal
        // Por ejemplo, puedes usar AJAX para obtener los datos del producto desde la base de datos y completar los campos del formulario
        // Luego, muestras el modal de edición
        $('#modalEditar').css('display', 'block');
    }

    function cerrarModalEdicion() {
        $('#modalEditar').css('display', 'none');
    }
