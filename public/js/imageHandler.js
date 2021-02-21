let csrf = null;
let images = [];
let imageFile = null;
let masterId = null;
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
            addImageToList();
            $(this).closest(".row").find('.imgAdd').before('<div class="imgUp dynamic-imgUp" id="imgUp"><div class="row align-items-center"><div class="col-md-4"><div class="imagePreview"></div><label class="btn btn-primary theme-btn">Upload Your Image<input type="file" class="uploadFile img" value="Upload Photo"></label><i class="fa fa-times del"></i></div><div class="col-md-8"><div class="card shadow-sm"><div class="card-body iptc_metadata"><div class="form-row"><div class="col-md-12 text-left"><h6>IPTC Metadata</h6></div><div class="col-sm-12 col-md-12 col-lg-6 form-group text-left form-row align-items-center"><div class="col-sm-3 col-md-2 col-lg-3"><label for="info1 mb-0">Info-1</label></div><div class="col-sm-9 col-md-10 col-lg-9"><input type="text" class="form-control mb-0 image-height" id="info1" placeholder="Height"></div></div><div class="col-sm-12 col-md-12 col-lg-6 form-group text-left form-row align-items-center"><div class="col-sm-3 col-md-2 col-lg-3"><label for="info2 mb-0">Width</label></div><div class="col-sm-9 col-md-10 col-lg-9"><input type="text" class="form-control mb-0 image-width" id="info2" placeholder="Image width"></div></div><div class="col-sm-12 col-md-12 col-lg-6 form-group text-left form-row align-items-center"><div class="col-sm-3 col-md-2 col-lg-3"><label for="info3 mb-0">Info-3</label></div><div class="col-sm-9 col-md-10 col-lg-9"><input type="text" class="form-control mb-0" id="info3" placeholder="Info-3"></div></div><div class="col-sm-12 col-md-12 col-lg-6 form-group text-left form-row align-items-center"><div class="col-sm-3 col-md-2 col-lg-3"><label for="info4 mb-0">Info-4</label></div><div class="col-sm-9 col-md-10 col-lg-9"><input type="text" class="form-control mb-0" id="info4" placeholder="Info-4"></div></div><div class="col-sm-12 col-md-12 col-lg-6 form-group text-left form-row align-items-center"><div class="col-sm-3 col-md-2 col-lg-3"><label for="info5 mb-0">Info-5</label></div><div class="col-sm-9 col-md-10 col-lg-9"><input type="text" class="form-control mb-0" id="info5" placeholder="Info-5"></div></div><div class="col-sm-12 col-md-12 col-lg-6 form-group text-left form-row align-items-center"><div class="col-sm-3 col-md-2 col-lg-3"><label for="info6 mb-0">Info-6</label></div><div class="col-sm-9 col-md-10 col-lg-9"><input type="text" class="form-control mb-0" id="info6" placeholder="Info-6"></div></div><div class="col-sm-12 col-md-12 col-lg-6 form-group text-left form-row align-items-center"><div class="col-sm-3 col-md-2 col-lg-3"><label for="info7 mb-0">Info-7</label></div><div class="col-sm-9 col-md-10 col-lg-9"><input type="text" class="form-control mb-0" id="info7" placeholder="Info-7"></div></div></div></div></div></div></div></div>');
        });

        $(document).on("click", "i.del" , function() {
            $(this).closest(".imgUp").remove();
        });
    });

    imageSubmitBtn.addEventListener("click", function() {
        masterId = null;
        addImageToList();
        uploadImage();
    });

});

function readImageMetaData(image, imageForm) {
    imageForm = imageForm[0];
    let formData = new FormData();
    formData.append("image", image);
    fetch("http://localhost/drik/get_image_metas", {
        method: "POST",
        headers: {
            "X-CSRF-TOKEN": csrf
        },
        body: formData
    })
        .then(res => res.json())
        .then(res => {
            let metaData = res.data;
            console.log(metaData);
            let height, width;
            if(metaData.COMPUTED) {
                height = metaData.COMPUTED.Height;
                width = metaData.COMPUTED.Width;
            } else {
                height = metaData[1];
                width = metaData[0];
            }

            imageForm.querySelector(".image-height").value = height;
            imageForm.querySelector(".image-width").value = width;

        })
}

function addImageToList() {
    let imageForms = [...document.querySelectorAll(".imgUp")];
    let lastForm = imageForms[imageForms.length-1];

    let imageObj = {image: imageFile};

    let height= lastForm.querySelector(".image-height").value;
    let width = lastForm.querySelector(".image-width").value;

    imageObj.height = height;
    imageObj.width = width;

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
    if(masterId) {
        formData.append("masterId", masterId);
    }
    saveImage(formData)

}

function saveImage(formData) {
    fetch("http://localhost/drik/upload_image", {
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
