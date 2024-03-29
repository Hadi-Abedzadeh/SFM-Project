<!DOCTYPE html>
<html dir="rtl" lang="fa-IR" class="no-js">

<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <!-- Single title -->
    <meta itemprop="description" content=""/>
    <!-- Single image -->
    <meta name="theme-color" content="#e92222"/>
    <!-- Site Unique Color -->
    <meta name="mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-title" content=""/>
    <!-- Site name | Site Description -->
    <meta name="description" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:description" content=""/>
    <meta name="twitter:title" content=""/>
    <!-- Site Unique background Color -->
    <meta name="screen-orientation" content="portrait"/>
    <!-- Site orientation in UC Browser -->
    <meta name="full-screen" content="yes"/>
    <meta name="imagemode" content="force"/>
    <meta name="layoutmode" content="fitscreen"/>
    <meta name="wap-font-scale" content="no"/>
    <!-- Site index link -->

    <title>لوکستای</title>
    <!--  slider  -->
    <link rel="stylesheet" href="/{{ env('THEME_NAME_FA') }}/assets/owl-carousel/css/owl.carousel.min.css"/>
    <link rel="stylesheet" href="/{{ env('THEME_NAME_FA') }}/assets/css/reset.min.css"/>
    <link rel="stylesheet" href="/{{ env('THEME_NAME_FA') }}/assets/css/stylesheet.css"/>
    <link rel="stylesheet" href="/{{ env('THEME_NAME_FA') }}/assets/css/responsive.css"/>
    <link rel="stylesheet" href="/{{ env('THEME_NAME_FA') }}/assets/css/fonts.css"/>
    <link href="https://fonts.googleapis.com/css?family=Rajdhani" rel="stylesheet">
    <!--[if lt IE 10]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flexibility/2.0.1/flexibility.js"></script>
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<div class="wrapper index-page" id="main-page">
    <header>
        <nav>
            <div class="menu noselect">
                <div class="menu-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="menu-text"><span>فهرست</span><span>بستن</span></div>
                <div class="menu-language">
                    <div class="selected-lang">
                        <img src="/{{ env('THEME_NAME_FA') }}/assets/images/sample/iran.svg" alt="">
                        <span>فارسی</span>
                        <img src="/{{ env('THEME_NAME_FA') }}/assets/images/sample/arrow-bottom.svg" alt="">
                    </div>
                    <div class="more-lang">
                        <a href="{{ change_lang('fa') }}">
                            <img src="/{{ env('THEME_NAME_FA') }}/assets/images/sample/english.svg" alt="">
                            <span>انگلیسی</span>
                        </a>
                    </div>
                </div>
            </div>
            <a class="logo" href="#"></a>
        </nav>
        <div id="fullmenu">
            <div class="fullmenulink">
                <a href="{{ route('frontend') }}">صفحه اصلی</a>
                <a href="{{ route('frontend.about.index', ['lang'=>'fa']) }}">درباره ما</a>
                <a href="{{ route('catalog', ['lang'=>'fa']) }}">کاتالوگ</a>
                <a href="{{ route('frontend.product.index', ['lang'=>'fa']) }}">محصولات</a>
                <a href="{{ route('frontend.blog.index', ['lang'=>'fa']) }}">بلاگ</a>
                <a href="{{ route('frontend.news.index', ['lang'=>'fa']) }}">اخبار</a>
                <a href="{{ route('frontend.contact-us.index', ['lang'=>'fa']) }}">تماس با ما</a>
            </div>
            <div class="fullmenucircle1"></div>
            <div class="fullmenucircle2"></div>
        </div>
        {{-- @include('sfm.frontend-fa.nav-fa') --}}
    </header>
    <main>
        <section id="sec1">
            @switch($brand)
                @case('luxtai')
                {{ create_box_fa(4) }} @break
                @case('komtai')
                {{ create_box_fa(6) }} @break
                @case('expanse')
                {{ create_box_fa(5) }} @break
            @endswitch
        </section>
        <section id="products-slider">
            <div class="bg-obj-right">
                <img src="/{{ env('THEME_NAME_FA') }}/assets/images/sample/path-2.svg" alt="" title="" width="200px">
            </div>
            <div class="container">
                <div class="row">
                    <div class="title">
                        <h2><span>محصولات</span> ما</h2>
                        <a href="{{ route('frontend.product.index', ['lang'=>'fa', 'brand' => request()->segment(3)]) }}">مشاهده
                            لیست محصولات</a>
                    </div>
                    <div class="content products">
                        <div class="slider owl-carousel owl-carousel-index owl-theme">
                            @foreach($products as $product)
                                <div class="items">
                                    <a href="{{ route('frontend.product.catalog', ['lang'=>'fa', 'slug'=> $product->slug]) }}">
                                        <img src="{{ $product->imageUrl }}" title="" alt="">
                                        <span class="cost">{{ $product->title }}</span>
                                        <span class="more-info">اطــــلاعــاتـــــــ بــیــــشــــتـــــــر</span>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="sec3">
            <div class="bg-obj-center-left">
                <img src="/{{ env('THEME_NAME_FA') }}/assets/images/sample/photo-2.jpg" data-speed="-1"
                     class="img-parallax" alt="" title=""></div>
            <div class="container">
                <div class="row">
                    <div class="title">
                        <h2><span>اخبار</span> ما</h2>
                        <a href="{{ route('frontend.news.index', ['lang'=>'fa']) }}">مشاهده لیست اخبار</a>
                    </div>
                    <div class="content">
                        @foreach($news as $report)
                            <div class="news-item">
                                <div class="img-news">
                                    <img src="{{ $report->imageUrl }}" alt="{{ $report->title }}"
                                         title="{{ $report->title }}">
                                </div>
                                <div class="content-news">
                                    <h3>{{$report->title}}</h3>
                                    <p>
                                        {{ substr(strip_tags($report->body), 0, 200) }}
                                        {{ strlen(strip_tags($report->body)) > 50 ? "..." : "" }}

                                    </p>
                                    <a href="{{ route('frontend.news.index.show', ['lang'=>'fa', 'slug'=>$report->slug]) }}">اطــــــــلاعــات
                                        بــیـشــــتر</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer footer-index" role="contentinfo">
        <div class="bg-obj-footer">
            <img src="/{{ env('THEME_NAME_FA') }}/assets/images/sample/bg-footer-obj.jpg" title="" alt=""></div>
        <div class="container">
            <div class="row">
                <div class="right-footer">
                    <div class="title">
                        <h2><span>تماس</span> با ما</h2>
                        <span>چطور با ما تماس بگیرید؟</span>
                    </div>
                    <div class="content">
                        <ul class="info-footer">
                            <li>{!! \App\Contact::find(2)->etc !!}</li>
                            <li>{!! json_decode(\App\Contact::find(2)->tel)->tel1 !!}</li>
                            <li>{!! json_decode(\App\Contact::find(2)->email)->email1 !!}</li>
                        </ul>
                    </div>
                    <div class="social">
                        <ul>
                            <li><a href="#">
                                    <img src="/{{ env('THEME_NAME_FA') }}/assets/images/sample/facebook.svg" alt="facebook"></a></li>
                            <li><a href="#">
                                    <img src="/{{ env('THEME_NAME_FA') }}/assets/images/sample/Twitter.svg" alt="Twitter"></a></li>
                            <li><a href="#">
                                    <img src="/{{ env('THEME_NAME_FA') }}/assets/images/sample/pintrest.svg" alt="pintrest"></a></li>
                            <li><a href="#">
                                    <img src="/{{ env('THEME_NAME_FA') }}/assets/images/sample/linkedin.svg" alt="linkedin"></a></li>
                        </ul>
                    </div>
                </div>
                <a href="#" target="_blank" class="left-footer">
                    <div class="obj-map-footer"><img src="/{{ env('THEME_NAME_FA') }}/assets/images/sample/map.jpg"
                                                     width="480px" title="" alt=""></div>
                </a>
                <div class="new-nav-link">
                    <a href="#" target="_blank">پرسش و پاسخ</a> | <a href="#" target="_blank">استخدام</a> | <a href="#"
                                                                                                               target="_blank">پشتیبانی</a>
                </div>
                <div class="copyright">
                    <a href="https://cafelead.agency"><img
                            src="/{{ env('THEME_NAME_FA') }}/assets/images/sample/Cafelead-copyright.svg" alt=""
                            title=""></a>
                </div>
            </div>
        </div>
    </footer>
    <footer class="site-footer-2 footer-index" role="contentinfo">
        <div class="content-footer">
            <div class="content">
                <div class="title">
                    <h2><span>تماس</span> با ما</h2>
                    <span>چطور با ما تماس بگیرید؟</span>
                </div>
                <div class="info">
                    <ul class="info-footer">
                        <li>ایران، تهران، میدان شیخ بهائی، <em>برج صدف</em> ، طبقه ۱۴، واحد ۱۴۴</li>
                        <li>۹۸+ <em>۲۱</em> ۱۱۱۰ ۸۸۲۱</li>
                        <li>INFO@<em>LUXTAI</em>.COM</li>
                    </ul>
                </div>
                <div class="social">
                    <ul>
                        <li><a href="#"><img src="/{{env('THEME_NAME_FA')}}/assets/images/sample/facebook.svg" alt="facebook"></a></li>
                        <li><a href="#"><img src="/{{env('THEME_NAME_FA')}}/assets/images/sample/Twitter.svg" alt="Twitter"></a></li>
                        <li><a href="#"><img src="/{{env('THEME_NAME_FA')}}/assets/images/sample/pintrest.svg" alt="pintrest"></a></li>
                        <li><a href="#"><img src="/{{env('THEME_NAME_FA')}}/assets/images/sample/linkedin.svg" alt="linkedin"></a></li>
                    </ul>
                </div>
            </div>
            <a href="#" target="_blank" class="map-footer"><img src="/{{env('THEME_NAME_FA')}}/assets/images/sample/map.jpg" alt="" title=""></a>
            <div class="new-nav-link"><a href="#" target="_blank">پرسش و پاسخ</a> | <a href="#" target="_blank">استخدام</a> | <a href="#" target="_blank">پشتیبانی</a></div>
            <div class="copyright">
                <a href="https://cafelead.agency"><img src="/{{env('THEME_NAME_FA')}}/assets/images/sample/Cafelead-copyright.svg" alt="" title=""></a>
            </div>
        </div>
        <div class="bg-obj-footer2"><img src="/{{env('THEME_NAME_FA')}}/assets/images/sample/path-footer-2.svg" alt=""></div>
    </footer>
</div>
<script src="/{{ env('THEME_NAME_FA') }}/assets/js/jquery-1.12.4.min.js"></script>
<script src="/{{ env('THEME_NAME_FA') }}/assets/js/script.js" defer="defer"></script>
<script src="/{{ env('THEME_NAME_FA') }}/assets/owl-carousel/js/owl.carousel.min.js"></script>

</body>

</html>
