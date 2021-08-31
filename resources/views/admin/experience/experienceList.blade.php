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
        <div class="col-12">
            <div class="card shadow">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-5">
                        <h4 class="card-title">Experience List</h4>
                        <div>
                            <a href="{{url('/admin/add-experience')}}">
                                <button type="button" class="btn mb-1 btn-primary">Add Service <span class="btn-icon-right"><i class="fa fa-plus"></i></span>
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th>Title</th>
                                    <th>City</th>
                                    <th>Description</th>
                                    <th>Operation</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($allData as $data)
                                <tr>
                                    <td>{{$data->title}}</td>
                                    <td>{{$data->city}}</td>
                                    <td>{{$data->desc}}</td>
                                    <td>
                                        <a href="{{url('/admin/edit-experience')}}/{{$data->id}}" class="btn btn-warning">Edit</a>
                                        <a href="{{url('/admin/delete-experience')}}/{{$data->id}}" class="btn btn-danger">Delete</a>
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






@include('admin.inc.footer')
