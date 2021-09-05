@include('admin.inc.header')

<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
    <div class="container-fluid">
        <div class="header-body">
            <!-- Card stats -->

        </div>
    </div>
</div>
<div class="container-fluid mt--7">
    <div class="row">
        <div class="col-md-12">
            {{Session::get('success')}}
            <div class="card shadow">
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="">Blog Title</label>
                            <input type="title" name="title" class="form-control" name="" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Short Description</label>
                            <textarea name="shortdesc" class="form-control" id="" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Experience Description</label>
                            <textarea class="summernote" name="description">
                                </textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Add Img</label>
                            <input type="file" name="img" class="form-control" name="" id="">
                        </div>
                        <button class="btn btn-primary" type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@include('admin.inc.footer')
