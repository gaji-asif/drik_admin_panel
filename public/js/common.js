const baseUrl = "http://localhost:8080/drik";

const preLoader = $("\t<div class=\"theme-loader\">\n" +
    "\t\t<div class=\"loader-track\">\n" +
    "\t\t\t<div class=\"preloader-wrapper\">\n" +
    "\t\t\t\t<div class=\"spinner-layer spinner-blue\">\n" +
    "\t\t\t\t\t<div class=\"circle-clipper left\">\n" +
    "\t\t\t\t\t\t<div class=\"circle\"></div>\n" +
    "\t\t\t\t\t</div>\n" +
    "\t\t\t\t\t<div class=\"gap-patch\">\n" +
    "\t\t\t\t\t\t<div class=\"circle\"></div>\n" +
    "\t\t\t\t\t</div>\n" +
    "\t\t\t\t\t<div class=\"circle-clipper right\">\n" +
    "\t\t\t\t\t\t<div class=\"circle\"></div>\n" +
    "\t\t\t\t\t</div>\n" +
    "\t\t\t\t</div>\n" +
    "\t\t\t\t<div class=\"spinner-layer spinner-red\">\n" +
    "\t\t\t\t\t<div class=\"circle-clipper left\">\n" +
    "\t\t\t\t\t\t<div class=\"circle\"></div>\n" +
    "\t\t\t\t\t</div>\n" +
    "\t\t\t\t\t<div class=\"gap-patch\">\n" +
    "\t\t\t\t\t\t<div class=\"circle\"></div>\n" +
    "\t\t\t\t\t</div>\n" +
    "\t\t\t\t\t<div class=\"circle-clipper right\">\n" +
    "\t\t\t\t\t\t<div class=\"circle\"></div>\n" +
    "\t\t\t\t\t</div>\n" +
    "\t\t\t\t</div>\n" +
    "\t\t\t\t<div class=\"spinner-layer spinner-yellow\">\n" +
    "\t\t\t\t\t<div class=\"circle-clipper left\">\n" +
    "\t\t\t\t\t\t<div class=\"circle\"></div>\n" +
    "\t\t\t\t\t</div>\n" +
    "\t\t\t\t\t<div class=\"gap-patch\">\n" +
    "\t\t\t\t\t\t<div class=\"circle\"></div>\n" +
    "\t\t\t\t\t</div>\n" +
    "\t\t\t\t\t<div class=\"circle-clipper right\">\n" +
    "\t\t\t\t\t\t<div class=\"circle\"></div>\n" +
    "\t\t\t\t\t</div>\n" +
    "\t\t\t\t</div>\n" +
    "\t\t\t\t<div class=\"spinner-layer spinner-green\">\n" +
    "\t\t\t\t\t<div class=\"circle-clipper left\">\n" +
    "\t\t\t\t\t\t<div class=\"circle\"></div>\n" +
    "\t\t\t\t\t</div>\n" +
    "\t\t\t\t\t<div class=\"gap-patch\">\n" +
    "\t\t\t\t\t\t<div class=\"circle\"></div>\n" +
    "\t\t\t\t\t</div>\n" +
    "\t\t\t\t\t<div class=\"circle-clipper right\">\n" +
    "\t\t\t\t\t\t<div class=\"circle\"></div>\n" +
    "\t\t\t\t\t</div>\n" +
    "\t\t\t\t</div>\n" +
    "\t\t\t</div>\n" +
    "\t\t</div>\n" +
    "\t</div>");

function showLoader() {
    $("body").append(preLoader);
}

function removeLoader() {
    let preLoader = document.querySelector(".theme-loader");
    if(preLoader) preLoader.remove();
}

function imageGrid(imageObj) {
    let grid =  $(`<div class="grid-item grid-image">
                            <div class="img">
                                <img class="w-100" src="${imageObj.thumbnail_url}" alt="" />

                                <div class="img-details">
                                    <p class="category-name">Mountains</p>
                                    <h4 class="image-name">Mountains with Cloud and Lake</h4>
                                </div>
                                <div class="corner-top"></div>
                                <div class="corner-bottom"></div>
                                <a href="#" class="image-popup" data-toggle="modal" data-target="#image_details"></a>
                            </div>
                        </div>`);

    return grid[0];
}
