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
                            <label for="">Experience Title</label>
                            <input type="title" name="title" class="form-control" name="" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Add City</label>
                            <input type="city" name="city" class="form-control" name="" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Experience Description</label>
                            <textarea name="desc" id="" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                        <button class="btn btn-primary" type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@include('admin.inc.footer')
