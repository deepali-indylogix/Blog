@include('header')

    <div class="container jumbotron">
        <div>
        	<h3>Edit Sub Category</h3>
        </div>
            
        <div>
        	<form role="form" action="/sub_category/update/{{$edit_sub->id}}" method="get">


                <label>Category Name: </label>

                <select name="category_name">
                    <option value="{{ $edit_sub->category_name }}" selected>{{ $edit_sub->category_name }}</option>

                    @foreach($cat_name as $row)

                        <option value="{{$row->category_name}}">{{$row->category_name}}</option>
                        
                    @endforeach

                </select><br>

                <label>Sub Category name: </label>
                <input type="text" name="sub_category_name" value="{{ $edit_sub->sub_category_name }}" ><br>
        		<button>Edit Sub Category</button>
        	</form>
        </div>
    </div>


@include('footer')