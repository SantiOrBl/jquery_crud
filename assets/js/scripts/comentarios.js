$(document).ready(function() {
        // Cargar comentarios
    let comentariosTable = $('#tablaComentarios').DataTable({
        
        ajax: {
            url: '../api/comentarios.php?accion=leer',
            dataSrc: ''
        },
        columns: [
            { data: 'acciones' },
            { data: 'id' },
            { data: 'publicacion_id' },
            { data: 'usuario_id' },
            { data: 'comentario' },
            { data: 'fecha_comentario' }
        ],
        layout: {
        topStart: {
            buttons: [ 'copy', 'csv', 'excel', 'pdf', 'print']
            }
        }, 
    columnDefs: [{ orderable: false, targets: 0 }],
        language: { url: 'https://cdn.datatables.net/plug-ins/2.0.3/i18n/es-ES.json' }
    });


    $("#formAgregarComentario").submit(function(e) {


        e.preventDefault();
        $.post("../api/comentarios.php", $(this).serialize(), function(res) {
            if(res ==="no_usuario"){
                Swal.fire({
                    title: "Error!",
                    text: "El usuario seleccionado no existe!",
                    icon: "error"
                });
            }else if(res ==="no_publicacion"){
                Swal.fire({
                    title: "Error!",
                    text: "No existe esa publicacion!",
                    icon: "error"
                });
            }else if(res ==="exito"){
                Swal.fire({
                    title: "Muy Bien!",
                    text: "Se ha creado el registro!",
                    icon: "success"
                });
                $("#modalAgregarComentarios").modal("hide");
                $("#modalAgregarRoles").modal("hide");
                comentariosTable.ajax.reload(null,false);
            }
            
        });
    });

    $(document).on("click", ".btnEditar", function() {
        let id = $(this).data("id");
        let id_publicacion = $(this).data("publicacion_id");
        let id_usuario = $(this).data("usuario_id");
        let comentario = $(this).data("comentario");

        $("#editId").val(id);
        $("#editPublicacion_id").val(id_publicacion);
        $("#editUsuario_id").val(id_usuario);
        $("#editComentario").val(comentario);

        $("#modalEditarComentarios").modal("show");
    });

  
    $("#formEditarComentario").submit(function(e) {
        e.preventDefault();
        $.post("../api/comentarios.php", $(this).serialize(), function(res) {
            if (res === "exito") {
                Swal.fire({
                    title: "Muy Bien!",
                    text: "Se ha modificado el registro!",
                    icon: "success"
                });
                $("#modalEditarComentarios").modal("hide");
                comentariosTable.ajax.reload(null,false);
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
                $.get("../api/comentarios.php?accion=eliminar&id=" + id, function() {
                    comentariosTable.ajax.reload(null,false);
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
