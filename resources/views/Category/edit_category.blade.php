@include('header')

    <div class="container jumbotron">
        <div>
        	<h3>Edit Category</h3>
        </div>
            
        <div>
        	<form role="form" action="/category/update/{{$catt->id}}" method="get">
        		<label>Category: </label>
        		<input type="text" name="category_name" value="{{ $catt->category_name }}" ><br>
        		<button>Edit Category</button>
        	</form>
        </div>
    </div>


@include('footer')