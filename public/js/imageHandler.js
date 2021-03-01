let csrf = null;
let images = [];
let imageFile = null;
let masterId = null;
let lastForm = null;
document.addEventListener("DOMContentLoaded", function(){
    csrf = $('meta[name="csrf-token"]').attr('content');
    let imageSubmitBtn = document.getElementById("image_upload_btn");

    $(function() {
        $(document).on("change",".uploadFile", function(){
            var uploadFile = $(this);
            var files = !!this.files ? this.files : [];
            if (!files.length || !window.FileReader) return;
            // no file selected, or no FileReader support

            if (/^image/.test( files[0].type)){ // only image file
                var reader = new FileReader(); // instance of the FileReader
                reader.readAsDataURL(files[0]); // read the local file
                imageFile = files[0];
                reader.onloadend = function(){ // set image data as background of div
                    //alert(uploadFile.closest(".upimage").find('.imagePreview').length);
                    let imageForm = uploadFile.closest(".imgUp");
                    imageForm.find('.imagePreview').css("background-image", "url("+this.result+")");
                    readImageMetaData(files[0], imageForm);
                }
            }

        });

        $(".imgAdd").click(function(){
            let imageAdded = addImageToList();
            if(!imageAdded) {
                imageFormValidationError();

            } else {
                $(this).closest(".row").find('.imgAdd').before('<div class="imgUp dynamic-imgUp" id="imgUp">' +
                    '<div class="row align-items-center"><div class="col-md-4">' +
                    '<div class="imagePreview"></div>' +
                    '<label class="btn btn-primary theme-btn">Upload Your Image<input type="file" class="uploadFile img" value="Upload Photo"></label>' +
                    '<i class="fa fa-times del"></i></div><div class="col-md-8"><div class="card shadow-sm"><' +
                    'div class="card-body iptc_metadata"><div class="form-row"><div class="col-md-12 text-left">' +
                    '<h6>IPTC Metadata</h6></div><div class="col-sm-12 col-md-12 col-lg-6 form-group text-left form-row align-items-center">' +
                    '<div class="col-sm-3 col-md-2 col-lg-3"><label for="info1 mb-0">Info-1</label></div>' +
                    '<div class="col-sm-9 col-md-10 col-lg-9">' +
                    '<input type="text" class="form-control mb-0 image-height" id="info1" placeholder="Height">' +
                    '<div class="invalid-feedback">Height is required</div>'+
                    '</div>' +
                    '</div><div class="col-sm-12 col-md-12 col-lg-6 form-group text-left form-row align-items-center">' +
                    '<div class="col-sm-3 col-md-2 col-lg-3"><label for="info2 mb-0">Width</label></div>' +
                    '<div class="col-sm-9 col-md-10 col-lg-9">' +
                    '<input type="text" class="form-control mb-0 image-width" id="info2" placeholder="Image width">' +
                    '<div class="invalid-feedback">Width is required</div>'+
                    '</div>' +
                    '</div><div class="col-sm-12 col-md-12 col-lg-6 form-group text-left form-row align-items-center">' +
                    '<div class="col-sm-3 col-md-2 col-lg-3">' +
                    '<label for="info3 mb-0">Author</label>' +
                    '</div>' +
                    '<div class="col-sm-9 col-md-10 col-lg-9">' +
                    '<input type="text" class="form-control mb-0 image-author" id="info3" placeholder="Author"></div>' +
                    '</div><div class="col-sm-12 col-md-12 col-lg-6 form-group text-left form-row align-items-center">' +
                    '<div class="col-sm-3 col-md-2 col-lg-3"><label for="info4 mb-0">Country</label></div>' +
                    '<div class="col-sm-9 col-md-10 col-lg-9">' +
                    '<input type="text" class="form-control mb-0 image-country" placeholder="Country">' +
                    '</div></div><div class="col-sm-12 col-md-12 col-lg-6 form-group text-left form-row align-items-center">' +
                    '<div class="col-sm-3 col-md-2 col-lg-3"><label for="info5 mb-0">City</label></div>' +
                    '<div class="col-sm-9 col-md-10 col-lg-9">' +
                    '<input type="text" class="form-control mb-0 image-city" placeholder="City"></div></div>' +
                    '<div class="col-sm-12 col-md-12 col-lg-6 form-group text-left form-row align-items-center">' +
                    '<div class="col-sm-3 col-md-2 col-lg-3"><label for="info6 mb-0">Caption</label></div>' +
                    '<div class="col-sm-9 col-md-10 col-lg-9"><input type="text" class="form-control mb-0 image-caption" placeholder="Caption"></div></div>' +
                    '<div class="col-sm-12 col-md-12 col-lg-6 form-group text-left form-row align-items-center">' +
                    '<div class="col-sm-3 col-md-2 col-lg-3"><label for="info7 mb-0">Copyright</label></div>' +
                    '<div class="col-sm-9 col-md-10 col-lg-9"><input type="text" class="form-control mb-0 image-copyright" placeholder="Copyright">' +
                    '</div></div></div></div></div></div></div></div>');
                lastForm.classList.remove("was-validated");
                imageFile = null;
            }

        });

        $(document).on("click", "i.del" , function(event) {
            let imgForm = event.target.closest(".imgUp");
            let imageInput = imgForm.querySelector(".uploadFile");
            if(imageInput.files.length > 0) {
                images.pop();
            }
            imgForm.remove();

        });
    });

    imageSubmitBtn.addEventListener("click", function() {
        masterId = null;
        if(!addImageToList()) {
            imageFormValidationError();
        } else {
            uploadImage();
        }

    });

});

function imageFormValidationError() {
    if(!imageFile) {
        swal({
            title: "Missing image file!",
            text: "Image is required",
            icon: "alert",
        });
    }
    lastForm.querySelector(".image-width").setAttribute("required","");
    lastForm.querySelector(".image-height").setAttribute("required","");
    lastForm.classList.add("was-validated");
}

function readImageMetaData(image, imageForm) {
    imageForm = imageForm[0];
    let formData = new FormData();
    formData.append("image", image);
    fetch(`${baseUrl}/get_image_metas`, {
        method: "POST",
        headers: {
            "X-CSRF-TOKEN": csrf
        },
        body: formData
    })
        .then(res => res.json())
        .then(res => {
            let metaData = res.data;
            let height = metaData["Height"];
            let width = metaData["Width"];

            let keywords = metaData["Keywords"] || [];
            keywords = keywords.toString();
            imageForm.querySelector(".image-height").value = height;
            imageForm.querySelector(".image-width").value = width;
            imageForm.querySelector(".image-author").value = metaData["AuthorTitle"];
            imageForm.querySelector(".image-country").value = metaData["Country"];
            imageForm.querySelector(".image-city").value = metaData["City"];
            imageForm.querySelector(".image-caption").value = metaData["Caption"];
            imageForm.querySelector(".image-copyright").value = metaData["Copyright"];
            //imageForm.querySelector(".image-keywords").value = keywords.toString();

        }).catch(function(error) {
            console.log(error);
    })
}

function addImageToList() {
    let imageForms = [...document.querySelectorAll(".imgUp")];
    lastForm = imageForms[imageForms.length-1];

    let imageFile = lastForm.querySelector(".uploadFile").files[0];

    let imageObj = {image: imageFile};

    let height= lastForm.querySelector(".image-height").value;
    let width = lastForm.querySelector(".image-width").value;
    let author = lastForm.querySelector(".image-author").value;
    let country = lastForm.querySelector(".image-country").value;
    let city = lastForm.querySelector(".image-city").value;
    let caption = lastForm.querySelector(".image-caption").value;
    let copyright = lastForm.querySelector(".image-copyright").value;

    let metas = {};

    imageObj.height = height;
    imageObj.width = width;
    metas.AuthorTitle = author || "";
    metas.Country = country || "";
    metas.City = city || "";
    metas.Caption = caption || "";
    metas.Copyright = copyright || "";
    imageObj.metas = metas;
    if(imageObj.image && imageObj.height && imageObj.width) {
        images.push(imageObj);
        return true;
    } else {
        return false;
    }

    images.push(imageObj);
}

function uploadImage(event) {
    let contributor = document.getElementById("contributor");
    contributor = contributor.value;
    let imageObj = images.pop();
    if(!imageObj) {
        swal({
            title: "Success!!",
            text: "Images are uploaded successfully!",
            icon: "success",
        });
        $(".dynamic-imgUp").remove();
        let mainForm = document.querySelector('.imgUp');
        mainForm.querySelector('.imagePreview').removeAttribute('style');
        [...mainForm.querySelectorAll('input')].forEach(input => {
            input.value = '';
        })
        return ;
    }

    let image = imageObj.image;
    let formData = new FormData();
    formData.append("image", image);
    formData.append("width", imageObj.width || "");
    formData.append("height", imageObj.height || "");
    formData.append("contributor", contributor);
    formData.append("metas", JSON.stringify(imageObj.metas));
    if(masterId) {
        formData.append("masterId", masterId);
    }
    saveImage(formData)

}

function saveImage(formData) {
    fetch(`${baseUrl}/upload_image`, {
        method: "POST",
        headers: {
            "X-CSRF-TOKEN": csrf
        },
        body: formData
    })
        .then(res => res.json())
        .then(res => {
            masterId = res.data;
            uploadImage();

        })
}
