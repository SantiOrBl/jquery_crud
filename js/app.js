$(document).ready(function() {
    // Cargar usuarios
    function cargarUsuarios() {
        $.get("api/leer.php", function(data) {
            $("#tablaUsuarios").html(data);
        });
    }
    cargarUsuarios();

    // Crear usuario
    $("#formAgregar").submit(function(e) {
        e.preventDefault();
        $.post("api/crear.php", $(this).serialize(), function() {
            $("#modalAgregar").modal("hide");
            cargarUsuarios();
        });
    });

    // Editar usuario (abrir modal con datos)
    $(document).on("click", ".btnEditar", function() {
        let id = $(this).data("id");
        let nombre = $(this).data("nombre");
        let email = $(this).data("email");
        let edad = $(this).data("edad");

        $("#editId").val(id);
        $("#editNombre").val(nombre);
        $("#editEmail").val(email);
        $("#editEdad").val(edad);

        $("#modalEditar").modal("show");
    });

    // Actualizar usuario
    $("#formEditar").submit(function(e) {
        e.preventDefault();
        $.post("api/editar.php", $(this).serialize(), function() {
            $("#modalEditar").modal("hide");
            cargarUsuarios();
        });
    });

    // Eliminar usuario
    $(document).on("click", ".btnEliminar", function() {
        if (confirm("¿Seguro que deseas eliminar este usuario?")) {
            let id = $(this).data("id");
            $.get("api/eliminar.php?id=" + id, function() {
                cargarUsuarios();
            });
        }
    });
});
