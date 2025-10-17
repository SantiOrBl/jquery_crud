$(document).ready(function() {
    
        // Cargar roles
    let rolesTable = $('#tablaRoles').DataTable({
        
        ajax: {
            url: '../api/roles.php?accion=leer',
            dataSrc: ''
        },
        columns: [
            { data: 'acciones' },
            { data: 'id' },
            { data: 'nombre' },
            { data: 'descripcion' }
        ],
        layout: {
        topStart: {
            buttons: [ 'copy', 'csv', 'excel', 'pdf', 'print']
            }
        }, 
    columnDefs: [{ orderable: false, targets: 0 }],
        language: { url: 'https://cdn.datatables.net/plug-ins/2.0.3/i18n/es-ES.json' }
    });


    $("#formAgregarRol").submit(function(e) {


        e.preventDefault();
        $.post("../api/roles.php", $(this).serialize(), function(res) {
            if(res ==="existe"){
                Swal.fire({
                    title: "Advertencia!",
                    text: "Ya se encuentra un rol con ese nombre!",
                    icon: "warning"
                });
            }else if(res ==="exito"){
                Swal.fire({
                    title: "Muy Bien!",
                    text: "Se ha creado el registro!",
                    icon: "success"
                });
                $("#modalAgregarRoles").modal("hide");
                rolesTable.ajax.reload(null,false);
            }
            
        });
    });

    $(document).on("click", ".btnEditar", function() {
        let id = $(this).data("id");
        let nombre = $(this).data("nombre");
        let email = $(this).data("descripcion");
        
        $("#editId").val(id);
        $("#editNombre").val(nombre);
        $("#editDescripcion").val(email);

        $("#modalEditarRoles").modal("show");
    });

  
    $("#formEditarRol").submit(function(e) {
        e.preventDefault();
        $.post("../api/roles.php", $(this).serialize(), function(res) {
            if (res === "exito") {
                Swal.fire({
                    title: "Muy Bien!",
                    text: "Se ha modificado el registro!",
                    icon: "success"
                });
                $("#modalEditarRoles").modal("hide");
                rolesTable.ajax.reload(null,false);
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
                $.get("../api/roles.php?accion=eliminar&id=" + id, function() {
                    rolesTable.ajax.reload(null,false);
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
