
<div class="fixedsection">
    <div class="fixedsquare"></div>
    <div class="fixedheader"></div>
    <div class="fixedleft"></div>
    <div class="fixedleftplus"></div>
    <div class="fixedright"></div>
    <div class="fixedrightplus"></div>
    <div class="footermap"><img src="/{{env('THEME_NAME')}}/assets/images/map.jpg"></div>
</div>
<nav>
    <a class="logo" href="{{ route('frontend') }}"></a>
    <div class="navside">
        <div class="langchoose">
            <a class="active"><span>EN</span><div class="flagen"></div></a>
            <a href="{{ change_lang('en') }}">

                <span>IR</span><div class="flagfa"></div></a>
        </div>
        <div class="menu noselect">
            <div class="menu-text"><span>MENU</span><span>CLOSE</span></div>
            <div class="menu-icon">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <div class="background"></div>
</nav>
<div id="scrolldown">
    <div class="scroll-icon"></div>
    <div class="scrollposition">
        <span>SCROLL DOWN</span><span>OUR PRODUCTS</span><span>OUR NEWS</span><span>BACK TO TOP</span></div>
</div>
<div id="fullmenu">
    <div class="fullmenulink">
        <a href="{{ route('frontend') }}">HOME</a>
        <a href="{{ route('frontend.about.index', ['lang'=>'en', 'brand'=> $brand]) }}">ABOUT</a>
        <a href="{{ route('catalog', ['lang'=>'en']) }}">CATALOGE</a>
        <a href="{{ route('frontend.product.index', ['lang'=>'en', 'brand' => str_replace('brand-', '', $brand)]) }}">PRODUCT</a>
        <a href="{{ route('frontend.blog.index', ['lang'=>'en']) }}">BLOG</a>
        <a href="{{ route('frontend.news.index', ['lang'=>'en']) }}">NEWS</a>
        <a href="{{ route('frontend.contact-us.index', ['lang'=>'en']) }}">CONTACT</a>
    </div>
    <div class="fullmenusquare1"></div>
    <div class="fullmenusquare2"></div>
</div>
