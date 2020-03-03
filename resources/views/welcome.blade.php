@include('header')

    <div class="content">

        <div class="title m-b-md">
            Blog
        </div>

        <div class="links">
            <a href="{{ url('/category/view') }}">Category</a>
            <a href="{{ url('/sub_category/view') }}">Sub Category</a>
            <a href="{{ url('/#') }}">Products</a>
        </div>
        
    </div>