$(document).ready(() => {

    $('#searchAdmin').keyup((e) => {
        e.preventDefault();

        let search = $('#searchAdmin').val();
        console.log(search)
        let url = "searchSerieA.php";

        $.ajax({
            type: "POST",
            url,
            data: { search: search },

            success: function (data) {
                console.log(data.body)
                $('#tablaA').html(data);
            }
        });



    })



})