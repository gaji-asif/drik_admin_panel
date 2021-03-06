@extends('backEnd.master')
@section('mainContent')
<div class="row">
    <div class="col-md-12">
        @if(session()->has('message-success'))
        <div class="alert alert-success background-success" role="alert">
         {{ session()->get('message-success') }}
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>
  @elseif(session()->has('message-danger'))
  <div class="alert alert-danger background-danger">
     {{ session()->get('message-danger') }}
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

<div class="card">
    <div class="container" style="margin: 0 auto;">


       <form method="GET" action="{{route('search_image_data')}}">
        <div class="search_form row" style="padding: 20px 30px;">
            <div class="col-lg-3"></div>
            <input name="search_key" type="text" class="form-control col-lg-5" id="" placeholder="Search Images">
            <button type="submit" class="btn search_submit_button col-lg-1" style="margin-left: 10px;">Search</i></button>
        </div>
    </form>
</div>
</div>


<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-lg-3" style="font-size: 21px; font-weight: bold;">All Upload Images ({{count($images)}})</div>
            <div class="col-lg-9" style="float: right;">
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-2">
                        <a href="{{url('upload_photo')}}">
                        <font class="col-lg-2">
                            <i class="fa fa-plus"></i><br>Add Image
                        </font>
                    </a>
                    </div>
                    <div class="col-lg-2">
                        <font class="col-lg-2">
                            <i class="fa fa-check"></i><br>Select ALL
                        </font>
                    </div>
                    <div class="col-lg-2">
                        <font class="col-lg-2">
                            <i class="fa fa-minus-circle"></i><br>Select None
                        </font>
                    </div>
                     <div class="col-lg-2">
                        <a class="col-lg-2">
                            <a class="get-all-selected"  data-toggle="modal" data-target="#edit-image-info">
                            <i class="fa fa-edit"></i><br>Batch Edit
                        </a>
                        </a>

                    </div>

                     <div class="col-lg-2">
                        <a style="cursor: pointer;" class="col-lg-2" onclick="bulkDelete();">
                            <i class="fa fa-trash-o"></i><br>Delete
                        </a>

                         <!-- <button type="button" onclick="bulkDelete();">Bulk Delete</button> -->

                        <!-- <button type="button" class="btn btn-danger" id="btn-bulk-delete"  data-toggle="modal">Bulk Delete</button> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if(isset($images))
    <div class="row col-lg-12">

        @foreach($images as $image)
        <div class="card-block col-lg-3">
           <div class="card">
            <p style="margin-top: 15px; margin-left: 8px;">
                <input type="checkbox" name="id" value="{{$image->id}}">

            </p>
            <img class="card-img-top" src="{{asset($image->thumbnail_url)}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">id#{{$image->id}}</h5>
                <p class="card-text">{{$image->title}}</p>
                <button  type="button" class="btn btn-success action-icon"><i class="fa fa-check"></i></button>
                <button onclick="editImage(<?php echo $image->id?>)" type="button" class="btn btn-success action-icon"><i class="fa fa-edit"></i></button>
                <button onclick="deleteAnImage(5)" type="button" class="btn btn-danger action-icon"><i class="fa fa-trash-o"></i></button>
              <!--   <button onclick="deleteAnImage(5)" type="button" class="btn btn-warning action-icon"><i class=" fa fa-certificate"></i></button> -->

            </div>
        </div>
    </div>

    @endforeach


</div>
<div class="row" style="margin: 0 auto; margin-bottom: 15px;">
   {!! $images->render() !!}
</div>
@endif

</div>

</div>
<div class="modal fade" id="image-edit-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="image-edit-modal">Update Image Metadata</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                    <div class="shadow-sm">
                        <div class="card-body iptc_metadata">
                            <div class="form-row">
                                <!-- <div class="col-md-12 text-left">
                                    <h6>IPTC Metadata</h6>
                                </div> -->
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
                                        <label for="info7 mb-0">State</label>
                                    </div>
                                    <div class="col-sm-12 col-md-9 col-lg-9">
                                        <input type="text" class="form-control mb-0 image-state" placeholder="State">
                                    </div>
                                </div>

                                <div class="form-group col-sm-12 col-md-12 col-lg-6 text-left form-row align-items-center">
                                    <div class="col-sm-3 col-md-2 col-lg-3">
                                        <label for="info7 mb-0">Postal code</label>
                                    </div>
                                    <div class="col-sm-12 col-md-9 col-lg-9">
                                        <input type="text" class="form-control mb-0 image-postal-code" placeholder="Postal code">
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
                                    <div class="col-sm-12 col-md-9 col-lg-9">
                                        <input type="text" class="form-control mb-0 image-copyright" placeholder="Copyright">
                                    </div>
                                </div>
                                <div class="form-group col-sm-12 col-md-12 col-lg-6 text-left form-row align-items-center">
                                    <div class="col-sm-3 col-md-2 col-lg-3">
                                        <label for="info7 mb-0">Email</label>
                                    </div>
                                    <div class="col-sm-12 col-md-9 col-lg-9">
                                        <input type="text" class="form-control mb-0 image-email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group col-sm-12 col-md-12 col-lg-6 text-left form-row align-items-center">
                                    <div class="col-sm-3 col-md-2 col-lg-3">
                                        <label for="info7 mb-0">Phone</label>
                                    </div>
                                    <div class="col-sm-12 col-md-9 col-lg-9">
                                        <input type="text" class="form-control mb-0 image-phone" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="form-group col-sm-12 col-md-12 col-lg-6 text-left form-row align-items-center">
                                    <div class="col-sm-3 col-md-2 col-lg-3">
                                        <label for="info7 mb-0">Website</label>
                                    </div>
                                    <div class="col-sm-12 col-md-9 col-lg-9">
                                        <input type="text" class="form-control mb-0 image-website" placeholder="Website">
                                    </div>
                                </div>
                                <div class="form-group col-sm-12 col-md-12 col-lg-6 text-left form-row align-items-center">
                                    <div class="col-sm-3 col-md-2 col-lg-3">
                                        <label for="info7 mb-0">Headline</label>
                                    </div>
                                    <div class="col-sm-12 col-md-9 col-lg-9">
                                        <input type="text" class="form-control mb-0 image-headline" placeholder="Headline">
                                    </div>
                                </div>
                                <div class="form-group col-sm-12 col-md-12 col-lg-6 text-left form-row align-items-center">
                                    <div class="col-sm-3 col-md-2 col-lg-3">
                                        <label for="info7 mb-0">Title</label>
                                    </div>
                                    <div class="col-sm-12 col-md-9 col-lg-9">
                                        <input type="text" class="form-control mb-0 image-title" placeholder="Title">
                                    </div>
                                </div>
                                {{--                                                                            <div class="form-group col-sm-12 col-md-12 col-lg-6 text-left form-row align-items-center">--}}
                                    {{--                                                                                <div class="col-sm-3 col-md-2 col-lg-3">--}}
                                        {{--                                                                                    <label for="info7 mb-0">Creation date</label>--}}
                                    {{--                                                                                </div>--}}
                                    {{--                                                                                <div class="col-sm-12 col-md-9 col-lg-9">--}}
                                        {{--                                                                                    <input type="text" class="form-control mb-0 image-creation-date" placeholder="Creation date">--}}
                                    {{--                                                                                </div>--}}
                                {{--                                                                            </div>--}}
                                <div class="form-group col-sm-12 col-md-12 col-lg-12 text-left form-row align-items-center">
                                    <label>Keywords</label>
                                    <input type="text" class="form-control tags-input" id="tags" value="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button id="update_image_btn" type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="edit-image-info" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                   <!--  <div class="modal-header">
                                        <h5 class="modal-title" id="image-edit-modal">Bulk Edit</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div> -->
                                    <div class="modal-body">
                                        <div class="col-md-12">
                                            <div class="card shadow-sm">
                                                <div class="card-body iptc_metadata">
                                                    <div class="form-row">
                                                        <div class="form-group col-sm-12 ">

                                                                <label for="info2 mb-0">Contributor</label>


                                                                <select class="js-example-basic-single col-sm-12 {{ $errors->has('role_id') ? ' is-invalid' : '' }}" name="contributor" id="info2">
                                                                    <option value="">Select Contributor</option>
                                                                    @if(isset($contributors))
                                                                        @foreach($contributors as $contributor)
                                                                            <option value="{{ $contributor->id }}">{{$contributor->name}}</option>
                                                                        @endforeach
                                                                    @endif
                                                                    </select>

                                                        </div>
                                                        <div class="form-group col-sm-12 ">

                                                            <label for="info1 mb-0">Category</label>


                                                            <select class="js-example-basic-single col-sm-12 {{ $errors->has('role_id') ? ' is-invalid' : '' }}" name="category" id="info1">
                                                                <option value="">Select Category</option>
                                                                @if(isset($categories))
                                                                    @foreach($categories as $category)
                                                                        <option value="{{ $category->id }}">{{$category->cat_name}}</option>
                                                                    @endforeach
                                                                @endif
                                                                </select>


                                                    </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button id="get_ids" type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>


<script src={{asset("public/js/imageList.js")}}></script>
</div>

@endSection
