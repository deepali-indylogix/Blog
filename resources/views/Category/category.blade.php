@include('header')

<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-1"></div>
        <div class="col-md-10 well">
            <div class="card">
                <h2><b>Category</b></h2>
                <div class="card-body">
                    @if(session()->get('success'))
                        <div class="alert alert-success">
                          {{ session()->get('success') }}
                        </div>
                      @endif
                </div>

                <div class="col-sm-12" id="table2">
                    <table id="table" class="table table-striped" border="1">
                        <legend>
                            <a style="margin: 15px;" href="javascript:void(0)" id="abc" class="btn btn-danger">Delete</a>
                            <a style="margin: 15px;" href="/category" class="btn btn-primary">New Category</a>
                        </legend>

                        <thead>
                            <th><input type="checkbox" class="select_all" id="all_select"></th>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                                @foreach($result as $row)
                                <tr id="tr_{{$row->id}}">
                                    <td>
                                        <input type="checkbox" class="delete_all" id="delete" data-id="{{$row->id}}" value="{{$row->id}}" name="checked[]">
                                    </td>
                                    <td>{{$row->id}}</td>
                                    <td>{{$row->category_name}}</td>
                                    <td colspan=2>
                                        <a href="/category/show/{{$row->id}}">
                                            <button type="button" class="btn btn-primary">View</button>
                                        </a>
                                        <a href="/category/edit/{{$row->id}}">
                                            <button type="button" class="btn btn-success">Edit</button>
                                        </a>
                                        <a href="/category/destroy/{{$row->id}}">
                                            <button type="button" class="btn btn-danger">Delete</button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $result->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

@include('footer')
