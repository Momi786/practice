@include('admin.inc.header')

@php
    foreach ($aboutdata as $data) {
        if($data->name == "about"){
            $about = $data;
        }
        if($data->name == "slide"){
            $slide = $data;
        }
    }
@endphp

<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
    <div class="container-fluid">
        <div class="header-body">
            <!-- Card stats -->

        </div>
    </div>
</div>

<div class="container-fluid mt--7">
    <div class="row">
        <div class="col-md-6">
            <div class="">
                <div class="card shadow">
                    <div class="card-header bg-info text-white">
                        <h2>About Paage Content</h2>
                    </div>
                    <div class="card-body">

                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="">Main Title</label>
                                <input type="text" name="maintitle" value="{{$about->maintitle}}" class="form-control" id="">
                            </div>
                            <div class="form-group">
                                <label for="">Short Title</label>
                                <input type="text" name="shorttitle" value="{{$about->shorttitle}}" class="form-control" id="">
                            </div>
                            <div class="form-group">
                                <label for="">Title</label>
                                <input type="text" name="title" value="{{$about->title}}" class="form-control" id="">
                            </div>
                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea name="desc" id="" class="form-control" cols="30" rows="10">{{$about->desc}}</textarea>
                            </div>
                            <input type="hidden" name="name" value="{{$about->about}}" id="">
                            <button class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="">
                <div class="card shadow">
                    <div class="card-header bg-info text-white">
                        <h2>About Paage Content</h2>
                    </div>
                    <div class="card-body">

                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="">Main Title</label>
                                <input type="text" name="maintitle" value="{{$slide->maintitle}}" class="form-control" id="">
                            </div>
                            <div class="form-group">
                                <label for="">Short Title</label>
                                <input type="text" name="shorttitle" value="{{$slide->shorttitle}}" class="form-control" id="">
                            </div>
                            <div class="form-group">
                                <label for="">Title</label>
                                <input type="text" name="title" value="{{$slide->title}}" class="form-control" id="">
                            </div>
                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea name="desc" id="" class="form-control" cols="30" rows="10">{{$slide->desc}}</textarea>
                            </div>
                            <input type="hidden" name="name" value="{{$slide->slide}}" id="">
                            <button class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@include('admin.inc.sidebar')
