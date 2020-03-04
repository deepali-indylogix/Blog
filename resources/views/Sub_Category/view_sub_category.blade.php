@include('header')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-1"></div>
        <div class="col-md-10 well">
            <div class="card">
                <h2><b>Sub Category</b></h2>
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <table class="table table-striped" border="1">
                        <legend><a style="margin: 15px;" href="/sub_category/view" class="btn btn-primary">Back</a></legend>
                        <thead>
                            <th>Id</th>
                            <th>{{$cs->id}}</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Category Name</td>
                                <td>{{$cs->category_name}}</td>
                            </tr>
                            <tr>
                                <td>Sub Category Name</td>
                                <td>{{$cs->sub_category_name}}</td>
                            </tr>
                        </tbody>
                    </table>
                
                </div>
            </div>
        </div>
    </div>
</div>

@include('footer')