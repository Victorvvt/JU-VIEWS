
let editarModal = document.getElementById('editarModal');
        let eliminarModal = document.getElementById('eliminarModal');
           

        editarModal.addEventListener('shown.bs.modal', (event) => {

            let button = event.relatedTarget;
            let id = button.getAttribute('data-bs-id');

            let inputId = editarModal.querySelector('.modal-body #id')
            let inputNombre = editarModal.querySelector('.modal-body #nombre')
            let inputAño = editarModal.querySelector('.modal-body #año')
            let inputDescripcion = editarModal.querySelector('.modal-body #descripcion')
            let inputGenero = editarModal.querySelector('.modal-body #genero')
            let inputPlataforma = editarModal.querySelector('.modal-body #plataforma')

            let url = "getSerie.php";
            let formData = new FormData();
            formData.append('id', id);

            fetch(url, {
                    method: "POST",
                    body: formData
                }).then(response => response.json())
                .then(data => {

                    console.log(data.nombre)
                    inputId.value = data.id
                    inputNombre.value = data.nombre
                    inputAño.value = data.año
                    inputDescripcion.value = data.descripcion
                    inputGenero.value = data.id_genero
                    inputPlataforma.value = data.id_plataforma


                }).catch(err => console.log(err))

        })

        eliminarModal.addEventListener('shown.bs.modal', (event) => {
            let button = event.relatedTarget;
            let id = button.getAttribute('data-bs-id');
            eliminarModal.querySelector('.modal-footer #id').value = id;

        })

      