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