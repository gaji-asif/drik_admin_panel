let sorting = 'asc';
let time = null;
let $grid = null;
let pagination = null;
document.addEventListener("DOMContentLoaded", function(){
    $('.grid').imagesLoaded( function() {
        $grid = $('.grid').masonry({
            itemSelector: '.grid-item'
        });
    });
    $("#sort-menu").on('click', sortImages);
    $("#time-menu").on('click', filterByTime);

    pagination = document.querySelector(".pagination");

    if(pagination) {
        [...pagination.querySelectorAll('li')].forEach((item, index) => {
            item.dataset.page = index.toString();
        });
        pagination.onclick = changePage;
    }

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

function filterImages(pageNumber=1) {
    let formData = new FormData();
    if(sorting) {
        formData.append('sorting', sorting);
    }
    if(time) {
        formData.append('time', time);
    }
    if(pageNumber) {
        formData.append('page', pageNumber);
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

            let $elems = $( imageElements );

            $grid.append( $elems ).masonry( 'prepended', $elems );
        })
}

function changePage(e) {
    e.preventDefault();
    let target = e.target;
    let listItem = target.closest('li');
    let page = listItem.dataset.page;
    filterImages(page);
    let previouslyActive = pagination.querySelector('.active');
    previouslyActive.classList.remove('active');
    listItem.classList.add('active');

}

