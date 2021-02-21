document.addEventListener("DOMContentLoaded", function() {
    console.log("Content loaded");
    let buttonPanel = document.querySelector('.dt-buttons');

    console.log(buttonPanel);

    if(buttonPanel) {
        buttonPanel.classList.add('d-none');
    }

    $('#image-table').DataTable({
        "ajax": {
            "url": "http://localhost/drik/get_all_images",
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
            { "data": "width" }
        ]
    });
})
