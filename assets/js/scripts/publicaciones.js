$(document).ready(function() {
        // Cargar publicaciones
    let publicacionesTable = $('#tablaPublicaciones').DataTable({
        
        ajax: {
            url: '../api/publicaciones.php?accion=leer',
            dataSrc: ''
        },
        columns: [
            { data: 'acciones' },
            { data: 'id' },
            { data: 'usuario_id' },
            { data: 'titulo' },
            { data: 'contenido' },
            { data: 'fecha_publicacion' }
        ],
        layout: {
        topStart: {
            buttons: [ 'copy', 'csv', 'excel', 'pdf', 'print']
            }
        }, 
    columnDefs: [{ orderable: false, targets: 0 }],
        language: { url: 'https://cdn.datatables.net/plug-ins/2.0.3/i18n/es-ES.json' }
    });

    $("#formAgregarPublicacion").submit(function(e) {


        e.preventDefault();
        $.post("../api/publicaciones.php", $(this).serialize(), function(res) {
            if(res ==="no_usuario"){
                Swal.fire({
                    title: "Error!",
                    text: "El usuario seleccionado no existe!",
                    icon: "error"
                });
            }else if(res ==="existe"){
                Swal.fire({
                    title: "Advertencia!",
                    text: "Ya se encuentra una publicacion con ese titulo!",
                    icon: "warning"
                });
            }else if(res ==="exito"){
                Swal.fire({
                    title: "Muy Bien!",
                    text: "Se ha creado el registro!",
                    icon: "success"
                });
                $("#modalAgregarPublicaciones").modal("hide");
                publicacionesTable.ajax.reload(null,false);
            }
            
        });
    });

    $(document).on("click", ".btnEditar", function() {
        let id = $(this).data("id");
        let id_usuario = $(this).data("usuario_id");
        let titulo = $(this).data("titulo");
        let contenido = $(this).data("contenido");

        $("#editId").val(id);
        $("#editUsuario_id").val(id_usuario);
        $("#editTitulo").val(titulo);
        $("#editContenido").val(contenido);

        $("#modalEditarPublicaciones").modal("show");
    });

  
    $("#formEditarPublicacion").submit(function(e) {
        e.preventDefault();
        $.post("../api/publicaciones.php", $(this).serialize(), function(res) {
            if (res === "exito") {
                Swal.fire({
                    title: "Muy Bien!",
                    text: "Se ha modificado el registro!",
                    icon: "success"
                });
                $("#modalEditarPublicaciones").modal("hide");
                publicacionesTable.ajax.reload(null,false);
            }else if(res === "error"){
                Swal.fire({
                    title: "Error!",
                    text: "hay un error al modificar!",
                    icon: "error"
                });
            }
            
        });
    });

    
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
                $.get("../api/publicaciones.php?accion=eliminar&id=" + id, function() {
                    publicacionesTable.ajax.reload(null,false);
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
