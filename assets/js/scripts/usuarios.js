$(document).ready(function() {
    // Cargar usuarios
    let usuariosTable = $('#tablaUsuarios').DataTable({
        
        ajax: {
            url: '../api/usuarios.php?accion=leer',
            dataSrc: ''
        },
        columns: [
            { data: 'acciones' },
            { data: 'id' },
            { data: 'nombre' },
            { data: 'email' },
            { data: 'edad' },
            { data: 'fecha_creacion' },
            { data: 'ultima_conexion' },
            { data: 'rol_id' }
        ],
        layout: {
        topStart: {
            buttons: [ 'copy', 'csv', 'excel', 'pdf', 'print']
            }
        }, 
    columnDefs: [{ orderable: false, targets: 0 }],
        language: { url: 'https://cdn.datatables.net/plug-ins/2.0.3/i18n/es-ES.json' }
    });

    // Crear usuario
    $("#formAgregarUsuario").submit(function(e) {
        let contra      = $("[name='contrasena']").val();
        let confirm     = $("[name='confirmacion']").val();

        if (contra !== confirm) {
            alert("La contraseña y su confirmación no coinciden");
            return false;
        }

        e.preventDefault();
        $.post("../api/usuarios.php", $(this).serialize(), function(res) {
        if (res === "no_rol") {
            Swal.fire({
                title: "Error!",
                text: "El rol seleccionado no existe!",
                icon: "error"
            });
            }else if(res ==="existe"){
                Swal.fire({
                    title: "Advertencia!",
                    text: "Ya se encuentra un usuario con ese correo!",
                    icon: "warning"
                });
                }else if(res ==="exito"){
                    Swal.fire({
                        title: "Muy Bien!",
                        text: "Se ha creado el registro!",
                        icon: "success"
                    });
                    $("#modalAgregarUsuarios").modal("hide");
                    usuariosTable.ajax.reload(null,false);
                }
            
            });
        });

    // Editar usuario (abrir modal con datos)
    $(document).on("click", ".btnEditar", function() {
        let id = $(this).data("id");
        let nombre = $(this).data("nombre");
        let email = $(this).data("email");
        let edad = $(this).data("edad");
        let rol_id = $(this).data("rol_id");

        $("#editId").val(id);
        $("#editNombre").val(nombre);
        $("#editEmail").val(email);
        $("#editEdad").val(edad);
        $("#editRol_id").val(rol_id);

   

        $("#modalEditarUsuarios").modal("show");
    });

    // Actualizar usuario
    $("#formEditarUsuario").submit(function(e) {
        e.preventDefault();
        $.post("../api/usuarios.php", $(this).serialize(), function(res) {
            if (res === "exito") {
                Swal.fire({
                    title: "Muy Bien!",
                    text: "Se ha modificado el registro!",
                    icon: "success"
                });
                $("#modalEditarUsuarios").modal("hide");
                usuariosTable.ajax.reload(null,false);
            }else if(res === "error"){
                Swal.fire({
                    title: "Error!",
                    text: "hay un error al modificar!",
                    icon: "error"
                });
            }
            
        });
    });

    // Eliminar usuario
    $(document).on("click", ".btnEliminar", function() {
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: "btn btn-success",
                cancelButton: "btn btn-danger"
            },
            buttonsStyling: false
            });
            swalWithBootstrapButtons.fire({
            title: "Desea Eliminar el Registro?",
            text: "No se puede luego recuperar!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Si, Deseo Eliminar!",
            cancelButtonText: "No, Cancelar!",
            reverseButtons: true
            }).then((result) => {
            if (result.isConfirmed) {
                let id = $(this).data("id");
                $.get("../api/usuarios.php?accion=eliminar&id=" + id, function() {
                    usuariosTable.ajax.reload(null,false);
                });
                // swalWithBootstrapButtons.fire({
                // title: "Deleted!",
                // text: "Your file has been deleted.",
                // icon: "success"
                // });
            } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire({
                title: "Cancelado",
                text: "Se ha cancelado la eliminación",
                icon: "error"
                });
            }
            });


        // if (confirm("¿Seguro que deseas eliminar este usuario?")) {
        //     let id = $(this).data("id");
        //     $.get("api/eliminar.php?id=" + id, function() {
        //         cargarUsuarios();
        //     });
        // }
    });
});
