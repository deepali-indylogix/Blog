@include('header')

    <div class="container jumbotron">

        <div>
        	<h3>Add New Category</h3>
        </div>
            
        <div class="col-sm-12">
            <form role="form" action="/category/add" method="get">
        		<label>Category: </label>
        		<input type="text" name="category_name"><br>
        		<button>Add Category</button>
        	</form>
        </div>
    </div>


@include('footer')