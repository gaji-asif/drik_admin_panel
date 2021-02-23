let imageTable = null;
document.addEventListener("DOMContentLoaded", function() {
    let buttonPanel = document.querySelector('.dt-buttons');

    if(buttonPanel) {
        buttonPanel.classList.add('d-none');
    }

    imageTable = $('#image-table').DataTable({
        "ajax": {
            "url": `${baseUrl}/get_all_images`,
            "dataSrc": ""
        },
        "buttons": [],
        "columns": [
            { "data": "id" },
            { "data": "image_name" },
            { "data": "image_main_url",
              "render": function ( data ) {
                  return '<img style="width: 50px" src="'+"http://"+data+'">';
              } },
            { "data": "height" },
            { "data": "width" },
            {"data": "id",
                "render": function(data) {
                    return `<button onclick="deleteAnImage(${data})" type="button" class="btn btn-danger action-icon"><i class="fa fa-trash-o"></i></button>`;
            }}

        ]
    });
});

function deleteAnImage(imageId) {
    console.log("Hello: ", imageId);
    swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this image!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
        .then((willDelete) => {
            if (willDelete) {
                let formData = new FormData();
                formData.append('imageId', imageId);
                fetch(`${baseUrl}/delete_image`, {
                    method: "POST",
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
                    },
                    body: formData
                })
                    .then(res => res.json())
                    .then(res => {
                        swal("Image has been deleted!", {
                            icon: "success",
                        });
                        imageTable.ajax.reload();
                    })
            } else {
                swal("Your image is safe!");
            }
        });
}
