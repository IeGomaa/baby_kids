@include('Admin.assets.header')
    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="container" style="text-align: left;direction: ltr;max-width: 80% !important;">

            <div class="container">

                <div class="row layout-top-spacing">

                    <div id="basic" class="col-lg-12 col-sm-12 col-12 layout-spacing">
                        <form action="{{route('admin.activity.edit')}}" method="post">
                            @csrf
                            @method('put')

                            <input type="hidden" name="id" value="{{$activity->id}}">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Faq questions</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">

                                    <label>Title</label>
                                    <div class="input-group mb-4">
                                        <input type="text" class="form-control" name="title" value="{{$activity->title}}">
                                    </div>

                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Description</span>
                                        </div>
                                        <textarea name="description" class="form-control" aria-label="With textarea">{{$activity->description}}</textarea>
                                    </div>

                                    <label>Icon</label>
                                    <div class="input-group mb-4">
                                        <input type="text" class="form-control" name="icon" value="{{$activity->icon}}">
                                    </div>

                                    <label>Choose Background Color</label><br>
                                    <div class="btn-group bootstrap-select show-tick dropup">
                                        <select name="background" class="selectpicker" data-max-options="1" tabindex="-98">
                                            <option value="orange">Orange</option>
                                            <option value="blue">Blue</option>
                                            <option value="yellow">Yellow</option>
                                            <option value="green">Green</option>
                                        </select>
                                    </div>

                                    <br>
                                    <button type="submit" class="btn btn-primary">Save</button>
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
