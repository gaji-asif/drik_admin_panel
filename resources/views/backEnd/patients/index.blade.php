@extends('backEnd.master')
@section('mainContent')

<link rel="stylesheet" href="{{asset("public/css/drik/css/all.min.css")}}">
<link rel="stylesheet" href="{{asset("public/css/drik/css/style.css")}}">
<link rel="stylesheet" href="{{asset("public/css/drik/css/responsive.css")}}">

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
                             <div class="form-group row">
                                <div class="col-lg-1"></div>
                                <label for="role_id" class="col-lg-2 col-form-label text-md-right">Select contributor: </label>
                                <div class="col-lg-3">
                                    <select class="js-example-basic-single col-sm-12 {{ $errors->has('role_id') ? ' is-invalid' : '' }}" name="contributor" id="contributor">
                                    <option value="">Select contributor</option>
                                    @if(isset($contributors))
                                        @foreach($contributors as $contributor)


                                            <option value="{{ $contributor->id }}">{{$contributor->name}}</option>


                                        @endforeach
                                    @endif
                                    </select>

                                </div>
                            </div>
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
                                                                    Upload Your Image<input type="file" required class="uploadFile img" value="Upload Photo" >
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
                                                                                    <label for="info1 mb-0">Height</label>
                                                                                </div>
                                                                                <div class="col-sm-9 col-md-10 col-lg-9">
                                                                                    <input type="text" class="form-control mb-0 image-height" placeholder="Info-1">
                                                                                    <div class="invalid-feedback">
                                                                                        Height is required
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group col-sm-12 col-md-12 col-lg-6 text-left form-row align-items-center">
                                                                                <div class="col-sm-3 col-md-2 col-lg-3">
                                                                                    <label for="info2 mb-0">Width</label>
                                                                                </div>
                                                                                <div class="col-sm-9 col-md-10 col-lg-9">
                                                                                    <input type="text" class="form-control mb-0 image-width" placeholder="Info-2">
                                                                                    <div class="invalid-feedback">
                                                                                        Width is required
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group col-sm-12 col-md-12 col-lg-6 text-left form-row align-items-center">
                                                                                <div class="col-sm-3 col-md-2 col-lg-3">
                                                                                    <label for="artist mb-0">Author</label>
                                                                                </div>
                                                                                <div class="col-sm-9 col-md-10 col-lg-9">
                                                                                    <input type="text" class="form-control mb-0 image-author" placeholder="Author">
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group col-sm-12 col-md-12 col-lg-6 text-left form-row align-items-center">
                                                                                <div class="col-sm-3 col-md-2 col-lg-3">
                                                                                    <label for="info4 mb-0">Country</label>
                                                                                </div>
                                                                                <div class="col-sm-9 col-md-10 col-lg-9">
                                                                                    <input type="text" class="form-control mb-0 image-country" placeholder="Country">
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group col-sm-12 col-md-12 col-lg-6 text-left form-row align-items-center">
                                                                                <div class="col-sm-3 col-md-2 col-lg-3">
                                                                                    <label for="info5 mb-0">City</label>
                                                                                </div>
                                                                                <div class="col-sm-9 col-md-10 col-lg-9">
                                                                                    <input type="text" class="form-control mb-0 image-city" placeholder="City">
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group col-sm-12 col-md-12 col-lg-6 text-left form-row align-items-center">
                                                                                <div class="col-sm-3 col-md-2 col-lg-3">
                                                                                    <label for="info6 mb-0">Caption</label>
                                                                                </div>
                                                                                <div class="col-sm-9 col-md-10 col-lg-9">
                                                                                    <input type="text" class="form-control mb-0 image-caption" placeholder="Caption">
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group col-sm-12 col-md-12 col-lg-6 text-left form-row align-items-center">
                                                                                <div class="col-sm-3 col-md-2 col-lg-3">
                                                                                    <label for="info7 mb-0">Copyright</label>
                                                                                </div>
                                                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                                                    <input type="text" class="form-control mb-0 image-copyright" placeholder="Copyright">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group col-sm-12 col-md-12 col-lg-12 text-left form-row align-items-center">
                                                                                <label>Keywords</label>
                                                                                <input type="text" class="form-control tags-input" id="tags" value="" />
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

                                <input id="image_upload_btn" type="button" class="finish action-button" value="Upload" />
{{--                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />--}}
{{--                                <input type="button" name="finish" class="finish action-button" value="Finish" />--}}
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src={{asset("public/js/imageHandler.js")}}></script>
</div>
@endSection
