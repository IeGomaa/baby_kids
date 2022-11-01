@include('Admin.assets.header')
    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="container" style="text-align: left;direction: ltr;max-width: 80% !important;">

            <div class="container">

                <div class="row layout-top-spacing">

                    <div id="basic" class="col-lg-12 col-sm-12 col-12 layout-spacing">
                        <form action="{{route('admin.question.edit')}}" method="post">
                            @csrf
                            @method('put')

                            <input type="hidden" name="id" value="{{$question->id}}">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Faq questions</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">

                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">question</span>
                                        </div>
                                        <textarea name="question" class="form-control" aria-label="With textarea">{{$question->question}}</textarea>
                                    </div>

                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">answer</span>
                                        </div>
                                        <textarea name="answer" class="form-control" aria-label="With textarea">{{$question->answer}}</textarea>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Edit</button>
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
