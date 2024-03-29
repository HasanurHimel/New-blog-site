<section id="navArea">
    <nav class="navbar navbar-inverse" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav main_nav">
                <li class="active"><a href="{{ route('/') }}"><span class="fa fa-home desktop-home"></span><span class="mobile-show">Home</span></a></li>
                <li><a href="{{ route('tutorial-content') }}">Tutorial</a></li>
                {{--<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Mobile</a>--}}
                    {{--<ul class="dropdown-menu" role="menu">--}}
                        {{--<li><a href="#">Android</a></li>--}}
                        {{--<li><a href="#">Samsung</a></li>--}}
                        {{--<li><a href="#">Nokia</a></li>--}}
                        {{--<li><a href="#">Walton Mobile</a></li>--}}
                        {{--<li><a href="#">Sympony</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                @foreach($categories as $category)
                <li><a href="{{ route('category_content', ['category'=>$category->category_name, 'id'=>$category->id]) }}">{{ $category->category_name }}</a></li>
                @endforeach
                <li><a href="{{ route('contact-us') }}">Contact-us</a></li>
            </ul>
        </div>
    </nav>
</section>