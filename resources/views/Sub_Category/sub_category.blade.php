@include('header')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-1"></div>
        <div class="col-md-10 well">
            <div class="card">
                <h2><b>Sub Category</b></h2>
                <div class="card-body">
                    @if(session()->get('success'))
                        <div class="alert alert-success">
                          {{ session()->get('success') }}
                        </div>
                      @endif
                </div>
                <div class="col-sm-12" id="sub_cat_table">
                    <table class="table table-striped" border="1">
                        <legend>
                            <a style="margin: 15px;" href="javascript:void(0)" id="sub" class="btn btn-danger">Delete</a>
                            <a style="margin: 15px;" href="/sub_category" class="btn btn-primary">New Sub Category</a></legend>
                        <thead>
                            <th><input type="checkbox" class="sub_select_all" id="sub_select_all"></th>
                            <th>Id</th>
                            <th>Category Name</th>
                            <th>Sub Category Name</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                                @foreach($res as $row)
                                <tr>
                                    <td>
                                        <input type="checkbox" class="sub_delete" id="sub_delete" data-id="{{$row->id}}" value="{{$row->id}}" name="checked[]">
                                    </td>
                                    <td>{{$row->id}}</td>
                                    <td>{{$row->category_name}}</td>
                                    <td>{{$row->sub_category_name}}</td>
                                    <td colspan=3>
                                        <a href="/sub_category/show/{{$row->id}}">
                                            <button type="button" class="btn btn-primary">View</button>
                                        </a>
                                        <a href="/sub_category/edit/{{$row->id}}">
                                            <button type="button" class="btn btn-success">Edit</button>
                                        </a>
                                        <a href="/sub_category/destroy/{{$row->id}}">
                                            <button type="button" class="btn btn-danger">Delete</button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $res->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

@include('footer')
