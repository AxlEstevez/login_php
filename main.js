$('#formlogin').submit(function (e) {
    e.preventDefault();
    var usuario = $.trim($('#usuario').val());
    var password = $.trim($('#password').val());

    if (usuario.length == "" || password == "") {
        Swal.fire({
            icon: 'warning',
            title: '¡Cuidado!',
            text: 'Por favor llena los campos vacíos'
        });
        return false;
    }
    else {
        $.ajax({
            url: "db/login.php",
            type: "POST",
            datatype: "json",
            data: { usuario: usuario, password: password },
            success: function (data) {
                if (data == "null") {
                    Swal.fire({
                        icon: 'error',
                        title: 'Ooops',
                        text: 'Usuario y/o Password incorrecto'
                    });
                }
                else {
                    Swal.fire({
                        icon: 'success',
                        title: '¡Genial!',
                        text: 'Conexión exitosa',
                        confirmButtonColor: '#81D4FA',
                        confirmButtonText: 'Siguiente'
                    }).then((result) => {
                        if (result.value) {
                            window.location.href = "vistas/pag_inicio.php";
                        }
                    });
                }
            }
        });
    }
});