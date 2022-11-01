@include('Admin.assets.header')
    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="container" style="text-align: left;direction: ltr;max-width: 80% !important;">

            <div class="container">

                <div class="row layout-top-spacing">

                    <div id="basic" class="col-lg-12 col-sm-12 col-12 layout-spacing">
                        <form action="{{route('admin.slider.edit')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Slider</h4>
                                        </div>
                                    </div>
                                </div>

                                <input type="hidden" name="id" value="{{$slider->id}}">

                                <div class="widget-content widget-content-area">

                                    <div class="form-group mb-4 mt-3">
                                        <label for="exampleFormControlFile1">Image</label>
                                        <input name="image" type="file" class="form-control-file" id="exampleFormControlFile1">
                                    </div>

                                    <button type="submit" class="btn btn-light">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--  END CONTENT AREA  -->
@include('Admin.assets.footer')
