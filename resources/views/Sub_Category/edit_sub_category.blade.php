@include('header')

    <div class="container well">
        <div class="col-sm-12">
            <h2><b>Sub Category</b></h2>
            <form class="form-horizontal" action="/sub_category/update/{{$edit_sub->id}}" method="get">
                <legend>Add New Sub Category</legend>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="category">Category Name:</label>
                    <div class="col-sm-10">                        
                        <select class="form-control" name="category_name">
                            <option value="{{ $edit_sub->category_name }}" selected>{{ $edit_sub->category_name }}</option>

                            @foreach($cat_name as $row)
                                @if($row->category_name != $edit_sub->category_name)
                                    <option value="{{$row->category_name}}">{{$row->category_name}}</option>
                                @endif
                            @endforeach
                        </select>
                        <a href="/category">add new</a>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="sub_category">Sub Category Name:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="sub_category_name" value="{{ $edit_sub->sub_category_name }}">
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
