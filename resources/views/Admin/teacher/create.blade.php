@include('Admin.assets.header')
    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="container" style="text-align: left;direction: ltr;max-width: 80% !important;">

            <div class="container">

                <div class="row layout-top-spacing">

                    <div id="basic" class="col-lg-12 col-sm-12 col-12 layout-spacing">
                        <form action="{{route('admin.teacher.insert')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Teacher</h4>
                                        </div>
                                    </div>
                                </div>


                                <div class="widget-content widget-content-area">

                                    <label for="fullName">Full Name</label>
                                    <div class="input-group mb-4">
                                        <input type="text" class="form-control" name="name">
                                    </div>

                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Description</span>
                                        </div>
                                        <textarea name="description" class="form-control" aria-label="With textarea"></textarea>
                                    </div>

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
