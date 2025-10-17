$(document).ready(function() {
    $("#formIngresar").submit(function(e) {
        e.preventDefault();
        $.post("api/iniciar_sesion.php", $(this).serialize(), function(res) {
            if(res ==="ok"){
                window.location.href="paginas/inicio.php";
            }else{
                Swal.fire({
                    title: "Error!",
                    text: "Credenciales erroneas o inexistentes!",
                    icon: "error"
                });
            }
        });
    });
});