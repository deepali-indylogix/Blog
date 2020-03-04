@include('header')

    <div class="container well">
        <div class="col-sm-12">
            <h2><b>Category</b></h2>
            <form class="form-horizontal" action="/category/add" method="get">
                <legend>Add New Category</legend>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="category">Category Name:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="category_name" placeholder="Enter category name">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>           
        </div>
    </div>

@include('footer')