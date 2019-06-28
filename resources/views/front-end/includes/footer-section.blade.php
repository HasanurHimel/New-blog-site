<footer id="footer">
    <div class="footer_top">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="footer_widget wow fadeInLeftBig">
                    <h2>Md Himel Khan</h2>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="footer_widget wow fadeInDown">
                    <h2>Tag</h2>
                    <ul class="tag_nav">

                        @foreach($categories as $category)
                            <li><a href="{{ route('category_content', ['category'=>$category->category_name, 'id'=>$category->id]) }}">{{ $category->category_name }}</a></li>
                        @endforeach

                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="footer_widget wow fadeInRightBig">
                    <h2>Contact</h2>
                    <p>Hasanur Rahman Himel</p>
                    <address>
                        Nazim khan <br/> Rangpur , Bangladesh
                    </address>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_bottom">
        <p class="copyright">Copyright &copy; 2018 <a href="{{ route('/') }}">বিশ্বের টুকিটাকি</a></p>
        <p class="developer">Developed By Himel</p>
    </div>
</footer>