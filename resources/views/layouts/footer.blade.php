<footer class="footer" id="footer">
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <span>Copyright © <a href="{{ route('index') }}">{{ $site_title or '' }}</a></span> |
                    <span>蜀ICP备16008148号-2</span> |
                    <span>Powered by <a href="https://github.com/lufficc/Xblog">Xblog</a> </span>|
                    <a href="{{ url('feed.xml') }}" rel="feed" type="application/rss+xml"
                       title="Feed"><img width="13"
                                         src="{{ asset('image/icon/icon1.png') }}"
                                         alt="Feed"></a>
                </div>
            </div>
        </div>
    </div>
</footer>