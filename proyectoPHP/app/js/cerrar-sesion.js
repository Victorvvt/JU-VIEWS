// animacion, muestra el boton cerrar sesion al presionar nombre de usuario
$().ready(() => {

    $('#btn-usuario').click((e) => {
        e.preventDefault();
        $('#cerradosesion').removeClass('d-none').toggle();
        
    });






})

