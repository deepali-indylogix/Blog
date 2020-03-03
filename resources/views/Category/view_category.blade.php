@include('header')

<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-1"></div>
        <div class="col-md-10 well">
            <div class="card">
                
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <table class="table table-striped" border="1">
                        <legend><a style="margin: 15px;" href="/category/view" class="btn btn-primary">Back</a></legend>
                        
                        <thead>
                            <th>Id</th>
                            <th>{{$ct->id}}</th>
                            
                        </thead>
                        <tbody>
                            <tr>
                                <td>Category Name</td>
                                <td>{{$ct->category_name}}</td>
                            </tr>
                            <tr>
                                <td>Created at</td>
                                <td>{{$ct->created_at}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

    

@include('footer')