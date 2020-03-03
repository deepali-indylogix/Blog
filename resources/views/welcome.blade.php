@include('header')

    <div class="content">
        <div class="title m-b-md">
            Blog
        </div>

        @if (Route::has('login'))
            <div class="links">
                @auth
                    <a href="{{ url('/category/view') }}">Category</a>
                    <a href="{{ url('/sub_category/view') }}">Sub Category</a>
                    <a href="{{ url('/#') }}">Products</a>
                @endauth
            </div>
        @endif

    </div>
        
