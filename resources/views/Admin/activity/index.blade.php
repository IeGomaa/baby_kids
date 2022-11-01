@include('Admin.assets.header')
    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="container" style="text-align: left;direction: ltr;max-width: 80% !important;">
            <div class="container">

                <div class="row layout-top-spacing">

                    <div id="tableHover" class="col-lg-12 col-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Table</h4>
                                        <a href="{{route('admin.activity.create')}}">
                                            <button class="btn btn-primary">Add New Activity</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover mb-4">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Icon</th>
                                                <th>Description</th>
                                                <th>Background</th>
                                                <th>Update</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($activities as $activitie)
                                            <tr>
                                                <td>{{$activitie->title}}</td>
                                                <td>{{$activitie->icon}}</td>
                                                <td>{{$activitie->description}}</td>
                                                <td>{{$activitie->background}}</td>
                                                <td>
                                                    <form action="{{route('admin.activity.update')}}" method="post">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{$activitie->id}}">
                                                        <button type="submit" class="btn btn-warning">Update</button>
                                                    </form>
                                                </td>
                                                <td>
                                                    <form action="{{route('admin.activity.delete')}}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <input type="hidden" name="id" value="{{$activitie->id}}">
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!--  END CONTENT AREA  -->
@include('Admin.assets.footer')
