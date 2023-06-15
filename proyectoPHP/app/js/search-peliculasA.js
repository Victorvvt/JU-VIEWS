$(document).ready(() => {
    $('#searchAdmin').keyup((e) => {
        e.preventDefault();

        let searchA = $('#searchAdmin').val();
        console.log(searchA)
        let url = "searchAdmin.php";

        $.ajax({
            type: "POST",
            url,
            data: { searchA: searchA },

            success: function (data) {
                console.log(data)
                $('#tablaAdmin').html(data);
            }
        });

    })



})