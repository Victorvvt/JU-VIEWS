$(document).ready(() => {
  
    $('#search').keyup((e) => {
        e.preventDefault();

        let search = $('#search').val();
        console.log(search)
        let url = "search.php";

        $.ajax({
            type: "POST",
            url,
            data: { search: search },

            success: function (data) {
                console.log(data)
                $('#tabla').html(data);
            }
        });

    })

    

})