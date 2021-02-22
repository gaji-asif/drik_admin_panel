@extends('backEnd.master')
@section('mainContent')

@if(session()->has('message-success'))
<div class="alert alert-success mb-3 background-success" role="alert">
	{{ session()->get('message-success') }}
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
</div>
@elseif(session()->has('message-danger'))
<div class="alert alert-danger">
	{{ session()->get('message-danger') }}
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
</div>
@endif
@if(session()->has('message-success-delete'))
<div class="alert alert-danger mb-3 background-danger" role="alert">
	{{ session()->get('message-success-delete') }}
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
</div>
@elseif(session()->has('message-danger-delete'))
<div class="alert alert-danger">
	{{ session()->get('message-danger-delete') }}
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
</div>
@endif


<div class="card">
    <div id="Contributor_dashboard">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
                    <div class="step mb-3 shadow-sm">
                        <form id="msform">
                            <!-- fieldsets -->
                            <fieldset>
                                <div class="step-box">
                                    <div class="form-row justify-content-center">
                                        <div class="col-md-10">
                                            <div class="form-row">
                                                <div class="col-sm-12">
                                                    <div class="imgUp">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-4">
                                                                <div class="imagePreview"></div>
                                                                <label class="btn btn-primary theme-btn">
                                                                    Upload Your Image<input type="file" class="uploadFile img" value="Upload Photo" >
                                                                </label>
                                                            </div>

                                                            <div class="col-md-8">
                                                                <div class="card shadow-sm">
                                                                    <div class="card-body iptc_metadata">
                                                                        <div class="form-row">
                                                                            <div class="col-md-12 text-left">
                                                                                <h6>IPTC Metadata</h6>
                                                                            </div>
                                                                            <div class="form-group col-sm-12 col-md-12 col-lg-6 text-left form-row align-items-center">
                                                                                <div class="col-sm-3 col-md-2 col-lg-3">
                                                                                    <label for="info1 mb-0">Info-1</label>
                                                                                </div>
                                                                                <div class="col-sm-9 col-md-10 col-lg-9">
                                                                                    <input type="text" class="form-control mb-0" id="info1" placeholder="Info-1">
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group col-sm-12 col-md-12 col-lg-6 text-left form-row align-items-center">
                                                                                <div class="col-sm-3 col-md-2 col-lg-3">
                                                                                    <label for="info2 mb-0">Info-2</label>
                                                                                </div>
                                                                                <div class="col-sm-9 col-md-10 col-lg-9">
                                                                                    <input type="text" class="form-control mb-0" id="info2" placeholder="Info-2">
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group col-sm-12 col-md-12 col-lg-6 text-left form-row align-items-center">
                                                                                <div class="col-sm-3 col-md-2 col-lg-3">
                                                                                    <label for="info3 mb-0">Info-3</label>
                                                                                </div>
                                                                                <div class="col-sm-9 col-md-10 col-lg-9">
                                                                                    <input type="text" class="form-control mb-0" id="info3" placeholder="Info-3">
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group col-sm-12 col-md-12 col-lg-6 text-left form-row align-items-center">
                                                                                <div class="col-sm-3 col-md-2 col-lg-3">
                                                                                    <label for="info4 mb-0">Info-4</label>
                                                                                </div>
                                                                                <div class="col-sm-9 col-md-10 col-lg-9">
                                                                                    <input type="text" class="form-control mb-0" id="info4" placeholder="Info-4">
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group col-sm-12 col-md-12 col-lg-6 text-left form-row align-items-center">
                                                                                <div class="col-sm-3 col-md-2 col-lg-3">
                                                                                    <label for="info5 mb-0">Info-5</label>
                                                                                </div>
                                                                                <div class="col-sm-9 col-md-10 col-lg-9">
                                                                                    <input type="text" class="form-control mb-0" id="info5" placeholder="Info-5">
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group col-sm-12 col-md-12 col-lg-6 text-left form-row align-items-center">
                                                                                <div class="col-sm-3 col-md-2 col-lg-3">
                                                                                    <label for="info6 mb-0">Info-6</label>
                                                                                </div>
                                                                                <div class="col-sm-9 col-md-10 col-lg-9">
                                                                                    <input type="text" class="form-control mb-0" id="info6" placeholder="Info-6">
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group col-sm-12 col-md-12 col-lg-6 text-left form-row align-items-center">
                                                                                <div class="col-sm-3 col-md-2 col-lg-3">
                                                                                    <label for="info7 mb-0">Info-7</label>
                                                                                </div>
                                                                                <div class="col-sm-9 col-md-10 col-lg-9">
                                                                                    <input type="text" class="form-control mb-0" id="info7" placeholder="Info-7">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-sm-12">
                                                    <span class="btn btn-sm theme-btn imgAdd">Add More</span>
                                                </div>



                                            </div><!-- row -->


                                        </div>
                                    </div>
                                </div>

                                <input type="button" id="image-upload-btn" class="finish action-button" value="Upload">

{{--                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />--}}
{{--                                <input type="button" name="finish" class="finish action-button" value="Finish" />--}}
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(".imgAdd").click(function(){
            $(this).closest(".row").find('.imgAdd').before('<div class="imgUp" id="imgUp"><div class="row align-items-center"><div class="col-md-4"><div class="imagePreview"></div><label class="btn btn-primary theme-btn">Upload Your Image<input type="file" class="uploadFile img" value="Upload Photo"></label><i class="fa fa-times del"></i></div><div class="col-md-8"><div class="card shadow-sm"><div class="card-body iptc_metadata"><div class="form-row"><div class="col-md-12 text-left"><h6>IPTC Metadata</h6></div><div class="col-sm-12 col-md-12 col-lg-6 form-group text-left form-row align-items-center"><div class="col-sm-3 col-md-2 col-lg-3"><label for="info1 mb-0">Info-1</label></div><div class="col-sm-9 col-md-10 col-lg-9"><input type="text" class="form-control mb-0" id="info1" placeholder="Info-1"></div></div><div class="col-sm-12 col-md-12 col-lg-6 form-group text-left form-row align-items-center"><div class="col-sm-3 col-md-2 col-lg-3"><label for="info2 mb-0">Info-2</label></div><div class="col-sm-9 col-md-10 col-lg-9"><input type="text" class="form-control mb-0" id="info2" placeholder="Info-2"></div></div><div class="col-sm-12 col-md-12 col-lg-6 form-group text-left form-row align-items-center"><div class="col-sm-3 col-md-2 col-lg-3"><label for="info3 mb-0">Info-3</label></div><div class="col-sm-9 col-md-10 col-lg-9"><input type="text" class="form-control mb-0" id="info3" placeholder="Info-3"></div></div><div class="col-sm-12 col-md-12 col-lg-6 form-group text-left form-row align-items-center"><div class="col-sm-3 col-md-2 col-lg-3"><label for="info4 mb-0">Info-4</label></div><div class="col-sm-9 col-md-10 col-lg-9"><input type="text" class="form-control mb-0" id="info4" placeholder="Info-4"></div></div><div class="col-sm-12 col-md-12 col-lg-6 form-group text-left form-row align-items-center"><div class="col-sm-3 col-md-2 col-lg-3"><label for="info5 mb-0">Info-5</label></div><div class="col-sm-9 col-md-10 col-lg-9"><input type="text" class="form-control mb-0" id="info5" placeholder="Info-5"></div></div><div class="col-sm-12 col-md-12 col-lg-6 form-group text-left form-row align-items-center"><div class="col-sm-3 col-md-2 col-lg-3"><label for="info6 mb-0">Info-6</label></div><div class="col-sm-9 col-md-10 col-lg-9"><input type="text" class="form-control mb-0" id="info6" placeholder="Info-6"></div></div><div class="col-sm-12 col-md-12 col-lg-6 form-group text-left form-row align-items-center"><div class="col-sm-3 col-md-2 col-lg-3"><label for="info7 mb-0">Info-7</label></div><div class="col-sm-9 col-md-10 col-lg-9"><input type="text" class="form-control mb-0" id="info7" placeholder="Info-7"></div></div></div></div></div></div></div></div>');
        });
        $(document).on("click", "i.del" , function() {
            $(this).closest(".imgUp").remove();
        });
    </script>
</div>
@endSection
