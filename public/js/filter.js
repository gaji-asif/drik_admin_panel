let sorting = null;
let time = null;
let $grid = null;
document.addEventListener("DOMContentLoaded", function(){
    $('.grid').imagesLoaded( function() {
        $grid = $('.grid').masonry({
            itemSelector: '.grid-item'
        });
    });
    $("#sort-menu").on('click', sortImages);
    $("#time-menu").on('click', filterByTime);

});

function sortImages(event) {
    let selectedItem = event.target.closest('li');
    if(selectedItem) {
        sorting = selectedItem.dataset.value;
    }
    filterImages();
}


function filterByTime(event) {
    let target = event.target;
    let selectedItem = target.closest("li");
    time = selectedItem.dataset.value;

    filterImages();
}

function filterImages() {
    let formData = new FormData();
    if(sorting) {
        formData.append('sorting', sorting);
    }
    if(time) {
        formData.append('time', time);
    }
    fetch(baseUrl+"/filter", {
        method: 'POST',
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
        },
        body: formData
    }).then(res => res.json())
        .then(res => {
            let images = res.images;
            let imageElements = [];
            let imagesContainerGrid = document.querySelector(".grid");
            imagesContainerGrid.innerHTML = "";
            images.forEach(image => {
                let imageGridElement = imageGrid(image);
                //imagesContainerGrid.append(imageGridElement);
                imageElements.push(imageGridElement);
            });

            var $elems = $( imageElements );

            $grid.append( $elems ).masonry( 'prepended', $elems );
        })
}
