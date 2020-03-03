@include('header')

    <div class="container jumbotron">

        <div>
        	<h3>Add New Sub Category</h3>
        </div>
            
        <div class="col-sm-12">
            <form role="form" action="/sub_category/add" method="get">
                <label>Category Name: </label>

                <select name="category_name">
                    <option value="">Select Category</option>
                    @foreach($cat_name as $row)

                        <option value="{{$row->category_name}}">{{$row->category_name}}</option>

                    @endforeach

                </select><a href="/category"> Add New</a><br>

                <label>Sub Category Name: </label>
                <input type="text" name="sub_category_name"><br>
        		<button>Add Sub Category</button>
        	</form>
        </div>
    </div>


@include('footer')