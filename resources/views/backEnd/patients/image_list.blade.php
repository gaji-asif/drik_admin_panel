@extends('backEnd.master')
@section('mainContent')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Users</h5>
                </div>
                <div class="card-block">
                    <div class="dt-responsive table-responsive">
                        <table id="image-table" class="table table-striped table-bordered nowrap">
                            <thead>
                            <tr>
                                <th>SL.</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Height</th>
                                <th>Width</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($images))
                                @php $i = 1 @endphp
                                @foreach($images as $image)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$image->image_name}}</td>
                                        <td>
                                            <img src="{{$image->image_main_url}}" alt="">
                                        </td>
                                        <td>{{$image->height}}</td>
                                        <td>{{$image->width}}</td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <script src={{asset("public/js/imageList.js")}}></script>
    </div>

@endSection
